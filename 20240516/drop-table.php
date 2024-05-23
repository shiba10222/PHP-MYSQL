<?php
require_once("../db-connect.php");

$sql="DROP TABLE users";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 刪除完成";
} else {
    echo "刪除資料表錯誤: " . $conn->error;
}

$conn->close();