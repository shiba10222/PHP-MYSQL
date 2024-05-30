<?php
require_once("../db-connect.php");

$sql = "INSERT INTO users (name, phone, email)
VALUES ('Mike', '0900000000', 'mike@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "新資料輸入成功";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
