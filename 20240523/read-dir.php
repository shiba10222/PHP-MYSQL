<?php
$path = __DIR__; //魔術常數
// echo $path;
$handle = opendir($path);

while ($file = readdir($handle)) {
    echo $file . "<br>";
}
closedir($handle);
