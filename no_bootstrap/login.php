<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SY91FB1KZ5"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-SY91FB1KZ5');
        </script>
        <title>DeadBeef | Login </title>
        <base href="/"> 
        <meta charset="UTF-8">
        <meta name="keywords" content="DeadBeef, Order">
        <meta name="author" content="goussous0">
        <!-- <meta http-equiv="refresh" content="30">--> <!-- update page every 30 seconds -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Place an order for pickup or delivery.">
        <!-- preload -->
        <link rel="preload" href="/static/css/styles.css" as="style">
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style">
        <!-- preload-->
        <link rel="stylesheet" href="/static/css/styles.css">
        <link rel="icon" type="image/x-icon" href="/static/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  >
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/static/sitemap.xml"  >
        <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.webp">
        <link rel="icon" type="image/webp" sizes="32x32" href="/static/img/favicon-32x32.webp">
        <link rel="icon" type="image/webp" sizes="16x16" href="/static/img/favicon-16x16.webp">
        <link rel="manifest" href="/static/site.webmanifest">
        <ul class="nav_lst" >
            <li class="nav_elm">
                <a href="/index.php">
                <img class="logo" src="/static/img/logo.svg" width="100" height="100"  alt="site logo"  >
                </a>
            </li>
            <li class="nav_elm"><a class="item" href="/about.php">About Us</a></li>
            <li class="nav_elm"><a class="item" href="/menu.php">Menu</a></li>
            <li class="nav_elm"><a class="item" href="/cart.php">Cart</a></li>
            <li class="nav_elm"><a class="item" href="/contact.php">Contact Us</a></li>
            <li class="nav_elm"><a class="item" href="/login.php">Login</a></li>
            <li class="nav_elm"><a class="item" href="/signup.php">Sign Up</a></li>
        </ul>  
    </head>
    <body>
    <?php
        require("helpers.php");
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if (verify_user($user, $pass))
            {
                error_log("setting USER to " . $user);
                // add user session 
                $_SESSION['user'] = $user;
                // add empty array to user session 
                $_SESSION['items'] = array();
                header('Location: menu.php');
                die();
            }
            else
            {
                echo "<script> alert('Wrong credentials'); </script>";
            }
        }
    ?>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h1 class="card-header" style="margin:0 auto;font-size: 4rem;">Login</h1>
            <style>
                .info
                {
                    width: 50%;
                    margin:auto;
                }
                #fname, #lname
                {
                    width: 60%;
                }

            </style>
            <div class="info">
                <form method="POST" action="/login.php">
                        <div class="user-input">
                            <label for="fname">Username:</label>
                            <input type="text" id="fname" name="username">
                        </div> 
                        <div class="user-input">
                            <label for="passwd">Password:</label>
                            <input type="password" id="lname" name="password">
                        </div> 
                        <div class="user-input">
                        <input type="submit" value="Submit" id="complete-order">
                        </div>
                    </form>
            </div>
            <h2 style="margin:0 auto;font-size: 2rem;text-align: center;">  Satisfy your hunger with DeadBeef.</h2>
        </div>
    </body>
</html>

