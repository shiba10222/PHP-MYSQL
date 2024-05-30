<?php
session_start();

if(!isset($_POST["id"])){
    $data=[
        "status"=>0,
        "message"=>"請循正常管道進入此頁"
    ];

    echo json_encode($data);
    exit;
}
$product_id=$_POST["id"];

// $data=[
//     "id"=>$product_id
// ];

// echo json_encode($data);
// exit;
$newItem=[
    $product_id=>1
];

// echo json_encode($newItem);
// $cart=[
//     // [product_id:=> amount]

// ];
if(!isset($_SESSION["cart"])){
    $product_exist=false;
    $_SESSION["cart"][]=$newItem;
}else{
    // $_SESSION["cart"][]=$newItem;
    $product_exist=false;
    foreach($_SESSION["cart"] as $item){//檢查是否有重複的商品
        if(array_key_exists($product_id, $item)){
            $product_exist=true;
            break;
        };
    }
    if(!$product_exist){
        $_SESSION["cart"][]=$newItem;
    }
}
// 回傳商品是否存在購物車
$data=$_SESSION["cart"];
echo json_encode($data);
