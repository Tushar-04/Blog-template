<?php
if(isset($_POST["submit"])){
    $username= $_POST["username"];
    $pass= $_POST["pass"];

    require_once 'dbcon.php';
    require_once 'functions.php';

    if(emptyInputlogin($username,$pass)!==false){
        header("location:../Html/login.php?error=emptyinput");
        exit();
    }
    loginUser($conn,$username,$pass);

}
else{
    header("location:../Html/login.php");
    exit();
}