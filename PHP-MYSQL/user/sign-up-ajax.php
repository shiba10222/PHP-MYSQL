<?php
require_once("../db-connect.php");

$sql = "SELECT * FROM users WHERE valid=1";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <title>sign-up-ajax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="modal fade" tabindex="-1" id="infoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">訊息</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="infoMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="mb-2">
                    <label for="" class="form-label">*帳號</label>
                    <input type="text" id="account" class="form-control">
                    <div class="form-text">請輸入4~20字元的帳號</div>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">*姓名</label>
                    <input type="name" id="name" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">*密碼</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">再輸入一次密碼</label>
                    <input type="password" id="repassword" class="form-control">
                </div>
                <div class="text-danger" id="error"></div>
                <button type="button" class="btn btn-primary" id="send">送出</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const send = document.querySelector("#send")
        const name = document.querySelector("#name")
        const account = document.querySelector("#account")
        const password = document.querySelector("#password")
        const repassword = document.querySelector("#repassword")
        const error = document.querySelector("#error")
        const infoModal = new bootstrap.Modal('#infoModal')
        // infoModal.show();
        const infoMessage=document.querySelector("#infoMessage")

        send.addEventListener("click", function() {
            // console.log("click");
            let nameValue = name.value;
            let accountValue = account.value;
            let passwordValue = password.value;
            let repasswordValue = repassword.value;
            // console.log(nameValue, accountValue, passwordValue, repasswordValue);
            $.ajax({
                    method: "POST", //or GET
                    url: "http://localhost/api/doSignUp.php",
                    dataType: "json",
                    data: {
                        name: nameValue,
                        account: accountValue,
                        password: passwordValue,
                        repassword: repasswordValue
                    }
                })
                .done(function(response) {
                    // console.log(response);
                    error.textContent = "";
                    let status = response.status;
                    // if(status==0){
                    //     // console.log(response.message);
                    //     error.textContent=response.message;
                    // }
                    switch (status) {
                        case 0:
                            error.textContent = response.message;
                            break;
                        case 1:
                            // alert(response.message)
                            infoMessage.textContent=response.message
                            infoModal.show()
                            break;
                    }

                }).fail(function(jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                });
        })
    </script>
</body>

</html>