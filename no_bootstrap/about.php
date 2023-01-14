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
        <title>DeadBeef | About Us</title>
        <base href="/"> 
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="goussou0">
        <!-- <meta http-equiv="refresh" content="30">--> <!-- update page every 30 seconds -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Learn more about the history and philosophy of our restaurant.">
        <!-- preload -->
        <link rel="preload" href="/static/css/styles.css" as="style">
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style">
        <!-- preload-->
        <link rel="stylesheet" href="/static/css/styles.css">
        <link rel="icon" type="image/x-icon" href="/static/img/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/static/sitemap.xml" >
        <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.webp">
        <link rel="icon" type="image/webp" sizes="32x32" href="/static/img/favicon-32x32.webp">
        <link rel="icon" type="image/webp" sizes="16x16" href="/static/img/favicon-16x16.webp">
        <link rel="manifest" href="/static/site.webmanifest">
        <ul class="nav_lst" >
            <li class="nav_elm">
                <a href="/index.php">
                    <img class="logo" src="/static/img/logo.svg" width="100" height="100"  alt="site logo" >
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
	      header("Cache-Control: max-age=31536000");
      	  header("Age: 100");
      ?>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h1 class="card-header" style="margin:0 auto;font-size: 4rem;">Who are we?</h1>
            <div class="card-bg">
                <img src="/static/img/Ceaser salad made from circut componants.webp" width="100" height="100"  alt='Ceaser salad made from circut componants' id="welcome-img" > 
            </div>
            <h2 style="margin:0 auto;font-size: 2rem;text-align: center;">  Satisfy your hunger with DeadBeef.</h2>
            <div class="info">
                <p style="text-align: center;">
                Welcome to Deadbeef! We are a trendy new restaurant that serves delicious, juicy cuts of meat that are sure to satisfy your carnivorous cravings. Our unique dishes are cooked to perfection and served with a variety of tasty sides. Our atmosphere is modern and inviting, with warm wood tones and pops of greenery. Take a look at some of the mouthwatering dishes our AI has generated for you. We can't wait to see you at Deadbeef!
                </p>
                <p>I am the author of this website, a cyber security student you can check my <a href="https://github.com/goussous0">Github</a> for the source code of this website</p>
            </div>
        </div>
 
    </body>
</html>