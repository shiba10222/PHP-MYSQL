<?php
require_once("../db-connect.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>sql-injection</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <form action="doLogin.php" method="post">
        <div class="mb-2">
            <label for="form-label">Account</label>
            <input type="text" class="form-control" name="account">
        </div>
        <div class="mb-2">
            <label for="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button class="btn btn-primary" type="submit">送出</button>
        </form>
    </div>
</body>

</html>