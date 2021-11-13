<?php 
    session_start();

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "testuser" && $password == "password"){
            echo "Successfully login!";
        }else{
            header("Location: index.php");
        }
        

    }
?>