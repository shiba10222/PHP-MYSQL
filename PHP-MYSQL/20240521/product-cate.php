<?php
require_once("../db-connect.php");
$sql = "SELECT * FROM product ";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
var_dump($rows);

$sqlCategory = "SELECT *FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);
$category = [];
foreach ($cateRows as $cate) {
    $category[$cate["id"]] = $cate["name"]; // 重新整理新陣列
}

for ($i = 0; $i < count($rows); $i++) {
    $rows[$i]["category_name"] = $category[$rows[$i]["category_id"]];
}
?>
<pre>
    <?php print_r($rows); ?>
</pre>