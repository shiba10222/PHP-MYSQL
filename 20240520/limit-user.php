<?php
require_once("../db-connect.php");

$sql="SELECT *FROM users LIMIT 5, 5";// 從第5筆資料開始抓5筆

$result=$conn->query($sql);

$userCount=$result->num_rows;

$rows=$result->fetch_all(MYSQLI_ASSOC);

?>

<pre>
    <?php
    echo print_r($rows);
    ?>
</pre>