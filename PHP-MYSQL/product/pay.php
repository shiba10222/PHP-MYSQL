<?php
require_once("../db-connect.php");
session_start();

if(!isset($_SESSION["cart"])){
    header("location: product-list.php");
    exit;
}

$now = date("Y-m-d H:i:s");
$sql = "INSERT INTO user_order_product (user_id, order_time)
VALUES ('1', '$now')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    // echo $last_id;
    foreach ($_SESSION["cart"] as $product) {
        $product_id = key($product);
        $amount = current($product);
        $sqlDetail = "INSERT INTO user_order_product_detail
        (order_id, product_id, amount) VALUES ('$last_id', '$product_id', '$amount')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>結帳</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("../css.php") ?>
</head>

<body>
    <div class="container">
        <?php unset($_SESSION["cart"])?>
        <h1>感謝您的購買</h1>
        <a class="btn btn-primary" href="product-list.php">回商品列表</a>
    </div>
    <?php include("../js.php") ?>
</body>

</html>