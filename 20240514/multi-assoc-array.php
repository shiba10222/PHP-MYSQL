<?php
$students=[
    [
        "name"=>"John",
        "height"=>180,
        "weight"=>83
    ],
    [
        "name"=>"Sam",
        "height"=>173,
        "weight"=>72
    ],
    [
        "name"=>"May",
        "height"=>160,
        "weight"=>50
    ]
    ];
    // var_dump($students);
    ?>
    <h2>students</h2>
    <ul>
    <?php for($i=0; $i<count($students); $i++): ?>
        <li><?=$students[$i]["name"]?>'s height is <?=$students[$i]["height"]?>cm, weight is <?=$students[$i]["weight"]?>kg.</li>
        <?php endfor ?>
    </ul>
    <ul>
        <?php foreach($students as $student): ?>
            <li><?=$student["name"]?>'s height is <?=$student["height"]?>cm, weight is <?=$student["weight"]?>kg.</li>
            </li>
        <?php endforeach ?>
    </ul>