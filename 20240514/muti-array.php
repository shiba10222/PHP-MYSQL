<?php
// $arr[0][0]="00";
// $arr[0][1]="01";
// $arr[1][0]="10";
// $arr[1][1]="11";
// var_dump($arr);

$arr=[
    ["00", "01"],
    ["10", "11"]
];

?>

<pre>
    <?php print_r($arr) ?>
</pre>
<hr>
<?php
$name=["John", "Sam", "Mary"];
$height=[180, 173, 165];
$weight=[83, 72, 50];
$student_data=[$name, $height, $weight];
?>
<pre>
    <?php print_r($student_data); ?>
</pre>
<?php
echo $student_data[0][0]."'s height is ".$student_data[1][0]."cm, weight is ".$student_data[2][0];