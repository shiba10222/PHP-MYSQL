<?php
require_once("../db-connect.php");

$sql="SELECT * FROM users WHERE valid=1";
$result=$conn->query($sql);
// $rows=$result->fetch_all(MYSQLI_ASSOC);
$rows=$result->fetch_all(MYSQLI_ASSOC);


echo json_encode($rows);
?>
