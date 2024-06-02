<?php
require_once("../db-connect.php");

$sql="SELECT * FROM product WHERE price > 400";

$result=$conn->query($sql);
$productCount=$result->num_rows;
$rows=$result->fetch_all(MYSQLI_ASSOC);


