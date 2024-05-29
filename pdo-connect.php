<?php
$servername="localhost";
$username="admin";
$password="12345";
$dbname="my_test_db";

try{
    $db_host=new PDO(
        "mysql:host={$servername};dbname={$dbname};charset=utf8",
        $username, $password
    );
}catch(PDOException $e){
 echo $e->getMessage();
 exit;   
}
// echo "資料庫連線成功";
