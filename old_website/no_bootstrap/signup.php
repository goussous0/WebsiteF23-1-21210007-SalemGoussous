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
        <title>DeadBeef | Sign Up </title>
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
        require 'helpers.php';


        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $user = $_POST["fname"];
            $pass1 = $_POST["pass1"];
            $pass2 = $_POST["pass2"];

            if ($pass1 == $pass2)
            {
                $result = check_user($user);
                if ($result) {
                    error_log("User found in db");
                } else {
                    error_log("no such user complete sign up");
                if ($pass1 == $pass2) 
                {
                    // add new user to the databse
                    if (add_user($user, $pass1)) {
                        error_log("added " . $user . " to db");
                    } else {
                        error_log("Failed to add " . $user);
                    }
                } 
                else 
                {
                    error_log("password mismatch ");
                }

                }
            }
        }
      ?>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h1 class="card-header" style="margin:0 auto;font-size: 4rem;">Sign Up</h1>
            <style>
                .info
                {
                    width: 60vw;
                    min-width: 500px;
                    margin:auto;
                }
                #fname, #lname
                {
                    width: 60%;
                }

            </style>
            <div class="info">
                <form method="POST" action="/signup.php">
                        <div class="user-input">
                            <label for="fname">Username:</label>
                            <input type="text" id="fname" name="fname">
                        </div> 
                        <div class="user-input">
                            <label for="passwd">Password:</label>
                            <input type="password" id="lname" name="pass1">
                        </div> 
                        <div class="user-input">
                            <label for="passwd">Password again:</label>
                            <input type="password" id="lname" name="pass2">
                        </div> 
                        <div class="user-input">
                        <input type="submit" value="Submit" id="complete-order">
                        </div>                        </div>
 
                    </form>
            </div>
            <h2 style="margin:0 auto;font-size: 2rem;text-align: center;">  Satisfy your hunger with DeadBeef.</h2>
        </div>
    </body>
</html>

<!--
    DALL·E 2022-12-22 16.41.52 - A salad made from computer parts, digital art .webp
-->