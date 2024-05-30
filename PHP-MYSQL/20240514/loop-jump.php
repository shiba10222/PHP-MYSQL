<h2>break</h2>
<?php  
for($i=0; $i<10; $i++){
    if($i==5)break;
    echo "$i<br>";
}
?>
<h2>continue</h2>
<?php
for($i=0; $i<10; $i++){
    if($i%3==0)continue;// 回到迴圈最上方
    echo "$i<br>";
}
?>
<h2>goto</h2>
<?php
for($i=0; $i<10; $i++){
    echo "$i<br>";
    if($i==3)goto end;// 直接跳過去
}
echo "show me the money";

end: {
    echo "ending";
}