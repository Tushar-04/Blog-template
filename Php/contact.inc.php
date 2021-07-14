<?php
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $subject = $_POST["Subject"];
    $msg = $_POST["msg"];
    
    require_once 'dbcon.php';
    require_once 'functions.php';

    if(emptyInputcontact($email,$fname,$lname,$msg)!==false){
        header("location:../Html/contact.php?error=emptyinput");
        exit();
    }
    if(invalidfname($fname)!==false){
        header("location:../Html/contact.php?error=invalidfname");
        exit();
    }
    if(invalidlname($lname)!==false){
        header("location:../Html/contact.php?error=invalidlname");
        exit();
    }
    if(invalidemail($email)!==false){
        header("location:../Html/contact.php?error=invalidemail");
        exit();
    }
    createcontact($conn,$fname,$lname,$email,$subject,$msg);

}
else{
    header("location:../Html/contact.php");
    exit();
}