<?php
require_once("../db-connect.php");

$sql = "SELECT * FROM users WHERE valid=1";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <title>users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <button class="btn btn-primary" id="getUsers">getUsers</button>
        <hr>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="row g-3" id="userList">
                    <?php foreach ($rows as $user) : ?>
                        <div class="col-lg-4">
                            <div class="d-grid">
                                <button data-id="<?= $user["id"] ?>" class="btn btn-primary">id: <?= $user["id"] ?></button>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div>name: <span id="name"></span></div>
                <div>account: <span id="account"></div>
                <div>email: <span id="email"></div>
                <div>phone: <span id="phone"></div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const getUsers = document.querySelector("#getUsers")
        const btns = document.querySelectorAll("#userList .btn")
        const name=document.querySelector("#name")
        const account=document.querySelector("#account")
        const email=document.querySelector("#email")
        const phone=document.querySelector("#phone")


        for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                let id = this.dataset.id;
                // console.log(id);
                $.ajax({
                        method: "POST", //or GET
                        url: "http://localhost/api/user.php",
                        dataType: "json",
                        data:{
                            id: id
                        } 
                    })
                    .done(function(response) {
                        console.log(response);
                        // console.log(response.user.name);
                        name.textContent=response.user.name;
                        account.textContent=response.user.account;
                        email.textContent=response.user.email;
                        phone.textContent=response.user.phone;

                    }).fail(function(jqXHR, textStatus) {
                        console.log("Request failed: " + textStatus);
                    });
            })
        }

        getUsers.addEventListener("click", function() {
            $.ajax({
                    method: "GET", //or GET
                    url: "http://localhost/api/users.php",
                    dataType: "json",
                })
                .done(function(response) {
                    console.log(response);
                }).fail(function(jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                });
        })
    </script>
</body>

</html>