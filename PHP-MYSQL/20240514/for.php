<?php
for($i=0;$i<10;$i++){
    echo "$i<br>";
}
?>
<hr>
<ul>
    <?php
    // $fruit = array("apple");
    $fruit=["apple", "banana", "peach", "orange", "melon"];
    for($i=0; $i<count($fruit); $i++):
    ?>
        <li><?=$fruit[$i]?></li>
    <?php endfor; ?>
</ul>
<hr>
<?php
for($i=2, $j=2; $i<=9; $i++, $j++){
    echo "$i * $j =". $i*$j. '<br>';
}