<?php 
require_once("../db-connect.php");

$sqlCategory = "SELECT *FROM category ORDER BY id ASC";
$resultCate = $conn->query($sqlCategory);
$cateRows = $resultCate->fetch_all(MYSQLI_ASSOC);

?>
<pre>
    <?php 
    print_r($cateRows);
    ?>
</pre>

<?php
$category=[];
foreach($cateRows as $cate){
    $category[$cate["id"]=$cate["name"]];// 重新整理新陣列
}
?>

<pre>
    <?php print_r($category);?>
</pre>