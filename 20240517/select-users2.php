<?php
require_once("../db-connect.php");

$sql = "SELECT name, email, phone FROM users";

$result = $conn->query($sql);

$userCount = $result->num_rows; // 找出有幾個user
// echo $userCount;

if ($userCount > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($rows);


?>
    <pre>
    <?php
    print_r($rows);
    ?>
   </pre>
<?php
} else {
    echo "no users";
}
