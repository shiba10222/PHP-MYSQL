<h2>is_array</h2>
<?php
$arr=["John", 28, "sales"];
var_dump(is_array($arr));
?>
<h2>list</h2>
<?php
list($name, $age, $job)=$arr;
echo "$name is $age years old, and he is a $job.";
?>
<h2>range</h2>
<?php
$r=range(2, 10, 2);
var_dump($r);// array(5) { [0]=> int(2) [1]=> int(4) [2]=> int(6) [3]=> int(8) [4]=> int(10) }