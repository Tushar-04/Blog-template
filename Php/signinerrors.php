<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo '<script>alert("Fill in all the fields")</script>';
    }
    else if($_GET["error"]=="invalidname"){
        echo '<script>alert("Invalid username only use a-z,A-Z and 0-9")</script>';
    }
    else if($_GET["error"]=="invalidfname"){
        echo '<script>alert("Invalid firstname only use a-z and A-Z")</script>';
    }
    else if($_GET["error"]=="invalidlname"){
        echo '<script>alert("Invalid lastname only use a-z and A-Z")</script>';
    }
    else if($_GET["error"]=="invalidphone"){
        echo '<script>alert("Invalid phone only 0-9")</script>';
    }
    else if($_GET["error"]=="invalidemail"){
        echo '<script>alert("Invalid email id")</script>';
    }
    else if($_GET["error"]=="userexist"){
        echo '<script>alert("Username or email alredy exist")</script>';
    }
    else if($_GET["error"]=="passnotmatching"){
        echo '<script>alert("Password does not match")</script>';
    }
    else if($_GET["error"]=="stmtfaield"){
        echo '<script>alert("Something went wrong, try again!")</script>';
    }
    
}