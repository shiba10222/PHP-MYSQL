<?php
require_once("../db-connect.php");

$sql = "UPDATE users SET valid = 0 WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "刪除資料錯誤: " . $conn->error;
}

$conn->close();
