<?php 
require_once("../db-conn.php");
$sql="SELECT * FROM products ";

$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <title>product list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .box {
            
            max-width: 108px;
            height: auto;
        }
        .fixed-width {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr class="text-nowrap text-center">
                    <th>編號</th>
                    <th>商品名稱</th>
                    <th>商品圖片</th>
                    <th>商品描述</th>
                    <th>分類</th>
                    <th>價格</th>
                    <th>上架時間</th>
                    <th>庫存量</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $product):?>
                <tr>
                    <td class="align-middle text-center"><?=$product["id"]?></td>
                    <td class="align-middle"><?=$product["name"]?></td>
                    <td class="box"><img class="object-fit-cover img-fluid" src="/product_images/<?= $product["pic"] ?>" alt="<?= $product["name"] ?>"></td>
                    <td class="fixed-width align-middle"><p><?=$product["description"]?></p></td>
                    <td class="align-middle text-center"><?=$product["category_id"]?></td>
                    <td class="align-middle text-center"><?=$product["price"]?></td>
                    <td class="align-middle text-center"><?=$product["on_shelves_time"]?></td>
                    <td class="align-middle text-center"><?=$product["inventory"]?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>