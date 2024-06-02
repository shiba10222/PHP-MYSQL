<?php
require_once("../db-connect.php");

if (!isset($_POST["account"])) {
    // die("請循正常管道進入此頁");
    $data = [
        "status" => 0,
        "message" => "請循正常管道進入此頁"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}

$account = $_POST["account"];
$name = $_POST["name"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

if (empty($account)) {
    // echo "請輸入帳號";
    $data = [
        "status" => 0,
        "message" => "請輸入帳號"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}

$accountLength = strlen($account);

if ($accountLength < 4 || $accountLength > 20) {
    // echo "請輸入4~20字元的帳號";
    $data = [
        "status" => 0,
        "message" => "請輸入4~20字元的帳號"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}

if (empty($name)) {
    // echo "請輸入姓名";
    $data = [
        "status" => 0,
        "message" => "請輸入姓名"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}
if (empty($password)) {
    // echo "請輸入密碼";
    $data = [
        "status" => 0,
        "message" => "請輸入密碼"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}
if ($password != $repassword) {
    // echo "前後密碼不一致";
    $data = [
        "status" => 0,
        "message" => "前後密碼不一致"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}

$sqlCheckUser = "SELECT * FROM users WHERE account = '$account'"; // 檢查此帳號是否有人註冊過
$resultCheck = $conn->query($sqlCheckUser);

if ($resultCheck->num_rows > 0) {
    // echo "此帳號已有人註冊過";
    $data = [
        "status" => 0,
        "message" => "此帳號已有人註冊過"
    ];
    echo json_encode($data); // 轉json格式
    exit;
}
$password = md5($password);

$now = date('Y-m-d H:i:s');
$sql = "INSERT INTO users (name, account, password, created_at, valid) VALUES ('$name', '$account', '$password', '$now', 1)";
// echo $sql;

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    // echo "新資料輸入成功, id 為 $last_id";
    $data = [
        "status" => 1,
        "message" => "新資料輸入成功, id 為 $last_id"
    ];
    echo json_encode($data); // 轉json格式
    exit;
} else {
    // echo "error: " . $sql . "<br>" . $conn->error;
    $data = [
        "status" => 0,
        "message" => "error: " . $sql . "<br>" . $conn->error
    ];
    echo json_encode($data); // 轉json格式
    exit;
}

$conn->close();
header("location: sign-up-ajax.php");
