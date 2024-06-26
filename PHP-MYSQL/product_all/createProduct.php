<?php
require_once("db-conn.php");

$sql = "SELECT * FROM imgs";
$result = $conn->query($sql);
$row = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <title>addProduct</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("css.php") ?>
</head>

<body>
    <div class="container">
        <div class="mx-auto ">
            <h1 class="mb-3">新增商品</h1>
            <form action="doCreateProduct.php" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="" class="form-label">商品名稱</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">商品描述</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="mb-2">
                    <label for="form-label" class="form-label">商品圖片</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">種類</label>
                    <select name="category" class="form-control">
                        <option selected>請選擇商品種類</option>
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
                        <option selected>請選擇商品品牌</option>
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
                    <label for="" class="form-label">口味</label>
                    <select class="form-select" name="flavor">
                        <option selected>請選擇商品口味</option>
                        <option value="26">魚</option>
                        <option value="27">海鮮</option>
                        <option value="28">鴨肉</option>
                        <option value="29">雞肉</option>
                        <option value="30">羊肉</option>
                        <option value="31">豬肉</option>
                        <option value="32">牛肉</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="fform-label">價格</label>
                    <input type="tel" class="form-control" name="price">
                </div>
                <div class="mb-2">
                    <label for="" class="fform-label">上架數量</label>
                    <input type="tel" class="form-control" name="stock">
                </div>
                <button class="btn btn-primary" type="submit">送出</button>
            </form>
        </div>
    </div>
</body>

</html>