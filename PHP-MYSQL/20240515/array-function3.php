<h2>array merge</h2>
    <?php
    $arr2=[
        "name"=>"Joe", 2, 3
    ];
    $arr3=[
        "a", "b", "name"=>"Peter", "age"=>18, 4
    ]
    ?>
    <pre>
    <?php
        
            $merge1=array_merge($arr2, $arr3);
            print_r($merge1);
        
    ?>
    </pre>
    <h2>array merge recursive</h2>
    <?php
    $merge_re=array_merge_recursive($arr2, $arr3);
    ?>
    <pre>
        <?php
        print_r($merge_re);
        ?>
    </pre>