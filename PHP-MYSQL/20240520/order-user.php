<?php
require_once("../db-connect.php");

$sql="SELECT id, account FROM users ORDER BY name ASC";

$result = $conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

?>

<pre>
    <?php
    print_r($rows);
    ?>
</pre>