<?php
if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
        echo '<script>alert("Fill in all the fields")</script>';
    }
    else if($_GET["error"]=="invalidfname"){
        echo '<script>alert("Invalid firstname only use a-z and A-Z")</script>';
    }
    else if($_GET["error"]=="invalidlname"){
        echo '<script>alert("Invalid lastname only use a-z and A-Z")</script>';
    }
    else if($_GET["error"]=="invalidemail"){
        echo '<script>alert("Invalid email id")</script>';
    }
    else if($_GET["error"]=="none"){
        echo '<script>alert("Message Sent")</script>';
    }
    else if($_GET["error"]=="stmtfaield"){
        echo '<script>alert("Something went wrong, try again!")</script>';
    }
    
}