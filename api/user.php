<?php
require_once("../db-connect.php");
if (!isset($_POST["id"])) {
    // echo "沒有帶入正確參數";
    $data = [
        "status"=>0,
        "message" => "沒有帶入正確參數"
    ];
    echo json_encode($data);
    exit;
}
$id = $_POST["id"];
$sql = "SELECT * FROM users WHERE id='$id' AND valid=1";
$result = $conn->query($sql);
$userCount = $result->num_rows;
if ($userCount == 0) {
    $data = [
        "status"=>0,
        "message" => "使用者不存在"
    ];
    echo json_encode($data);
} else {
    $row = $result->fetch_assoc();
    $data = [
        "status"=>1,
        "user"=>$row
    ];
    echo json_encode($data);
}
