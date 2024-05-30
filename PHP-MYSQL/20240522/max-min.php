<?php
require_once("../db-connect.php");

$sqlMax="SELECT *
FROM product
WHERE price=(SELECT MAX(price) FROM product)";

$resultMax=$conn->query($sqlMax);
$rowsMax=$resultMax->fetch_all(MYSQLI_ASSOC);
?>
<pre>
    <?php print_r($rowsMax)?>
</pre>
<?php
$sqlMin="SELECT *
FROM product
WHERE price=(SELECT MIN(price) FROM product)";

$resultMin=$conn->query($sqlMin);
$rowsMin=$resultMin->fetch_all(MYSQLI_ASSOC);
?>
<pre>
    <?php print_r($rowsMin)?>
</pre>