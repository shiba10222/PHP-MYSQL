<?php

if(empty($_POST["name"])){
    echo "請循正常管道進入此頁";
    exit;
}

$name=$_POST["name"];
if(empty($name)){
    echo "請輸入姓名";
    exit;
}

$password=$_POST["password"];
if(empty($password)){
    echo "請輸入密碼";
    exit;
}

$email=$_POST["email"];
if(empty($email)){
    echo "請輸入email";
    exit;
}

$phones=array_filter($_POST["phones"]);
$gender=$_POST["gender"];
$telecom=$_POST["telecom"];
$phoneList=implode(",", $phones);// 09xxxxxxxx
echo "$telecom $name 's email is $email, phone are $phoneList, gender is $gender";
