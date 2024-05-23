<h2>array values</h2>
<?php
    $students=[
        "name"=>"Tom",
        "height"=>180,
        "weight"=>83
    ];
    print_r($students);
    echo "<hr>";
    print_r(array_values($students));
?>
    <h2>array count values</h2>
    <?php
    $s=["Sam", "Tom", "Jack", "Peter", "Sam"];
    $count=array_count_values($s);
    print_r($count);// 顯示在陣列出現過幾次
    ?>
    <h2>browse</h2>
    <?php
    $arr1=["one", "Two","Three", "Four"];
    echo current($arr1); "<br>";
    next($arr1);
    echo current($arr1); "<br>";
    next($arr1);
    echo current($arr1); "<br>";
    prev($arr1);
    echo current($arr1); "<br>";
    reset($arr1);
    echo current($arr1); "<br>";
    ?>
    <hr>
    <?php
    do{
        echo current($arr1)."<br>";
    }while(next($arr1));
    ?>
    