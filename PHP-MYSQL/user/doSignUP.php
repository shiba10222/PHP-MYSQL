<?php
require_once("../db-connect.php");

if(!isset($_POST["account"])){
    die("請循正常管道進入此頁");
}


$account=$_POST["account"];
$name=$_POST["name"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

$sqlCheckUser="SELECT * FROM users WHERE account = '$account'";
$resultCheck=$conn->query($sqlCheckUser);
if($resultCheck->num_rows>0){
    echo "此帳號已有人註冊過";
    exit;
}

if(empty($account)){
    echo "請輸入帳號";
    exit;
}
$accountLength=strlen($account);

if($accountLength<4 || $accountLength>20){
    echo "請輸入4~20字元的帳號";
    exit;
}

if(empty($name)){
    echo "請輸入姓名";
    exit;
}
if(empty($password)){
    echo "請輸入密碼";
    exit;
}
if($password!=$repassword){
    echo "前後密碼不一致";
    exit;
}
$password=md5($password);

$now=date('Y-m-d H:i:s');
$sql="INSERT INTO users (name, account, password, created_at, valid) VALUES ('$name', '$account', '$password', '$now', 1)";
// echo $sql;

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " .$sql."<br>". $conn->error;
}

$conn->close();
header("location: sign-up.php");

