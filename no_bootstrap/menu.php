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
        <title>DeadBeef | Menu</title>
        <base href="/"> 
        <meta charset="UTF-8">
        <meta name="keywords" content="Menu, Price, Cart">
        <meta name="author" content="goussous0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Browse our extensive menu of delicious dishes and drinks.">
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
        if (!isset($_SESSION['USER']) || !$_SESSION['USER']) {
            header('Location: login.php');
            die();
        }
      ?>
        <form>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h1 class="card-header" style="margin:0 auto;font-size: 4rem;">Menu</h1>
            <div class="grid-lst">
                <div class="grid-elm">
                        <h4 class="card-header">CPU soup</h4>
                        <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.12.59 - a soup made with transistors .webp" alt="a soup made with transistors" id="menu-item" >
                        <div class="footer" >
                            <h6 class="info" style="float: left;"> Price: 10$ </h6>
                            <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                            <button name='add' class="add-button" value="10"> ➕</button>
                            <button name='remove' class="remove-button" value="10"> ➖</button>
                        </div>
                    </div>
                    <div class="grid-elm">
                    <h4 class="card-header">KeyCap soup</h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.20.43 - A 3D render a soup dish made with keyboad key caps in the soup .webp" alt="a soup dish made with keyboad key caps in the soup" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 10$ </h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Ethernet spaghetti</h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.26.16 - A 3D render of ethernet cables themed spagetti dish .webp" alt="A 3D render of ethernet cables themed spagetti dish" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 15$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Bruschetta</h4>
                    <img class="card-bg" src="/static/img/DALL·E 2023-01-05 19.23.07 - a pizza that look like a CPU chip, digital art.webp" alt="a pizza that look like a CPU chip" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 10$ </h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Transistor Sushi </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.38.09 - Transistor tubes themed Sushi dish, digital art.webp" alt="Transistor tubes themed Sushi dish"id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 25$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>

                <div class="grid-elm">
                    <h4 class="card-header">Circuit Pizza </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2023-01-05 19.23.18 - a pizza that look like a CPU chip, digital art.webp" alt="a pizza that look like a CPU chip" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 20$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Electronic Pizza </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2023-01-05 19.23.12 - a pizza that look like a CPU chip, digital art.webp" alt="a pizza that look like a CPU chip" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 25$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">KeyCap soup </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.20.45 - A 3D render a soup dish made with keyboad key caps in the soup .webp" alt="a pizza that look like a CPU chip" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 12$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Hotdog</h4>
                    <img class="card-bg" src="/static/img/DALL·E 2023-01-06 11.41.52 - A hotdog with computer DDR4 DIMMS stick instead of the hotdog itself, digital art .webp" alt="hotdog with computer DDR4 DIMMS stick instead of the hotdog itself" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 17$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Mainboard </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.30.12 - A computer motherboard made from white chocolate, digital art.webp" alt="white chocolate motherboard" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 8$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">LED spaghetti </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.26.20 - A 3D render of ethernet cables themed spagetti dish .webp" alt="LED spagetti " id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 13$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
                <div class="grid-elm">
                    <h4 class="card-header">Transistor Pizza </h4>
                    <img class="card-bg" src="/static/img/DALL·E 2022-12-22 16.27.30 - A 3D render of a pizza with electrical capacitors as the topping, digital art .webp" alt="Pizza with transistor caps" id="menu-item" >
                    <div class="footer" >
                        <h6 class="info" style="float: left;"> Price: 27$</h6>
                        <!-- adds or removes items from js array -->
                            <button name='CPUSoup' style="display:none;" value="cpu_soup"></button>
                        <button class="add-button"> ➕</button>
                        <button class="remove-button"> ➖</button>
                    </div>
                </div>
            </div>
            <h2 style="margin:0 auto;font-size: 2rem;text-align: center;">  Satisfy your hunger with DeadBeef.</h2>
        </div> 
        </form>
    </body>
</html>


