<?php
require_once("../db-connect.php");
session_start();
$sqlCategory = "SELECT *FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);
$categoryArr = [];
foreach ($cateRows as $cate) {
    $categoryArr[$cate["id"]] = $cate["name"]; // 重新整理新陣列
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>購物車</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("../css.php") ?>
</head>

<body>
    <div class="container">
        <?php include("nav.php") ?>
        <h1>購物車</h1>
        <?php if (isset($_SESSION["cart"])) : ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>產品名稱</th>
                        <th>單價</th>
                        <th>數量</th>
                        <th>小計</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total=0; ?>
                    <?php foreach ($_SESSION["cart"] as $product) : ?>
                        <tr>
                            <td class="text-end">
                                <?php
                                $product_id = key($product);
                                $sql = "SELECT * FROM product WHERE id='$product_id'";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                echo $row["name"];
                                // echo $product_id
                                ?>
                            </td>
                            <td class="text-end">
                                <?php
                                $price = $row["price"];
                                echo $price;
                                ?>
                            </td>
                            <td class="text-end">
                                <?php
                                $amount = current($product);
                                echo $amount; ?>
                            </td>
                            <td class="text-end">
                                <?php
                                $subTotal = $price * $amount;
                                echo $subTotal;
                                $total+=$subTotal;
                                ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="text-end">
                總計:<?=$total?>
            </div>
            <div class="py-2 text-end">
                <a href="pay.php" class="btn btn-primary">前往結帳</a>
            </div>
        <?php else : ?>
            購物車為空
        <?php endif ?>
    </div>
    <?php include("../js.php") ?>

</body>

</html>