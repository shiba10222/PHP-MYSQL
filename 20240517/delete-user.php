<?php
require_once("../db-connect.php");

$sql="DELETE FROM users WHERE id = 11";

if ($conn->query($sql) === TRUE) {
    	echo "刪除成功";
} else {
    	echo "刪除資料錯誤: " . $conn->error;
}
