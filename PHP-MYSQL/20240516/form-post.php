<!doctype html>
<html lang="en">

<head>
    <title>form post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <form action="doPost.php" method="post">
            <div class="mb-2">
                <label for="" class="form-label">*姓名</label>
                <input class="form-control" name="name">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">*密碼</label>
                <input class="form-control" name="password" type="password">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">*email</label>
                <input class="form-control" name="email" type="email">
            </div>
            <div class="mb-2">
                <label for="" class="form-label"></label>
                <div class="row">
                    <div class="col">
                        <input type="tel" class="phone-control" name="phones[]">
                    </div>
                    <div class="col">
                        <input type="tel" class="phone-control" name="phones[]">
                    </div>
                    <div class="col">
                        <input type="tel" class="phone-control" name="phones[]">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Gender</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="inlineRadio1">male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="inlineRadio2">female</label>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <label for="">電信商</label>
                <select name="telecom" id="" class="form-control">
                    <option value="1">中華電信</option>
                    <option value="2">台灣大哥大</option>
                    <option value="3">遠傳電信</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">送出
            </button>
        </form>
    </div>
</body>

</html>