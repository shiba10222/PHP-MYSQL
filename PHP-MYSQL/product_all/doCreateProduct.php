<?php
require_once("db-conn.php");

$name = $_POST["name"];
$description = $_POST["description"];
$category = $_POST["category"];

$price = "NT$" . $_POST["price"];
$stock = $_POST["stock"];
$now = date('Y-m-d H:i:s');

$sqlProduct="INSERT INTO products (name, description, category_id, price, on_shelves_time, stock)
VALUES ('$name', '$description', '$category', '$price', '$now', '$stock' )";


if ($conn->query($sqlProduct) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}
// --------------------------------------------------------

$product_id = $conn->insert_id;

$attribute_id = 0;
if (isset($_POST["brand"])) {
    $brandattr = 1;
}

if (isset($_POST["flavor"])) {
    $flavorattr = 2;
}

$brand = $_POST["brand"];
$flavor = $_POST["flavor"];

$sqlBrand = "INSERT INTO prod_attr_value (product_id, attribute_id, attribute_value_id)
VALUES ('$product_id', '$brandattr', '$brand')";

$sqlFlavor = "INSERT INTO prod_attr_value (product_id, attribute_id, attribute_value_id)
VALUES ('$product_id', '$flavorattr', '$flavor')";

if ($conn->query($sqlFlavor) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;4;
}

if ($conn->query($sqlBrand) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}

//-------------------------------------------------------------------------------------


$targetDir = "product_images/";//指定上傳檔案的目錄
$fileName=$_FILES["file"]["name"];//取得原始檔名稱

if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir.$fileName)){
    echo "檔案已成功上傳。";
} else{
    echo "上傳檔案時發生錯誤。";
}

$sql = "INSERT INTO imgs (filename, product_id)
VALUES ('$fileName', '$product_id')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
header("location:product-list.php");
