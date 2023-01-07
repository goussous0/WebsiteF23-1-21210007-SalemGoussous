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
        <title>DeadBeef | Cart</title>
        <base href="/"> 
        <meta charset="UTF-8">
        <meta name="keywords" content="0DEADBEEF">
        <meta name="author" content="goussous0">
        <meta http-equiv="refresh" content="120"> <!-- update page every 30 seconds -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="View the items you have added to your order and proceed to checkout.">
        <!-- preload -->
        <link rel="preload" href="/static/css/styles.css" as="style">
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
        <!-- preload-->
        <link rel="stylesheet" href="/static/css/styles.css" >
        <link rel="icon" type="image/x-icon" href="/static/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" defer>
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/static/sitemap.xml" defer>
        <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.webp">
        <link rel="icon" type="image/webp" sizes="32x32" href="/static/img/favicon-32x32.webp">
        <link rel="icon" type="image/webp" sizes="16x16" href="/static/img/favicon-16x16.webp">
        <link rel="manifest" href="/static/site.webmanifest">
        <ul class="nav_lst" >
            <li class="nav_elm">
                <a href="/index.php">
                    <img class="logo" src="/static/img/logo.svg" width="100" height="100"  alt="site logo" defer>
                </a>
            </li>
            <li class="nav_elm"><a class="item" href="/about.php">About Us</a></li>
            <li class="nav_elm"><a class="item" href="/menu.php">Menu</a></li>
            <li class="nav_elm"><a class="item" href="/cart.php">Cart</a></li>
            <li class="nav_elm"><a class="item" href="/contact.php">Contact Us</a></li>
        </ul>  
    </head>
    <body>
    <?php
      session_start();
      ?>
      <?php
	      header("Cache-Control: max-age=31536000");
      	  header("Age: 100");
      ?>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h1 class="card-header" style="margin:0 auto;font-size: 4rem;">Cart</h1>
            <div id="bdy" style="display: flex;">
                <div id="cart">
                    <!-- items in cart selected by user -->
                </div>
                <div id="usr_info">
                    <form method="POST" action="/cart.php">
                        <div class="user-input">
                            <label for="fname">First name:</label>
                            <input type="text" id="fname" name="fname">
                        </div> 
                        <div class="user-input">
                            <label for="lname">Last name:</label>
                            <input type="text" id="lname" name="lname">
                        </div> 
                        <div class="user-input">
                            <label for="addr">Address: </label>
                            <input type="text" id="addr" name="addr">
                        </div>
                        <div class="user-input">
                            <label for="pnumber">Phone number:</label>
                            <input type="text" id="pnumber" name="pnumber">
                        </div>
                        <div class="user-input">
                        <input type="submit" value="Submit" id="complete-order">
                        </div>
                    </form>
                </div>
            </div>
            <h2 style="margin:0 auto;font-size: 2rem;text-align: center;">  Satisfy your hunger with DeadBeef.</h2>
        </div>
    </body>
</html>