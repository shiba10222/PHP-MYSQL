<h2>if else</h2>
<?php
$john_score=90;
$sam_score=90;

if ($john_score > $sam_score){
    echo "john is better";
}elseif($john_score == $sam_score){
    echo "john and sam are equal";
}else{
    echo "sam is better";
};
?>
<hr>
<?php
if ($john_score > $sam_score):
    echo "john is better";
elseif($john_score == $sam_score):
    echo "john and sam are equal";
else:
    echo "sam is better";
endif;
?>
<hr>
<?php if($john_score > $sam_score): ?>
    john is better
<?php elseif($john_score == $sam_score): ?>
    john and sam are equal
<?php else: ?>
    sam is better
<?php endif;

