<?php
require_once("../db-connect.php");

$sql = "SELECT product.*, category.name AS category_name FROM product
JOIN category ON product.category_id = category.id
ORDER BY product.id ASC";

$result = $conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

?>

<pre>
    <?php
    print_r($rows);
    ?>
</pre>
