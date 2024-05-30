<!doctype html>
<html lang="en">

<head>
    <title>create user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <?php include("../css.php"); ?>

</head>

<body>
    <div class="container">
        <div class="py-2">
            <a href="users.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>回使用者列表</a>
        </div>
        <form action="doCreateUser.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">*姓名</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">*email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-2">
                <label for="" class="fform-label">*電話</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <button class="btn btn-primary" type="submit">送出</button>
        </form>
    </div>
</body>

</html>