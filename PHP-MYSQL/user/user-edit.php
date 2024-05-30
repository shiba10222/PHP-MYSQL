<?php

if (!isset($_GET["id"])) {
    $id = 1;
} else {
    $id = $_GET["id"];
}


require_once("../db-connect.php"); // 抓資料

$sql = "SELECT * FROM users WHERE id = $id AND valid= 1";
// echo $sql;
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // 用關聯式陣列排序
// var_dump($row);
if ($result->num_rows > 0) {
    $userExit = true;
    $title = $row["name"];
} else {
    $userExit = false;
    $title = "使用者不存在";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("../css.php") ?>
</head>

<body>
   
    <div class="container">
        <div class="py-2">
            <a href="user.php?id<?= $id ?>" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>回使用者</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <?php if ($userExit) : ?>
                    <form action="doUpdateUser.php" method="post">
                        <table class="table table-bordered">
                            <input type="hidden" name="id" value="<?= $row["id"] ?>">
                            <!-- id 不讓使用者修改 所以hidden -->
                            <tr>
                                <th>id</th>
                                <td><?= $row["id"] ?></td>
                            </tr>
                            <tr>
                                <th>name</th>
                                <td><input type="text" class="form-control" value="<?= $row["name"] ?>" name="name"></td>
                            </tr>
                            <tr>
                                <th>email</th>
                                <td><input type="text" class="form-control" value="<?= $row["email"] ?>" name="email"></td>
                            </tr>
                            <tr>
                                <th>phone</th>
                                <td><input type="text" class="form-control" value="<?= $row["phone"] ?>" name="phone"></td>
                            </tr>
                        </table>
                        <button class="btn btn-primary" type="submit">送出
                        </button>
                    </form>
                <?php else : ?>
                    <h1>使用者不存在</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
</body>

</html>