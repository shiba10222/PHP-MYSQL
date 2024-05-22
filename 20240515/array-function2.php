<h2>compact</h2>
<?php
$var1="green";
$var2="red";
$var3="blue";
$color=compact("var1", "var2", "var3");// 變數內容 變陣列
?>
<pre>
    <?php
        var_dump($color);
        echo "<br>";
        echo $color["var1"];
    ?>
</pre>
<hr>
<?php
$user=[
    "account"=>"Jack",
    "nickname"=>"blackjack",
];
$article=[
    "name"=>"Title",
    "publish_date"=>"2024-05-15",
    "content"=>"asdfasfaf"
];
$recommend_article=[
    [
        "id"=>1,
        "name"=>"相關文章1"
    ],
    [
        "id"=>2,
        "name"=>"相關文章2"
    ]
    ];
$data=compact("user", "article", "recommend_article");
?>
<pre>
    <?php
    print_r($data);
    ?>
</pre>

Hello,<?=$data["user"]["nickname"]?>!

<h2>array chunk</h2>
<?php
$arr=["a", "b", "c", "d", "e"];
$re1=array_chunk($arr, 3);// 分割
print_r($re1);
?>

<h2>array combine</h2>
<?php
    $a=["Joe", "Sam"];
    $b=[24, 31];
    $c=array_combine($a, $b);// 變成關聯式陣列
 ?>
 <pre>
    <?php
    print_r($c);
    ?>
 </pre>
