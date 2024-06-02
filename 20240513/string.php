<h2>'</h2>
<?php
$foo='This is string.';
$day="a day";
echo 'foo is $foo<br>';
echo 'The path is c:\newpath<br>';
echo 'I earn $10 '.$day;
?>
<h2>"</h2>
<?php
echo "foo is $foo<br>";// 雙引號裡的變數不會被當成字串 會直接被當成變數
echo "the path is c:\newpath<br>";// \n 換行
echo "the path is c:\\newpath<br>";// \ 跳脫字元
echo "I earn \$10 $day";

?>
<h2>+</h2>
<?php
$result = "1"+2;
echo $result;
?>
<h2>.</h2>
<?php
$a="Hello";
$a .=" world";// $a=$a + " world";
echo $a;