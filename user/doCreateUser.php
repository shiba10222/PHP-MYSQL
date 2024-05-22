<?php
require_once("../db-connect.php");

if (!isset($_POST["name"])) {
    echo "請循正常管道進入此頁";
    exit;
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

if (empty($name) || empty($email) || empty($phone)) {
    echo "請填入必要欄位";
    exit;
}

// echo "$name, $email, $phone";
$now=date('Y-m-d H:i:s');

$sql = "INSERT INTO users (name, phone, email, created_at)
VALUES ('$name', '$phone', '$email', '$now')";
// echo $sql;

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
header("location: create-user.php");
