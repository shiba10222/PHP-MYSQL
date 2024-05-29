<?php
require_once("../pdo-connect.php");

$stmt = $db_host->prepare("SELECT * FROM users");

try {
    $stmt->execute();
    // while ($row = $stmt->fetch()) {
    // 	echo "接收到的資料：<pre>";
    // 	print_r($row);
    // 	echo "</pre>";
    // }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}
