<?php
require_once("../db-connect.php");

$now=date('Y-m-d H:i:s');

$sql = "INSERT INTO users (name, phone, email, created_at)
VALUES ('Sam', '0958932289', 'Sam@test.com', '$now');";
$sql .= "INSERT INTO users (name, phone, email, created_at)
VALUES ('Mike', '0909161717', 'Mike@test.com', '$now');";
$sql .= "INSERT INTO users (name, phone, email, created_at)
VALUES ('Jay', '0977522351', 'Jay@test.com', '$now')";

if ($conn->multi_query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " . $conn->error;
}

$conn->close();
// header("location: create-user.php");
