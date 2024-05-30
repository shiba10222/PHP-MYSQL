<?php
// $servername = "localhost";
// $username = "admin";
// $password = "12345";
// $dbname = "my_test_db";

// // create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 連線成功
// if ($conn->connect_error) {
//     die("連線失敗: " . $conn->connect_error);
// } else {
//     // echo "連線成功";
// }

require_once("../db-connect.php");
// exit;

$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30),
    email VARCHAR(30)
    )";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 建立完成";
} else {
    echo "建立資料表錯誤: " . $conn->error;
}

$conn->close();
