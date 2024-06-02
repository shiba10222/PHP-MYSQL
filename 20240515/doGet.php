<?php

if(!isset($_GET["name"]) || !isset($_GET["password"])){
    echo "沒有帶入對應的變數";
    exit;
}

$name=$_GET["name"];
echo $name;
echo "<br>";
$password=$_GET["password"];
echo $password;