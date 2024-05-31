<?php
require_once("db-conn.php");
// if (!isset($_POST["category"])) {
//     $sqlAll = "SELECT products.*, imgs.filename AS imgname FROM products
// JOIN imgs ON products.id=imgs.product_id";
// }
// $resultAll = $conn->query($sqlAll);
// $rowsAll = $resultAll->fetch_all(MYSQLI_ASSOC);
// $allProductCount = $resultAll->num_rows;


$sqlCategory = "SELECT * FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);

$categoryArr = [];
foreach ($cateRows as $cate) {
    $categoryArr[$cate["id"]] = $cate["name"]; // 重新整理新陣列
}

if (isset($_GET["category"])) {
    $cate_id = $_GET["category"];
    $sql = "SELECT products.*, category.name AS category_name, imgs.filename AS imgname  FROM products
    JOIN category ON products.category_id = category.id
    JOIN imgs ON products.id=imgs.product_id
    WHERE products.category_id=$cate_id 
    ORDER BY products.id ASC";
} else {
    $sql = "SELECT products.*, category.name AS category_name,imgs.filename AS imgname FROM products
    JOIN category ON products.category_id = category.id
    JOIN imgs ON products.id=imgs.product_id
    ORDER BY products.id ASC";
}

$result = $conn->query($sql);
$productCount = $result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);
$resultCount = $result->num_rows;
if (isset($_GET["page"])) {
    $productCount = $allProductCount;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>product list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->

    <?php include("css.php") ?>
</head>

<body>
    <div class="container">
        <h1>商品列表</h1>
        <div class="d-flex justify-content-between mt-3">
            <ul class="nav nav-tabs ">
                <?php foreach ($cateRows as $category) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($_GET["category"]) && $cate_id == $category["id"]) echo "active"; ?>" href="product-list.php?category=<?= $category["id"] ?>"><?= $category["name"] ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
            <a class="btn btn-primary" href="createProduct.php">新增商品<i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr class="text-nowrap text-center">
                    <th>編號</th>
                    <th>商品名稱</th>
                    <th>商品圖片</th>
                    <th>商品描述</th>
                    <th>分類</th>
                    <th>價格</th>
                    <th>上架時間</th>
                    <th>庫存量</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $prod) : ?>
                    <tr>
                        <td class="align-middle text-center"><?= $prod["id"] ?></td>
                        <td class="align-middle"><?= $prod["name"] ?></td>
                        <td class="box">
                            <img class="object-fit-cover img-fluid" src="/PHP-MYSQL/product_all/product_images/<?= $prod["imgname"] ?>" alt="">
                        </td>
                        <td class="fixed-width align-middle">
                            <p><?= $prod["description"] ?></p>
                        </td>
                        <td class="align-middle text-center"><?= $prod["category_id"] ?></td>
                        <td class="align-middle text-center"><?= $prod["price"] ?></td>
                        <td class="align-middle text-center"><?= $prod["on_shelves_time"] ?></td>
                        <td class="align-middle text-center"><?= $prod["stock"] ?></td>
                        <td class="align-middle text-center"><a class="btn btn-primary" href="product-edit.php?id=<?= $prod["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>