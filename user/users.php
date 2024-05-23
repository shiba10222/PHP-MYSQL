<?php
require_once("../db-connect.php");

$sqlAll = "SELECT * FROM users WHERE valid = 1";
$resultAll = $conn->query($sqlAll);
$allUserCount = $resultAll->num_rows;

if (isset($_GET["search"])) {
    $search = $_GET["search"];
    $sql = "SELECT id, name, email, phone FROM users WHERE account LIKE '%$search%' AND valid = 1";
    $pageTitle = "$search 的搜尋結果";
} else if (isset($_GET["page"]) && isset($_GET["order"])) {
    $page = $_GET["page"];
    $perPage = 5;
    $firstItem = ($page - 1) * $perPage;
    $pageCount = ceil($allUserCount / $perPage);

    $sql = "SELECT *FROM users WHERE valid = 1 LIMIT $firstItem, $perPage";
    $order = $_GET["order"];
    // if ($order == 1) {// id ASC
    //     $sql = "SELECT * FROM users WHERE calid=1 ORDER BY id ASC LIMIT $firstItem, $perPage";
    // }
    switch ($order) {
        case 1: // id ASC
            // $sql = "SELECT * FROM users WHERE valid=1 ORDER BY id ASC LIMIT $firstItem, $perPage";
            $orderClause = "ORDER BY id ASC";
            break;
        case 2: // id DESC
            // $sql = "SELECT * FROM users WHERE valid=1 ORDER BY id DESC LIMIT $firstItem, $perPage";
            $orderClause = "ORDER BY id DESC";
            break;
        case 3:
            // $sql = "SELECT * FROM users WHERE valid=1 ORDER BY name ASC LIMIT $firstItem, $perPage";
            $orderClause = "ORDER BY name ASC";
            break;
        case 4:
            // $sql = "SELECT * FROM users WHERE valid=1 ORDER BY name ASC LIMIT $firstItem, $perPage";
            $orderClause = "ORDER BY name DESC";
            break;
    }

    $sql = "SELECT * FROM users WHERE valid=1 $orderClause LIMIT $firstItem, $perPage";
    $pageTitle = "使用者列表,頁 $page";
} else {
    $sql = "SELECT id, name, email, phone FROM users WHERE valid = 1";
    $pageTitle = "使用者列表";
    header("location:users.php?page=1&order=1");
}

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
$userCount = $result->num_rows;
if (isset($_GET["page"])) {
    $userCount = $allUserCount;
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <?php include("../css.php"); ?>
</head>

<body>
    <div class="container">
        <h1><?= $pageTitle ?></h1>
        <div class="py-2 mb-3">
            <div class="d-flex justify-content-between">
                <div class="">
                    <?php if (isset($_GET["search"])) : ?>
                        <a href="users.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></a>
                    <?php endif; ?>
                </div>
                <div class="d-flex gap-3">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search..." name="search">
                            <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <a href="create-user.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="pb-2 d-flex justify-content-between">
            <div>共<?= $userCount ?>人</div>
            <?php if (isset($_GET["page"])) : ?>
                <div>
                    排序: <div class="btn-group">
                        <a href="?page=<?= $page ?>&order=1" class="btn btn-primary
                        <?php
                        if ($order == 1) echo "active";
                        ?>">id<i class="fa-solid fa-arrow-down-1-9"></i></a>

                        <a href="?page=<?= $page ?>&order=2" class="btn btn-primary <?php if ($order == 2) echo "active"; ?>">id<i class="fa-solid fa-arrow-down-9-1"></i></a>

                        <a href="?page=<?= $page ?>&order=3" class="btn btn-primary <?php if ($order == 3) echo "active"; ?>">name<i class="fa-solid fa-arrow-down-1-9"></i></a>

                        <a href="?page=<?= $page ?>&order=4" class="btn btn-primary <?php if ($order == 4) echo "active"; ?>">name<i class="fa-solid fa-arrow-down-9-1"></i></a>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <?php if ($result->num_rows > 0) : ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $user) : ?>
                        <tr>
                            <td><?= $user["id"] ?></td>
                            <td><?= $user["name"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td><?= $user["phone"] ?></td>
                            <td><a class="btn btn-primary" href="user.php?id=<?= $user["id"] ?>"><i class="fa-sharp fa-solid fa-eye"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (isset($_GET["page"])) : ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pageCount; $i++) : ?>
                            <li class="page-item 
                            <?php if ($i == $page) echo "active"; ?>">
                                <a class="page-link" href="?page=<?= $i ?>&order=<?= $order ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        <?php else :  ?>
            沒有使用者
        <?php endif; ?>
    </div>
</body>

</html>