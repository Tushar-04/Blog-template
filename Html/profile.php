<?php
    include("../Php/dbcon.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div class="logo-img">
        <a href="../home.php"><img src="../img/imageedit_9_7326910407.png" alt=""></a>

    </div>
    <nav class="nav-bar">
        <ul class="nav-links">
            <li><a href="../home.php">Home</a></li>
            <li><a href="blog.php" >Blog</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <?php
                if(isset($_SESSION["username"])){
                    echo"<li><a href='profile.php'class='active'>Profile</a></li>";
                    echo"<li><a href='../Php/logout.php'>Logout</a></li>";
                }
                else {
                    echo"<li><a href='login.php'>Login</a></li>";
                    echo"<li><a href='signup.php'>Sign up</a></li>";
                }
            ?>
        </ul>
        <div class="burger" onclick="navSlide()">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="content" height="100%">
        <div class="info">
            <h1>My profile</h1>
            <hr>
            <?php
                $q="select * from users where username=?;";
                $stmt=mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$q);
                mysqli_stmt_bind_param($stmt,"s",$_SESSION["username"]);
                mysqli_stmt_execute($stmt);
                $resultdata=mysqli_stmt_get_result($stmt);
                $row=mysqli_fetch_assoc($resultdata);

                echo "<p>First Name : ".$row['first_name']."</p>";
                echo "<p>Last Name : ".$row['last_name']."</p>";
                echo "<p>Username : ".$row['username']."</p>";
                echo "<p>Email : ".$row['email_id']."</p>";
                echo "<p>Phone : ".$row['phone']."</p>";
            ?>
        </div>
    </div>
    <script src="../js/login.js"></script>
    <footer class="footer"><p>Copyright © 2021-2022 WeBlog.com</p> </footer>
</body>
</html>