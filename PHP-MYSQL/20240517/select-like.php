<?php
require_once("../db-connect.php");

$sql = "SELECT * FROM users WHERE account LIKE '%shi%'";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<pre>
    <?php
    var_dump($rows);
    ?>
</pre>