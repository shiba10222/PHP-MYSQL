<?php

require_once("../db-connect.php");

if (!isset($_GET["id"])) {
    echo "請循正常管道進入此頁";
    exit;
}

$id = $_GET["id"];

$sql = "UPDATE users SET valid = 0 WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "刪除資料錯誤: " . $conn->error;
}

header("location: user.php");// 刪完資料之後回到user.php

