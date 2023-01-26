<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Deadbeef | Menu </title>
        <!--https://www.w3schools.com/tags/tag_meta.asp-->
        <meta charset="UTF-8">
        <meta name="description" content="deadbeef">
        <meta name="keywords" content="Keycap, Soup, pizza, deadbeef">
        <meta name="author" content="Salem Goussous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- update page every 30 seconds -->
        <meta http-equiv="refresh" content="360"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <!--cloudflare fonts-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- link local css -->
        <link rel="stylesheet" href="/static/css/styles.css" media="screen" async>
        <!-- site manifest -->
        <link rel="manifest" href="/static/site.webmanifest">
        <!--adding tab icon -->
        <link rel="icon" type="image/x-icon" href="/static/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.webp">
        <link rel="icon" type="image/webp" sizes="32x32" href="/static/img/favicon-32x32.webp">
        <link rel="icon" type="image/webp" sizes="16x16" href="/static/img/favicon-16x16.webp">
        <!-- creating menu -->
        <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="/static/img/logo.svg" alt="website logo" >
                </a>
                <!--Burger menu for responsive desgin-->
                <a role="button" class="navbar-burger" aria-label="false" data-target="navbar_burger" id="show_menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbar_burger" class="navbar-menu nav-toggle" >
                <div class="navbar-start">
                    <a class="navbar-item" href="/account.php"> Account </a>
                    <a class="navbar-item" href="/menu.php"> Menu</a>
                    <a class="navbar-item" href="/about.php"> About Us</a>
                    <a class="navbar-item" href="/contact.php"> Contact Us</a>
                    <a class="navbar-item" href="/logout.php"> Logout</a>
                    <a class="navbar-item" href="/cart.php">
                        <div style="display:flex; position: relative;">
                            <div style="margin:auto; z-index:1; ">
                                <i class="fa fa-shopping-cart" style="font-size:2rem;"></i>
                            </div>
                            <div style="margin:auto; z-index:2; margin-top: 0;">
                                <p id="prod_count" style="background-color:red; border-radius:1rem;">0</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </head>
    <body>
        <?php
        require 'helpers.php';
        session_start();

        // if no user in session redirect to login 
        if (!$_SESSION['user'])
        {
            header('Location: account.php');
            die();
        }

        if ($_SERVER['REQUEST_METHOD'] === "POST")
        {
            // add or remove elemnet from array 
            $prod_name = $_POST['prod'];
            $prod_price = $_POST['price'];
            $op = $_POST['op'];
            
            // add or remove to array 
            if ($op === "add")
            {
                if (!$_SESSION['cart'][$prod_name])
                {
                    $_SESSION['cart'][$prod_name] = array(0=>1, 1=>$prod_price);
                    error_log($prod_name."  not found ");
                }
                else
                {
                    $_SESSION['cart'][$prod_name][0] +=1;
                }

            }
            else if($op === "del")
            {
                // already in the array
                if ($_SESSION['cart'][$prod_name])
                {
                    if ($_SESSION['cart'][$prod_name][0] > 0)
                    {
                        $_SESSION['cart'][$prod_name][0] -=1;
                    }
                }
            }
        
        }

        foreach($_SESSION['cart'] as $key=>$val)
        {
            error_log( $key ."   ". $val[0] ."   ". $val[1]);
        }

        ?>



        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => {
                // add listener to the burger button 
                document.getElementById('show_menu').addEventListener('click', function() {
                    // list the menu using toggle function
                    document.getElementById('navbar_burger').classList.toggle('is-active');
                })
            });


            var items = [];
            var prices = [];

            function add(id)
            {
                let elm = document.getElementById(id);
                let prod_name = elm.childNodes[3].innerText;
                let prod_price = elm.childNodes[9].innerText.split(": ")[1].replace("$", "");
                let count = document.getElementById('prod_count');
                items.push(prod_name);
                prices.push(prod_price);
                // console.info(prod_name);
                // console.info(prod_price);
                // console.log(items);
                // console.log(prices);
                var http = new XMLHttpRequest();
                var url = "menu.php";
                var params = "prod="+prod_name+"&price="+prod_price+"&op=add";
                http.open('POST', url, false);     
                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http.send(params);
                count.innerHTML = items.length;
            }
            function del(id)
            {
                let elm = document.getElementById(id);
                let prod_name = elm.childNodes[3].innerText;
                let prod_price = elm.childNodes[9].innerText.split(": ")[1].replace("$", "");
                let count = document.getElementById('prod_count');


                
                let idx1 = items.indexOf(prod_name);
                let idx2 = prices.indexOf(prod_price);

                if (idx1!= -1 && idx2 != -1)
                {
                    items.splice(idx1, 1);
                    prices.splice(idx2, 1);
                }

                // console.info(prod_name);
                // console.info(prod_price);
                // console.log(items);
                // console.log(prices);
                var http = new XMLHttpRequest();
                var url = "menu.php";
                var params = "prod="+prod_name+"&price="+prod_price+"&op=del";
                http.open('POST', url, false);     
                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http.send(params);
                count.innerHTML = items.length;

            }




        </script>
        <!--background-->
        <!--
            https://www.shapedivider.app/
        -->
        <div class="custom-shape-divider-top-1674421796">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <!--actual content-->
        <section > 
            <div class="card" style="background-color:  transparent; box-shadow: 0 0;">
                <header class="card-header" style="box-shadow: 0 0;">
                    <p class="title is-2" style="text-align: center; margin: auto;">
                        Menu
                    </p>
                </header>
                <div class="grid" style="margin-bottom:30vh;">
                    <div class="grid-item" id="1">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> Key cap soup </p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2022-12-22 16.20.43 - A 3D render a soup dish made with keyboad key caps in the soup .webp" alt="a soup dish made with keyboad key caps in the soup" >
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>

                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="1" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="1" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="2">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> ethernet spaghetti</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2022-12-22 16.26.16 - A 3D render of ethernet cables themed spagetti dish .webp" alt="A 3D render of ethernet cables themed spagetti dish">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="2" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="2" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="3">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> bruschetta </p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2023-01-05 19.23.07 - a pizza that look like a CPU chip, digital art.webp" alt="a pizza that look like a CPU chip">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="3" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="3" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="4">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> Transistor sushi</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2022-12-22 16.38.09 - Transistor tubes themed Sushi dish, digital art.webp" alt="Transistor tubes themed Sushi dish">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="4" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="4" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="5">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> CPU pizza</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2023-01-05 19.23.12 - a pizza that look like a CPU chip, digital art.webp" alt="a pizza that look like a CPU chip">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>                        
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="5" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="5" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="6">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> Key Cap Soup</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2022-12-22 16.20.45 - A 3D render a soup dish made with keyboad key caps in the soup .webp" alt="a pizza that look like a CPU chip" >
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="6" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="6" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="7">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> Hot dog</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2023-01-06 11.41.52 - A hotdog with computer DDR4 DIMMS stick instead of the hotdog itself, digital art .webp" alt="hotdog with computer DDR4 DIMMS stick instead of the hotdog itself">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="7" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="7" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item" id="8">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> white chocolate MB</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic"  src="/static/img/DALL·E 2022-12-22 16.30.12 - A computer motherboard made from white chocolate, digital art.webp" alt="white chocolate motherboard">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="8" onclick="add(this.value)">
                                    <label class="label">+</label >
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="8" onclick="del(this.value)"> 
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="9">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> LED spaghetti</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic" src="/static/img/DALL·E 2022-12-22 16.26.20 - A 3D render of ethernet cables themed spagetti dish .webp" alt="LED spagetti " >
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="9" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="9" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="10">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> Transistor soup</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic"  src="/static/img/DALL·E 2022-12-22 16.27.30 - A 3D render of a pizza with electrical capacitors as the topping, digital art .webp" alt="Pizza with transistor caps">
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="10" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="10" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item" id="11">
                        <!-- header -->
                        <div class="grid-item-header">
                            <p class="title is-4" style="margin-bottom:0;"> CPU soup</p>
                        </div>
                        <!-- body -->
                        <div class="grid-item-body">
                            <img class="grid-item-pic"  src="/static/img/DALL·E 2022-12-22 16.12.59 - a soup made with transistors .webp" alt="a soup made with transistors" >
                        </div>
                        <p class="title is-6">
                            Price: 10$
                        </p>
                        <!-- footer -->
                        <div class="grid-item-footer">
                            <div class="ctl">
                                <button class="button is-primary" value="11" onclick="add(this.value)">
                                    <label class="label">+</label>
                                </button>
                            </div>
                            <div class="ctl">
                                <button class="button is-primary" value="11" onclick="del(this.value)">
                                    <label class="label">-</label>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <footer class="footer">
            <!--https://alvarotrigo.com/blog/website-footers/-->
            <div class="container">
                <div class="footer-col">
                <h4>company</h4>
                    <ul>
                        <li><a  class="footer-elm" href="/about.php">about us</a></li>
                        <li><a  class="footer-elm" href="/about.php">our services</a></li>
                        <li><a  class="footer-elm" href="/about.php">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                <h4>shop</h4>
                    <ul>
                        <li><a class="footer-elm" href="/cart.php">Cart</a></li>
                        <li><a class="footer-elm" href="/menu.php">Menu</a></li>
                        <li><a class="footer-elm" href="/account.php">Account</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                <h4>follow us</h4>
                    <div class="social-links">
                        <a href="http://facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="http://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1674422959">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div> 
        </footer>
    </body>
</html>
