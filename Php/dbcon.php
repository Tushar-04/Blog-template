<?php
$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "project";

$conn = mysqli_connect($servername,$dbusername,$dbpass,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}