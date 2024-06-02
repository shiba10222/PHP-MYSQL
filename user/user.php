<?php

if (!isset($_GET["id"])) {
    $id = 1;
} else {
    $id = $_GET["id"];
}


require_once("../db-connect.php"); // 抓資料

$sql = "SELECT * FROM users WHERE id = $id AND valid = 1";
// echo $sql;
$result = $conn->query($sql);
$row = $result->fetch_assoc(); // 用關聯式陣列排序

if ($result->num_rows > 0) {
    $userExit = true;
    $title = $row["name"];
} else {
    $userExit = false;
    $title = "使用者不存在";
}

// $userExit=true;
// if($result->num_rows==0){$userExit=false;}

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
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">確認刪除</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    確認刪除使用者? 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" href="user-delete.php?id=<?= $row["id"] ?>">確認</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="py-2">
            <a href="users.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>回使用者列表</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <?php if ($userExit) : ?>
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <td><?= $row["id"] ?></td>
                        </tr>
                        <tr>
                            <th>name</th>
                            <td><?= $row["name"] ?></td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td><?= $row["email"] ?></td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td><?= $row["phone"] ?></td>
                        </tr>
                        <tr>
                            <th>create time</th>
                            <td><?= $row["created_at"] ?></td>
                        </tr>
                    </table>
                    <div class="py-2 d-flex justify-content-between">
                        <a class="btn btn-primary" title="編輯使用者" href="user-edit.php?id=<?= $row["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>

                        <button title="刪除使用者" class="btn btn-danger"><i class="fa-solid fa-user-slash" data-bs-toggle="modal" data-bs-target="#deleteModal"></i></button>
                    <?php else : ?>
                        <h1>使用者不存在</h1>
                    <?php endif; ?>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>

    </script>
</body>

</html>