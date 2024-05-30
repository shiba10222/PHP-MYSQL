<h2></h2>
<?php
$string="Hello World";
echo strlen($string);// 11 找字元
?>
<h2>str_word_count</h2>
<?php
echo str_word_count($string);// 2
?>
<h2>substr</h2>
<?php
echo substr($string, 1);// ello World
echo "<br>";
echo substr($string, -3);// rld
echo "<br>";
echo substr($string, 2, 6);// llo Wo
?>
<h2>strstr</h2>
<?php
$email="john@test.com";
echo strstr($email, "@");// @test.com
echo "<br>";
echo strstr($email, "@", true);// john
?>
<h2>strpos</h2>
<?php
echo strpos($string, "World");
echo "<br>";

if(strpos($string, "World")==false){
echo "string not found";// 找字元 不符合就顯示"string not found"
}
?>
<h2>explode</h2>
<?php
$strArr=explode(" ", $string);// 把字串變陣列
var_dump($strArr);
echo "<br>";
$strChaArr=explode(" ", $string);
var_dump($strChaArr);
?>
<h2>str_replace</h2>
<?php 
echo str_replace("World", "Kitty", $string);// Hello Kitty

