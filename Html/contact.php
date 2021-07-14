<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contact.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
</head>

<body>
  <div class="logo-img">
      <a href="../home.php"><img src="../img/imageedit_9_7326910407.png" alt=""></a>

  </div>
  <nav class="nav-bar">
      <ul class="nav-links">
          <li><a href="../home.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php" class="active">Contact us</a></li>
          <?php
            if(isset($_SESSION["username"])){
                    echo"<li><a href='profile.php'>Profile</a></li>";
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
  <script src="../js/nav.js"></script>
  <div class="container">
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <p>If you want to blog with us or want to discuss something</p>
      <p>Fill the form given below:</p>
    </div>
    <div class="column">
      <form action="../Php/contact.inc.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
        <label for="email">Email Id</label>
        <input type="text" id="email" name="email" placeholder="Your Email Id..">
        <label for="Subject">Subject</label>
        <select id="Subject" name="Subject">
          <option value="Blog">Want to blog with us</option>
          <option value="Discuss">Discuss something</option>
          <option value="others">Others</option>
        </select>
        <label for="msg">Message</label>
        <textarea id="msg" name="msg" placeholder="Write something.." style="height:140px"></textarea>
        <input type="submit" name="submit"value="Submit">
      </form>
    </div>
    <?php require("../Php/contacterrors.php");?>
  </div>

  <footer class="footer">
    <p>Copyright © 2021-2022 WeBlog.com</p>
  </footer>
</body>

</html>