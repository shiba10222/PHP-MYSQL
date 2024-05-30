<?php
require_once("../db-connect.php");

$sql="UPDATE users SET phone='0911111111' WHERE id=3";

if($conn->query($sql)===TRUE){
    echo "更新成功";
}else{
    echo "更新資料錯誤: ".$conn->error;
}

$conn->close();