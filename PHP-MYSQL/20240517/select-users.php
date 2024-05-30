<?php
require_once("../db-connect.php");

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

$userCount = $result->num_rows; // 找出有幾個user
// echo $userCount;

if ($userCount > 0) {
    // while($row = $result->fetch_assoc()) { // fetch_assoc 讓結果用關聯式陣列來出來
    //     // print_r($row);
    //     echo $row["id"].". ".$row["name"]."'s email is ".$row["email"];
    //     echo "<br>";
    //   }

    $rows = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($rows);
?>
    <pre>
        <?php
        // print_r($rows);
        ?>
    </pre>
<?php

    foreach ($rows as $user) {
        echo $user["id"] .
            ". " . $user["name"] . "<br>";
    }
} else {
    echo "no users";
}
