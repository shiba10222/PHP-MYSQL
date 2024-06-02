<?php
require_once("db-conn.php");

$name = $_POST["name"];
$description = $_POST["description"];
$category = $_POST["category"];
$brand=$_POST["brand"];
$price = "NT$" . $_POST["price"];
$stock = $_POST["stock"];
$now = date('Y-m-d H:i:s');
$flavors = isset($_POST['flavors']) ? $_POST['flavors'] : [];

$sqlProduct="INSERT INTO products (ProductName, description, category_id, brand_id, price, on_shelves_time, stock)
VALUES ('$name', '$description', '$category', '$brand', '$price', '$now', '$stock' )";


if ($conn->query($sqlProduct) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}

$sqlInsertTags = "INSERT INTO producttags (ProductID, TagID) VALUES (?, ?)";
    $stmtInsertTags = $conn->prepare($sqlInsertTags);
    foreach ($flavors as $flavorID) {
        $stmtInsertTags->bind_param("ii", $last_id, $flavorID);
        $stmtInsertTags->execute();
    }






