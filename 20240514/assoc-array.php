<?php
$student["name"]="john";
$student["height"]=173;
$student["weight"]=70;
?>
<pre>
    <?php print_r($student); ?>
</pre>
<?php
echo $student["name"]."'s height is ".$student["height"]."cm, weight is ".$student["weight"]."kg.";
?>
<script>
    const student=<?php echo json_encode($student) ?>;
    console.log(student);
</script>
<hr>
<?php
$student2=[
    "name"=>"Sam",
    "height"=>173,
    "weight"=>72
];
var_dump($student2);

// javascript
// const student={
//     name:"Sam",
//     height:173,
//     weight:72
// }
?>