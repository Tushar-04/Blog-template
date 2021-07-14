<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/signup.css">
  <link rel=" stylesheet" href="../css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Signup</title>
</head>

<body>
  <div class="logo-img">
    <a href="../home.php"><img src="../img/imageedit_9_7326910407.png" alt=""></a>

  </div>
  <nav class="nav-bar">
    <ul class="nav-links">
      <li><a href="../home.php">Home</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="signup.php" class="active">Sign up</a></li>
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
      <h2>Sign up</h2>
      <hr width="100%">
      <form action="../Php/signup.inc.php" method="POST">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email Id">
        <input type="text" name="phone" placeholder="Phone number">
        <input type="password" name="pass" placeholder="Password">
        <input type="password" name="conpass" placeholder="Confirm Password">
        <input type="submit" name="submit" value="Sign up">
        <div class="second_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
    <?php require("../Php/signinerrors.php");?>
  </div>
  <footer class="footer">
    <p>Copyright © 2021-2022 WeBlog.com</p>
  </footer>
</body>

</html>
