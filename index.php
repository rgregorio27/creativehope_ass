<?php 
    session_start();
    require "login.php";
?>

<!DOCTYPE html>
<html lang="UTF-8">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
        <title>Assessment Page</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="design.css">
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg"/>

            <form class="form-signin" action="login.php" method="post">
                <h1 class="form-signin-heading text-muted">LOGIN</h1>
                <input type="text" class="form-control" placeholder="Enter name" required="" name="username" autofocus="">
                <input type="password" class="form-control" placeholder="Enter password" name="password" required="">
                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login">
            </form>
        </div>
    </body>
</html>