<?php
require_once("../db-connect.php");
session_start();


if (!isset($_GET["id"])) {
    header("location:product-list.php");
}
$sqlCategory = "SELECT *FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);

$id = $_GET["id"];
$sql = "SELECT product.*, category.name AS category_name FROM product
JOIN category ON product.category_id = category.id
WHERE product.id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sqlLikeUser = "SELECT user_like.*, users.name FROM user_like
JOIN users ON user_like.user_id = users.id
WHERE user_like.product_id=$id";

$resultLiked = $conn->query($sqlLikeUser);
$rowsLiked = $resultLiked->fetch_all(MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <title><?= $row["name"] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <?php include("../css.php"); ?>

</head>

<body>
    <div class="container">
        <?php include("nav.php");?>
        <div class="row g-3">
            <div class="col-lg-6 col-sm-4">
                <img class="img-fluid" src="/images/<?= $row["img"] ?>" alt="<?= $row["name"] ?>">
            </div>
            <div class="col-lg-6">
                <div class="pt-2 text-primary">
                    <a href="product-list.php?category=<?= $row["category_id"] ?>" class="text-decoration-none"><?= $row["category_name"] ?></a>
                </div>
                <h1><?= $row["name"] ?></h1>
                <div class="text-danger fs-2 text-end">
                    $<?= number_format($row["price"]) ?>
                </div>
                
                <h3>收藏者</h3>
                <ul>
                    <?php foreach ($rowsLiked as $user) : ?>
                        <li><?= $user["name"] ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>