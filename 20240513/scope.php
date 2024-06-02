<?php

$a=99; // 全域變數
echo "global var $a<br>";

function show(){
    $b=10;// 區域變數
    static $c=10;// 靜態變數 
    // echo "global var $a<br>";
    $a=$GLOBALS["a"];
    echo "global var $a<br>";
    echo "local var $b<br>";
    echo "static var $c<br>";
    $b++;
    $c++;
    echo "--<br>";
}

show();
show();
show();