<?php 

function divide($a, $b){
    if($b==0){
        die("divided 0 error");

    }else{
        $c=$a/$b;
        echo " a / b = $c <br>";
    }
}
divide(10, 5);
divide(10, 0);