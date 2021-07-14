<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo '<script>alert("Fill in all the fields")</script>';
    }
    else if($_GET["error"]=="wronglogin"){
        echo '<script>alert("Wrong username")</script>';
    }
    else if($_GET["error"]=="wrongpass"){
        echo '<script>alert("Wrong password")</script>';
    }
    else if($_GET["error"]=="none"){
        echo '<script>alert("Sign up successful")</script>';
    }
    
}