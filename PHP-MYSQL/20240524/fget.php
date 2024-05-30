<?php
$handle=fopen("output.txt", 'r');
while($line=fgets($handle)){
    echo $line."<br>";
}

rewind($handle);
echo fgetc($handle)."<br>";


while($cha=fgetc($handle)){
    echo $cha."<br>";
}

fclose($handle);