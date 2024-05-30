<?php
require_once("../db-connect.php");

$sql = "SELECT * FROM images ORDER BY id DESC";
$result = $conn->query($sql);
$row = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <title>file upload</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="doUpload.php" method="post" enctype="multipart/form-data">
                    <!-- 要傳檔案要加 enctype="multipart/form-data" -->
                    <div class="mb-2">
                        <label for="" class="form-label">名稱</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-2">
                        <label for="form-label" class="form-label">選擇檔案</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        送出
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <?php foreach ($row as $images) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img class="object-fit-cover" src="/upload/<?= $images["pic_name"] ?>" alt="">
                            </div>
                            <h4><?= $images["name"] ?></h4>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>