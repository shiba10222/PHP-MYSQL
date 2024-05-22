<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <style>
            h1 span {
                color:red;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Hello world</h1>
            <h1><?php
            echo "Hello world" 
            ?></h1>
            <?php
            echo "<h1>Hello <span>world<span></h1>"?>
            <h1><?="Hello world"?></h1>
            <?php
            // $name="Jack";
            $name=$_GET["name"];
            ?>
            <h1>Hello, <?php echo $name?></h1>
            
        </div>
    </body>
</html>
