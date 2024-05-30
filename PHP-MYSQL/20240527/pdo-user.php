<?php
require_once("../pdo-connect.php");

$id = 1;
$stmt = $db_host->prepare("SELECT * FROM users WHERE id=:id");

try {
    $stmt->execute(
        [
            ":id" => $id
        ]
    );
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "接收到的資料: <pre>";
        print_r($row);
        echo "</pre>";
    }
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}
