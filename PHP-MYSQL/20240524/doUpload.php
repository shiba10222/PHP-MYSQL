<?php
require_once("../db-connect.php");

if (!isset($_POST["name"])) {
    echo "請循正常管道進入此頁";
    exit;
}

$name = $_POST["name"];
// echo $name;
// var_dump($_FILES["file"]);
//$_FILES 用來接受上傳的檔案

if ($_FILES["file"]["error"] == 0) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"])) {
        echo "upload success";
    } else {
        echo "upload failed";
    }
}


$pic_name = $_FILES["file"]["name"];

$sql = "INSERT INTO images (name, pic_name)
VALUES ('$name', '$pic_name')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "新資料輸入成功, id 為 $last_id";
} else {
    echo "error: " .$sql . "<br>"  . $conn->error;
}

$conn->close();
header("location: file-upload.php");
