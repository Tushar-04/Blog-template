<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/blog.css">
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
            <li><a href="blog.php" class="active">Blog</a></li>
            <li><a href="contact.php">Contact us</a></li>
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
    <div class="content">
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
        <div class="blog-article">
            <div class="blog-article-img">
                <img src="../img/Win 11/top.jpg" alt="article">

            </div>
            <div class="blog-article-content">
                <a href="post1.php">
                    <h3>Windows 11 Leaked - What's new and why it’s exciting?</h3>
                </a>

                <div>Manish Pavadiya</div>
                <span>07 July | 10 min read</span>
            </div>
        </div>
    </div>
    <script src="../js/nav.js"></script>
    <footer class="footer"><p>Copyright © 2021-2022 WeBlog.com</p> </footer>
</body>
</html>