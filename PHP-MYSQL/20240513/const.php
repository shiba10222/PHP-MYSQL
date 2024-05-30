<?php
define("NAME", "Jack");
echo NAME;
echo "<br>";
const USER="Peter";
echo USER;
?>
<h2>PHP_VERSION</h2>
<?php
echo PHP_VERSION;
?>
<h2>PHP_OS</h2>
<?php 
echo PHP_OS;
?>
<h2>PHP_EOL</h2>
<?php
$line1="Hello";
$line2="line 2";
$line3="line 3";
echo $line1.PHP_EOL.$line2.PHP_EOL.$line3;
?>
<h2>nl2br</h2>
<textarea name="" id="" rows="10">


</textarea>
<?php
$content="Hello
line2
line3";
echo nl2br($content);
?>
<h2>__LINE__</h2>
<?php 
echo __LINE__;
?>
<h2>__FUNCTION__</h2>
<?php
function call(){
    echo __FUNCTION__;
}
call();
?>
