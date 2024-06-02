<?php
require_once("../db-connect.php");
$pageTitle = "訂單列表";

if (isset($_GET["date"])) {
    $date = $_GET["date"];
    // $sql = "SELECT user_order. * , users.name AS user_name, product.price, product.name AS product_name FROM user_order
    // JOIN users ON user_order.user_id = users.id
    // JOIN product ON user_order.product_id = product.id
    // WHERE user_order.order_date = '$date'
    // ORDER BY user_order.order_date DESC";
    $whereClause = "WHERE user_order.order_date='$date'";
    $pageTitle = $date . $pageTitle;
} else if (isset($_GET["product"])) {
    $product_id = $_GET["product"];

    $sqlProduct = "SELECT name FROM product WHERE id = '$product_id'";
    $resultProduct = $conn->query($sqlProduct);
    $rowProduct = $resultProduct->fetch_assoc();
    // $sql = "SELECT user_order. * , users.name AS user_name, product.price, product.name AS product_name FROM user_order
    // JOIN users ON user_order.user_id = users.id
    // JOIN product ON user_order.product_id = product.id
    // WHERE user_order.order_date = '$product_id'
    // ORDER BY user_order.order_date DESC";
    $whereClause = "WHERE user_order.product_id='$product_id'";
    $pageTitle = $rowProduct["name"] . $pageTitle;
} else if (isset($_GET["user"])) {
    $user_id = $_GET["user"];
    $sqlUser = "SELECT name FROM users WHERE id = '$user_id'";
    $resultUser = $conn->query($sqlUser);
    $rowUser = $resultUser->fetch_assoc();
    $whereClause = "WHERE user_order.user_id='$user_id'";
} else if (isset($_GET["start"]) || isset($_GET["end"])) {
    $start = $_GET["start"];
    $end = $_GET["end"];
    
    $whereClause = "WHERE user_order.order_date BETWEEN '$start' AND '$end'";
    $pageTitle = "$start ~ $end $pageTitle";
} else {
    // $sql = "SELECT user_order. * , users.name AS user_name, product.price, product.name AS product_name FROM user_order
    // JOIN users ON user_order.user_id = users.id
    // JOIN product ON user_order.product_id = product.id
    // ORDER BY user_order.order_date DESC";
    $whereClause = "";
}
$sql = "SELECT user_order. * , users.name AS user_name, product.price,  product.name AS product_name FROM user_order
    JOIN users ON user_order.user_id = users.id
    JOIN product ON user_order.product_id = product.id
    $whereClause
    ORDER BY user_order.order_date DESC";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
// var_dump($rows);
?>
<!doctype html>
<html lang="en">

<head>
    <title><?= $pageTitle ?></title>
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
            <?php if (isset($_GET["date"]) || (isset($_GET["product"])) || (isset($_GET["user"]))) : ?>
                <a href="order-list.php" class="btn btn-primary me-2 mb-2"><i class="fa-solid fa-arrow-left"></i></a>
            <?php endif; ?>
            <h1><?= $pageTitle ?></h1>
        </div>
        <div class="py-2">
            <form action="">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        時間篩選
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="start">
                    </div>
                    <div class="col-auto">
                        ~
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="end">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="text-nowrap">
                    <th>訂單編號</th>
                    <th>日期</th>
                    <th>產品</th>
                    <th>單價</th>
                    <th>數量</th>
                    <th>總價</th>
                    <th>訂購者</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $order) : ?>
                    <tr>
                        <td class="text-end">
                            <a href="order-detail.php?id=<?= $order["id"] ?>"><?= $order["id"] ?></a>
                        </td>
                        <td><a href="?date=<?= $order["order_date"] ?>"><?= $order["order_date"] ?></a></td>
                        <td>
                            <a href="?product=<?= $order["product_id"] ?>"><?= $order["product_name"] ?></a>
                        </td>
                        <td class="text-end"><?= number_format($order["price"]) ?></td>
                        <td class="text-end"><?= $order["amount"] ?></td>
                        <td class="text-end"><?php $total = $order["price"] * $order["amount"];
                                                echo number_format($total);
                                                ?></td>
                        <td>
                            <a href="?user=<?= $order["user_id"] ?>"><?= $order["user_name"] ?></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>