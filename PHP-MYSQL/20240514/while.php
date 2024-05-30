<?php

$i=0;
while($i<10){
    echo "$i<br>";
    $i++;
}
?>
<hr>
<?php

$j=0;
while($j<10):
    echo "$j<br>";
    $j++;
endwhile;
?>
<hr>
<ul>
<?php
$k=0;
while($k<10):
?>
    <li><?=$k?></li>
<?php
$k++;
endwhile;
?>

</ul>
