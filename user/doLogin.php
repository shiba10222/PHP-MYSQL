<?php
require_once("../db-connect.php");
session_start();

if (!isset($_POST["account"])) {
    echo "請循正常管道進入此頁";
    exit;
}

$account = $_POST["account"];
$password = $_POST["password"];

if (empty($account)) {
    $errorMsg = "請輸入帳號";
    $_SESSION["errorMsg"] = $errorMsg;
    header("location:signin.php");
    exit;
}
if (empty($password)) {
    $errorMsg = "請輸入密碼";
    $_SESSION["errorMsg"] = $errorMsg;
    header("location:signin.php");
    exit;
}

// echo "$account, $password";

$password = md5($password);

$sql = "SELECT * FROM users 
WHERE account ='$account' AND password = '$password' AND valid = 1";

$result = $conn->query($sql);
$userCount = $result->num_rows;

if ($userCount == 0) {
    $errorMsg = "帳號或密碼錯誤";
    if (!isset($_SESSION["errorTimes"])) {
        $_SESSION["errorTimes"] = 1;
    } else {
        $_SESSION["errorTimes"]++;
    }

    $_SESSION["errorMsg"] = $errorMsg;
    header("location:signin.php");
    exit;
}
// 登入成功
$row = $result->fetch_assoc();
// var_dump($row);
unset($_SESSION["errorMsg"]);
unset($_SESSION["errorTimes"]);

$_SESSION["user"] = [
    "account" => $row["account"],
    "name" => $row["name"],
    "email" => $row["email"],
    "phone" => $row["phone"]
];

header("location:dashboard.php");
