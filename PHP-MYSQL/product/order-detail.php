<?php
require_once("../db-connect.php");

if(isset($_GET["id"])){
    header("location:order-list.php");
}
$id = $_GET["id"];

$sql = "SELECT user_order. * , users.name AS user_name, product.price,  product.name AS product_name FROM user_order
JOIN users ON user_order.user_id = users.id
JOIN product ON user_order.product_id = product.id
WHERE user_order.id=$id";
$result = $conn->query($sql);
$rows = $result->fetch_assoc(); // 因為只要抓id的資料 所以不用fetch_all
// var_dump($rows);


?>
<!doctype html>
<html lang="en">

<head>
    <title>訂單編號 <?= $id ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <?php include("../css.php"); ?>

</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center">
            <a href="order-list.php" class="btn btn-primary me-2 mb-2"><i class="fa-solid fa-arrow-left"></i></a>
            <h2>訂單編號<?= $id ?></h2>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>產品</th>
                <td><?= $rows["product_name"] ?></td>
            </tr>
            <tr>
                <th>單價</th>
                <td><?= number_format($rows["price"]) ?></td>
            </tr>
            <tr>
                <th>數量</th>
                <td><?= $rows["amount"] ?></td>
            </tr>
            <tr>
                <th>總價</th>
                <td>
                    <?php $total = $rows["price"] * $rows["amount"];
                    echo number_format($total);?>
                </td>
            </tr>
            <tr>
                <th>購買者</th>
                <td><?= $rows["user_name"] ?></td>
            </tr>

        </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>