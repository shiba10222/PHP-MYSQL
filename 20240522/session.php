<?php
session_start();
$_SESSION["name"]="Jack";

$_SESSION["user"]=[
    "name"=>"Jack",
    "email"=>"jack@test",
    "phone"=>"0911122346"
];

var_dump($_SESSION["user"]);
