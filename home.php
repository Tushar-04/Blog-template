<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="logo-img">
        <a href="home.php"><img src="img/imageedit_9_7326910407.png" alt=""></a>

    </div>
    <nav class="nav-bar">
        <ul class="nav-links">
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="Html/blog.php">Blog</a></li>
            <li><a href="Html/contact.php">Contact us</a></li>
            <?php
                if(isset($_SESSION["username"])){
                    echo"<li><a href='Html/profile.php'>Profile</a></li>";
                    echo"<li><a href='Php/logout.php'>Logout</a></li>";
                }
                else {
                    echo"<li><a href='Html/login.php'>Login</a></li>";
                    echo"<li><a href='Html/signup.php'>Sign up</a></li>";
                }
            ?>
        </ul>
        <div class="burger" onclick="navSlide()">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="js/nav.js"></script>
    <div class="content">
        <div class="intro">
            <h1>SuperBlog</h1>
            <p>SuperBlog is a website which provides you articles on various topics like tech, sports, fashion,etc..To
                keep
                your knowledge up to date.
                If you are intrested in writing you can submit your own article which upon approval will be up on our
                website and you can get a good amount of reach from here!
            </p>
        </div>
        <hr>
        <div class="article">
            <h1>Featured articles</h1>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/Win 11/top.jpg" alt="article">

                </div>
                <div class="home-article-content">
                    <a href="Html/post1.php">
                        <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                    </a>

                    <div>Manish Pavadiya</div>
                    <span>07 July | 10 min read</span>
                </div>
            </div>
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/Win 11/top.jpg" alt="article">

                </div>
                <div class="home-article-content">
                    <a href="Html/post1.php">
                        <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                    </a>

                    <div>Manish Pavadiya</div>
                    <span>07 July | 10 min read</span>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer">
        <p>Copyright © 2021-2022 WeBlog.com</p>
    </footer>
</body>

</html>