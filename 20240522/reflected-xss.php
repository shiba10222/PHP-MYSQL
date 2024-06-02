<?php
if (!isset($_GET["name"])) {
    echo "請輸入 name 變數";
    exit;
}

$name = $_GET["name"];
?>
Hello, <?= $name ?>