<?php
$var = 1;
try {
    $var->method();
} catch (Error $e) {
    // echo "Gor an error here";
    echo $e->getMessage();
}
?>
<h2>DivisionByZeroError</h2>
<?php
try {
    $d = 0;
    $result = 90 / $d;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage();
}
?>
<h2>Assersion Error</h2>
<?php
ini_set('zend.assertions', 1);
ini_set('assert.exception', 1);

try {
    $test = 1;
    assert($test === 0);
} catch (AssertionError $e) {
    echo $e->getMessage();
}
?>
<h2>type Error</h2>
<?php
function add(int $a, int $b)
{
    return $a + $b;
}
try {
    add('one_cat', 'two_cats');
} catch (TypeError $e) {
    echo $e->getMessage();
}
?>
<h2>catch final</h2>
<?php
try {
    $d = 0;
    $result = 90 / $d;
} catch (ArithmeticError $e) {
    echo "catch in ArithmeticError<br>";
} catch (DivisionByZeroError $e) {
    echo "catch in DivitionByZeroError<br>";
    echo $e->getMessage();
} finally {
    echo "final program block<br>";
}
echo "outside try-catch block";
?>
<h2>Exception</h2>
<?php
$score = -3;
try {
    if ($score < 0) {
        throw new Exception("Exception: score shouldn't be nagetive!", 1002);
    }
} catch (Exception $e) {
    echo "Error code: " . $e->getCode() . ", " . $e->getMessage();   
}
