<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/login.css">
  <link rel=" stylesheet" href="../css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Signup</title>
</head>

<body>
  <body>
    <div class="logo-img">
        <a href="../home.php"><img src="../img/imageedit_9_7326910407.png" alt=""></a>

    </div>
    <nav class="nav-bar">
        <ul class="nav-links">
            <li><a href="../home.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="login.php" class="active">Login</a></li>
      <li><a href="signup.php">Sign up</a></li>
    </ul>
    <div class="burger" onclick="navSlide()">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
  </div>
  </nav>
  <script src="../js/login.js"></script>
  <div class="content">
    <div class="box">
      <h2>Login</h2>
      <hr width="100%">
      <form action="../Php/login.inc.php" method="POST">
        <input type="text" name="username" placeholder="Username/Email">
        <input type="password" name="pass"placeholder="Password">
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit" value="Login">
        <div class="second_link">
          Not a member? <a href="signup.php">Sign up</a>
        </div>
      </form>
    </div>
    <?php require("../Php/loginerrors.php");?>
  </div>
  <footer class="footer">
    <p>Copyright © 2021-2022 WeBlog.com</p>
  </footer>
</body>

</html>