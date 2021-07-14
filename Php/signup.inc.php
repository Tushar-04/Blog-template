<?php
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passrep = $_POST["conpass"];

    
    require_once 'dbcon.php';
    require_once 'functions.php';

    if(emptyInputSignup($name,$email,$pass,$passrep,$fname,$lname,$phone)!==false){
        header("location:../Html/signup.php?error=emptyinput");
        exit();
    }
    if(invalidfname($fname)!==false){
        header("location:../Html/signup.php?error=invalidfname");
        exit();
    }
    if(invalidlname($lname)!==false){
        header("location:../Html/signup.php?error=invalidlname");
        exit();
    }
    if(invalidphone($phone)!==false){
        header("location:../Html/signup.php?error=invalidphone");
        exit();
    }
    if(invalidname($name)!==false){
        header("location:../Html/signup.php?error=invalidname");
        exit();
    }
    if(userexist($conn,$name,$email)!==false){
        header("location:../Html/signup.php?error=userexist");
        exit();
    }
    if(invalidemail($email)!==false){
        header("location:../Html/signup.php?error=invalidemail");
        exit();
    }
    if(passmatch($pass,$passrep)!==false){
        header("location:../Html/signup.php?error=passnotmatching");
        exit();
    }

    createUser($conn,$fname,$lname,$phone,$name,$email,$pass);
}
else{
    header("location:../Html/signup.php");
}