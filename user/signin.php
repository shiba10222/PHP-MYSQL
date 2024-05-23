<!doctype html>
<html lang="en">
    <head>
        <title>sign in</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <?php include("../css.php") ?>

        <style>
            .login-panel {
                width: 280px;
            }
            .logo {
                height: 48px;
            }
            .border-radius1 {
                border-radius: 5px 5px 0 0;
            }
            .border-radius2 {
                border-radius: 0 0 5px 5px;
            }
            .z-index:focus {
                position: relative;
                z-index: 9;
                background: transparent;
            }
        </style>
    </head>
    <body>
        <div class="bg-light vh-100 d-flex justify-content-center align-items-center">
            <div class="login-panel">
                <img class="logo" src="/images/" alt="">
            <h3 class="mt-2">Please sign in</h3>
            <form action="doLogin.php" method="post">
            <div class="form-floating">
                <input type="text" class="form-control  border-radius1 z-index" id="floatingInput" placeholder="" name="account">
                <label for="floatingInput">Account</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control border-radius2" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" placeholder="Password" name="password">Password</label>
              </div>
              <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              </div>
              </form>
              <div class="mt-5">
                <p class="">&copy;&nbsp;2017-2024</p>
              </div>
        </div>
    </div>
    
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
