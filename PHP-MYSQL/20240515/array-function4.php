<?php
$fruit=["apple", "banana", "melon", "peach", "holonggo"];
?>
<hr>
<h2>array shift</h2>
<?php
$var=array_shift($fruit);// 將第一個單位移出 其他單位往前一格 被移出的值會被存進$var裡
print_r($fruit);
?>
<h2>array unshift</h2>
<?php
array_unshift($fruit, "apple");
print_r($fruit);
?>
<h2>pop</h2>
<?php
array_pop($fruit);// 刪最後一個
print_r($fruit);
?>
<h2>push</h2>
<?php
array_push($fruit, "pinapple");// 加值進最後
print_r($fruit);
?>
<h2>slice</h2>
<?php
$newf=array_slice($fruit, 0, 3);// 取出一段值
print_r($newf);
?>
<h2>splice</h2>
<?php
array_splice($fruit, 2, 1);//移除一段值 可用新元素取代它
print_r($fruit);
echo "<br>";
array_splice($fruit, 2, 0, "orange");
print_r($fruit);
?>

<h2>array random</h2>
<?php
$randomarr=array_rand($fruit, 3);
print_r($randomarr);
echo "<br>";
for($i=0; $i<count($randomarr); $i++){
    echo $fruit[$randomarr[$i]]."<br>";
    
}
?>
echo "<br>"
<h2>flip</h2>
<?php
$cars=["Tesla", "BMW", "Benz"];
print_r($cars);// [0] => Tesla [1] => BMW [2] => Benz 

echo "<br>";

$flipcars=array_flip($cars);// 值和名字交換
print_r($flipcars);// [Tesla] => 0 [BMW] => 1 [Benz] => 2 
?>
