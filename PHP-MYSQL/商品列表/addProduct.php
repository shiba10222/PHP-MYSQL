<!doctype html>
<html lang="en">

<head>
    <title>addProduct</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("css.php") ?>
</head>

<body>
    <div class="container">
        <div class="mx-auto ">
            <h1 class="mb-3">新增商品</h1>
            <form action="doAddProduct.php" method="post">
                <div class="mb-2">
                    <label for="" class="form-label">商品名稱</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">商品描述</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-2">
                    <label for="" class="fform-label">價格</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <div class="mb-2">
                    <label for="" class="fform-label">上架數量</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
                <button class="btn btn-primary" type="submit">送出</button>
            </form>
        </div>
    </div>
</body>

</html>