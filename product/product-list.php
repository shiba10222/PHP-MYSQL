<?php
require_once("../db-connect.php");

$user_id = 8;
$sqlUserLikes = "SELECT * FROM user_like WHERE user_id = $user_id";
$resultUserLikes = $conn->query($sqlUserLikes);
$rowUserLikes = $resultUserLikes->fetch_all(MYSQLI_ASSOC);
$likeArr = [];
foreach ($rowUserLikes as $like) {
    $likeArr[] = $like["product_id"];
}
// var_dump($likeArr);


$sqlCategory = "SELECT * FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);
// var_dump ($cateRows);
$categoryArr = [];
foreach ($cateRows as $cate) {
    $categoryArr[$cate["id"]] = $cate["name"]; // 重新整理新陣列
    
}
$pageTitle = "產品列表";

if (isset($_GET["max"]) && isset($_GET["min"])) {
    $min = $_GET["min"];
    $max = $_GET["max"];
    $sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category_id = category.id
    WHERE price >= $min AND price <= $max 
    ORDER BY product.id ASC";
} else if (isset($_GET["category"])) {
    $cate_id = $_GET["category"];
    $sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category_id = category.id
    WHERE product.category_id=$cate_id 
    ORDER BY product.id ASC";
    $pageTitle = $categoryArr[$cate_id] . "產品列表";
} else {
    $sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category_id = category.id
    ORDER BY product.id ASC";
}


$result = $conn->query($sql);

$productCount = $result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);
$resultCount = $result->num_rows;

?>

<!doctype html>
<html lang="en">

<head>
    <title><?= $pageTitle ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("../css.php"); ?>
</head>

<body>
    <div class="container">
        <?php include("nav.php"); ?>
        <h1><?= $pageTitle ?></h1>
        <div class="py-2">
            <form action="">
                <div class="row g-3 align-items-center">
                    <?php if (isset($_GET["min"])) : ?>
                        <div class="col-auto">
                            <a class="btn btn-primary" href="product-list.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                        </div>
                    <?php endif ?>
                    <?php
                    $minValue = 0;
                    $maxValue = 9999;
                    if (isset($_GET["min"])) $minValue = $_GET["min"];
                    if (isset($_GET["max"])) $maxValue = $_GET["max"];

                    ?>
                    <div class="col-auto">
                        價格篩選
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control text-end" value=<?= $minValue ?> name="min" min="0">
                    </div>
                    <div class="col-auto">
                        ~
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control text-end" value=<?= $maxValue ?> name="max" min="0">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-filter"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="py-2">
            共<?= $resultCount ?>筆
        </div>
        <div class="row g-3">
            <?php foreach ($rows as $product) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ratio ratio-1x1 position-relative">
                        <img class="object-fit-cover" src="/images/<?= $product["img"] ?>" alt="<?= $product["name"] ?>">
                        <div>
                            <span class="position-absolute favorite-icon
                            <?php if (in_array($product["id"],  $likeArr)) {
                                echo "active";
                            }
                            ?>"><i class="fa-solid fa-heart"></i></span>
                        </div>
                    </div>
                    <div class="pt-2 text-primary">
                        <a href="?category=<?= $product["category_id"] ?>" class="text-decoration-none"><?= $product["category_name"] ?></a>
                    </div>
                    <h3>
                        <a class="text-decoration-none" href="product.php?id=<?= $product["id"] ?>"><?= $product["name"] ?></a>
                    </h3>
                    <div class="text-end fs-4 text-danger">$<?= number_format($product["price"]) ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>