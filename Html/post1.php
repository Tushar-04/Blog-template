<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='../css/post.css'>
    <link rel='stylesheet' href='../css/style.css'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Post</title>
</head>
<body>
    <div class='logo-img'>
        <a href='../home.php'><img src='../img/imageedit_9_7326910407.png' alt=''></a>

    </div>
    <nav class='nav-bar'>
        <ul class='nav-links'>
            <li><a href='../home.php'>Home</a></li>
            <li><a href='blog.php' class='active'>Blog</a></li>
            <li><a href='contact.php'>Contact us</a></li>
            <?php
                if(isset($_SESSION['username'])){
                    echo"<li><a href='profile.php'>Profile</a></li>";
                    echo"<li><a href='../Php/logout.php'>Logout</a></li>";
                }
                else {
                    echo"<li><a href='login.php'>Login</a></li>";
                    echo"<li><a href='signup.php'>Sign up</a></li>";
                }
            ?>
        </ul>
        <div class='burger' onclick='navSlide()'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </nav>
    <script src='../js/nav.js'></script>



    <div class='content'>
        <div class='top-img'>
            <img src='../img/Win 11/top.jpg' alt=''>
        </div>
        <div class='blog-title'>
            <p>Windows 11 Leaked - What's new and why it’s exciting?</p>
        </div>
        <div class='author'>
            <div class='name'>
                <p>
                    Manish Pavadiya
                </p>
                <p>
                    7 July 2021 | 10 min read
                </p>
            </div>
            <div class='social'>
                <a href='#'>
                    <svg width='29' height='29' class='hk'>
                        <path
                            d='M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z'>
                        </path>
                    </svg>
                </a>
                <a href='https://www.instagram.com/iammanishsinghx0/' target='_blank'>
                    <svg width='29' height='28' class='hk'>
                        <path
                        d='M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'>
                    </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class='article'>
            <p>
                Windows 11 is an upcoming version of Microsoft Windows. It will be the successor to Windows 10.
                Microsoft said that it was going to announce the next version of Windows on June 24, but the complete
                Windows 11 OS has appeared online, and it was first published at Chinese site Baidu.
            </p>
            <p>
                Let's talk about the new features and updates that Windows 11 carries.
            </p>
            <h1>
                A better user interface:
            </h1>
            <p>
                There's splendid news to all the UI lovers because Windows 11 comes with a cool-looking User Interface.
                Though there are not many changes, yet you will surely see the effect.
                It features an updated UI that follows the company's Fluent Design guidelines viz. translucency,
                shadows, and rounded corners are prevalent throughout the system.

            </p>
            <h1>
                Start Menu:
            </h1>
            <p>
                Microsoft has completely redesigned the Start Menu. It is simplified i.e. no more live tiles on the
                Start Menu.
            </p>
            <p>
                Instead, you'll find standard icons that show pinned apps, even recommended apps and files.
            </p>
            <img src='../img/Win 11/1.jpg' alt='image'>
            <h1>
                Taskbar:
            </h1>
            <p>
                The taskbar has been renovated in Windows 11 as well. It is made streamlined and centered by default.
            </p>
            <img src='../img/Win 11/2.jpg' alt='image'>
            <?php
            if(isset($_SESSION["username"])){
                echo "<h1>
                Round Corners:
            </h1>
            <p>
                Windows and menus appear to have somewhat rounded edges. If you are a UI praiser , then for sure you are
                going to love the new design. It's one of the most stunning designs by windows OS.
            </p>
            <img src='../img/Win 11/3.jpg' alt='image'>
            <h1>
                More colors to paint and notepad:
            </h1>
            <p>
                Windows 11 comes with the new look of Paint and Notepad. These apps now look more clean and soft, Thus
                giving a unique experience to its users.
            </p>
            <img src='../img/Win 11/4.jpg' alt='image'>
            <p>
                Icons and typography have been updated in the paint app. It doesn't look like there are new
                functionalities in the app, but it has been given a new fresh look.
            </p>
            <h1>
                Android Apps:
            </h1>
            <p>This is something that I liked the most. With the new Windows 11, you can use most Android apps directly
                on your windows without using any android emulator such as Bluestack, etc.</p>
            <img src='../img/Win 11/5.jpg' alt='image'>
            <p>Microsoft has done a partnership with Amazon to bring the Amazon Appstore to the Microsoft Store. It
                means you can use all the apps available on Amazon Appstore on your windows directly.</p>
            <p>There is a new option in Windows 11 that allows us to split views, and you can do so by clicking on the
                maximize button. You can split the view with two, three, or four apps on the screen at once. It makes
                the thing lot easier as earlier we have to do it manually.</p>
            <img src='../img/Win 11/6.jpg' alt='image'>
            <p>The folder icons now look more playful and colorful. The animations look and feel fluid</p>
            <p>There are some other changes to the system that are new icons, sounds, and widgets. There is a dedicated
                button in the taskbar to add widgets</p>
            <p>So, this leak now verifies that Windows 11 will be officially revealed later this month.</p>";
            }
            else{
                echo"<a href='login.php'><p>Login to read more</p></a>";
            }
            ?>
        </div>
    </div>
    <footer class='footer'>
        <p>Copyright © 2021-2022 WeBlog.com</p>
    </footer>

</body>

</html>