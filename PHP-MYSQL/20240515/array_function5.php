<h2>array diff</h2>
<?php
$a=["a", "b", "c", "d"];
$b=["a", "b", "z", "r"];
print_r(array_diff($b, $a));
echo "<br>";
print_r(array_diff($a, $b));
?>
<h2>array diff assoc</h2>
<?php
print_r(array_diff_assoc($a, $b));
?>
<h2>interset</h2>
<?php
print_r(array_intersect($a, $b));
?>
<h2>interset assoc</h2>
<?php
print_r(array_intersect_assoc($a, $b));
?>


