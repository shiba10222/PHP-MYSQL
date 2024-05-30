<?php
require_once("../db-connect.php");
$sql = "SELECT * FROM users WHERE name = 'Shiba'";// 可以找符合的資料出來
$result = $conn->query($sql);
$resultCount = $result->num_rows;
echo "共計 $resultCount 筆資料";
if ($resultCount > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    print_r($rows);
}

echo "<br>";
$sql="SELECT * FROM users WHERE id=1";
$result = $conn->query($sql);
$row=$result->fetch_all();
var_dump($row);