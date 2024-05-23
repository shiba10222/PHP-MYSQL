<h2>array sum</h2>
<?php
$arr=[1, 2, 3, 4, 5];
print_r(array_sum($arr));
?>
<h2>array unique</h2>
<?php
$fruit=["apple", "orange", "banana", "apple", "melon"];
$u_fruit=array_unique($fruit);// 把重複的拿掉
print_r($u_fruit);
?>
<h2>array change key case</h2>
<?php
$user=[
    "Joe"=>1,
    "Jack"=>2,
    "Jason"=>3
];
print_r(array_change_key_case($user, CASE_UPPER));
?>
<h2>array pad</h2>
<?php
$input=[1, 2, 5];
print_r(array_pad($input, 10, 7));// 用7填滿到[10]
?>
<h2>in array</h2>
<?php
var_dump(in_array("papaya", $fruit));// 檢查陣列裡有沒有這個值(papaya) false
?>
<h2>array search</h2>
<?php
echo array_search("apple", $fruit);// 回傳該值的陣列順序 0 如果搜尋不存在的東西會回傳false
?>
<h2>array key exists</h2>
<?php
$student=[
    "Sam"=>1,
    "Jack"=>2
];
var_dump(array_key_exists("Sam",$student));
?>
<h2>asort</h2>
<?php
asort($fruit);
print_r($fruit);// 照英文字母順序排序
?>
<h2>rsort</h2>
<?php
rsort($fruit);
print_r($fruit);// 跟asort相反排序
?>
