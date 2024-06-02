<?php

if (!isset($_GET["id"])) {
    $id = 1;
} else {
    $id = $_GET["id"];
}

require_once("db-conn.php");
$sql = "SELECT products.*, productimages.ImageName, category.name AS category_name, brands.BrandName
FROM products 
JOIN productimages ON products.ProductID=productimages.ProductID
JOIN category ON products.category_id=category.id
JOIN brands ON products.brand_id=brands.BrandID
WHERE products.ProductID = $id AND valid= 0";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
    $productExit = true;
    $title = $row["ProductName"];
} else {
    $productExit = false;
    $title = "此商品不存在";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>product edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <?php include("css.php") ?>
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>修改商品資料</h1>
        <div class="text-end">
            <a href="product-list.php" class="btn btn-primary text-end"><i class="fa-solid fa-arrow-left"></i>回使用者列表</a>
        </div>

        <hr>
        <form action="doUpdateProduct.php" method="post" enctype="multipart/form-data">
            <?php if ($productExit) : ?>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $row["ProductID"] ?>">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">商品名稱</label>
                    <input type="text" class="form-control" name="name" value="<?= $row["ProductName"] ?>">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">商品描述</label>
                    <input type="text" class="form-control" name="description" value="<?= $row["description"] ?>">
                </div>
                <div class="mb-2">
                    <label for="form-label" class="form-label">商品圖片</label>
                    <img class="box" src="/PHP-MYSQL/product_all/product_images/<?= $row["ImageName"] ?>" alt="">
                    <input type="file" class="form-control" name="file" value="<?= $row["ImageName"] ?>">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">種類</label>
                    <select name="category" class="form-control">
                        <option selected><?= $row["category_name"] ?></option>
                        <option value="1">飼料</option>
                        <option value="2">零食</option>
                        <option value="3">罐頭</option>
                        <option value="4">玩具</option>
                        <option value="5">保健</option>
                        <option value="6">外出</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">品牌</label>
                    <select class="form-select" name="brand">
                        <option selected><?=$row["BrandName"]?></option>
                        <option value="1">Farmina 法米納</option>
                        <option value="2">go!</option>
                        <option value="3">Hyperr 超躍</option>
                        <option value="4">HALO 嘿囉</option>
                        <option value="5">Nurture PRO 天然密碼</option>
                        <option value="6">now</option>
                        <option value="7">Orijen 歐睿健</option>
                        <option value="8">ZiwiPeak 巔峰</option>
                        <option value="9">優格</option>
                        <option value="10">本牧</option>
                        <option value="11">尊爵</option>
                        <option value="12">莫比</option>
                        <option value="13">紐頓</option>
                        <option value="14">洛特夫</option>
                        <option value="15">紐崔斯</option>
                        <option value="16">柏萊富</option>
                        <option value="17">K9 Natural</option>
                        <option value="18">ACANA愛肯拿</option>
                        <option value="19">第一饗宴</option>
                        <option value="20">法國皇家</option>
                        <option value="21">自然邏輯</option>
                        <option value="22">小犬威利</option>
                        <option value="23">陪心寵糧</option>
                        <option value="24">汪喵星球</option>
                        <option value="25">沙發馬鈴薯</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">商品口味</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor1" value="1">
                        <label class="form-check-label" for="flavor1">魚</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor2" value="2">
                        <label class="form-check-label" for="flavor2">海鮮</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor3" value="3">
                        <label class="form-check-label" for="flavor3">鴨肉</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor3" value="3">
                        <label class="form-check-label" for="flavor3">雞肉</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor3" value="3">
                        <label class="form-check-label" for="flavor3">羊肉</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor3" value="3">
                        <label class="form-check-label" for="flavor3">豬肉</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="flavor3" value="3">
                        <label class="form-check-label" for="flavor3">牛肉</label>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">價格</label>
                    <input type="tel" class="form-control" name="price" value="<?= $row["price"] ?>">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">上架數量</label>
                    <input type="tel" class="form-control" name="stock" value="<?= $row["stock"] ?>">
                </div>
                <button class="btn btn-primary" type="submit">送出</button>
            <?php else : ?>
                <h1>此商品不存在</h1>
            <?php endif ?>
        </form>
    </div>
</body>

</html>