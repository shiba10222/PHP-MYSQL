<!doctype html>
<html lang="en">

<head>
    <title>sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form action="doSignUP.php" method="post">
                    <div class="mb-2">
                        <label for="" class="form-label">*帳號</label>
                        <input type="text" name="account" class="form-control">
                        <div class="form-text">請輸 入4~20字元的帳號</div>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">*姓名</label>
                        <input type="name" name="name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">*密碼</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">再輸入一次密碼</label>
                        <input type="password" name="repassword" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>