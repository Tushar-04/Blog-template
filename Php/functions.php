<?php
function emptyInputSignup($name,$email,$pass,$passrep,$fname,$lname,$phone){
    $result;
    if(empty($name) || empty($email) || empty($pass) || empty($passrep) || empty($fname) || empty($lname) || empty($phone) ){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;     
}

function invalidname($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidfname($fname){
    $result;
    if(!preg_match("/^[a-zA-Z]*$/",$fname)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidlname($lname){
    $result;
    if(!preg_match("/^[a-zA-Z]*$/",$lname)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidphone($phone){
    $result;
    if(!preg_match("/^[0-9]*$/",$phone)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidemail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function passmatch($pass,$passrep){
    $result;
    if($passrep==$pass){
        $result=false;
    }
    else{
        $result=true;
    }
    return $result;
}
function userexist($conn,$name,$email){
    $sql ="select*from users where username=? OR email_id=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../Html/signup.php?error=stmtfaield");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$name,$email);
    mysqli_stmt_execute($stmt);

    $resultdata=mysqli_stmt_get_result($stmt);
    
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$fname,$lname,$phone,$name,$email,$pass){
    $sql ="insert into users(first_name,last_name,username,email_id,phone,password) values(?,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../Html/signup.php?error=stmtfaield");
        exit();
    }

    $hashedpass= password_hash($pass,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lname,$name,$email,$phone,$hashedpass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../Html/login.php?error=none");
    exit();

}
function emptyInputlogin($name,$pass){
    $result;
    if(empty($name) || empty($pass)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;     
}
function loginUser($conn,$username,$pass){
    $uid=userexist($conn,$username,$username);

    if($uid === false ){
        header("location:../Html/login.php?error=wronglogin");
        exit();
    }

    $hashedpass=$uid["password"];
    $checkpass=password_verify($pass,$hashedpass);

    if($checkpass===false){
        header("location:../Html/login.php?error=wrongpass");
        exit();
    }
    if($checkpass===true){
        session_start();
        $_SESSION["username"]= $uid["username"];
        header("location:../home.php");
        exit();
    }
}

function emptyInputcontact($email,$fname,$lname,$msg){
    $result;
    if(empty($fname) || empty($lname) || empty($email) || empty($msg)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;     
}

function createcontact($conn,$fname,$lname,$email,$subject,$msg){
    $sql ="insert into contact(first_name,last_name,email,subject,message) values(?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location:../Html/contact.php?error=stmtfaield");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"sssss",$fname,$lname,$email,$subject,$msg);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../Html/contact.php?error=none");
    exit();
}