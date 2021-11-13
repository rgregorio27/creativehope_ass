<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        if($username == "testuser" && $password == "password"){
            //redirect to dashboard
            echo header("Location: dashboard.php");
            die;
        }else{
            //redirect to index page (username or password doesn't match)
            header("Location: index.php");
            //echo "Username or Password doesn't exist!";
        }

    }
?>