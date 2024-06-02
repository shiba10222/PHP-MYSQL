<?php

require_once("db-conn.php");

$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];
$category = $_POST["category"];
$brand = $_POST["brand"];
$flavor = $_POST["flavor"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sqlProduct = "UPDATE products SET name='$name', description='$description', category_id='$category', price='$price', stock='$stock' WHERE id=$id";

$conn->query($sqlProduct);
// -----------------------------------------------------

if ($_FILES['file']) {
    $uploadDir = 'product_images/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "File is valid, and was successfully uploaded.\n";

        
       

        $conn->close();
    } else {
        echo "Failed to upload file.\n";
    }
} else {
    echo "No file uploaded.\n";
}
?>