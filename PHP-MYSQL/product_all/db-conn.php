<?php
$servername="localhost";
$username="admin";
$password="12345";
$dbname="db-test";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

