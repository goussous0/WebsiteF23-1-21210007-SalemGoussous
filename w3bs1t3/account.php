<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- google analytics -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MKPJEK5TDV"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-MKPJEK5TDV');
        </script>
        <title> Deadbeef | Account </title>
        <!--https://www.w3schools.com/tags/tag_meta.asp-->
        <meta charset="UTF-8">
        <meta name="description" content="deadbeef">
        <meta name="keywords" content="you have, we have, menu, restaurant,ingredients,food,account,have you,you have to,i have you,you have it,have at you,having you,have you have,to have you,you have you,have are you,home our, deadbeef">
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
        <!-- site map -->
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/static/sitemap.xml" >
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
                    <a class="navbar-item" href="contact.php"> Contact Us</a>
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
                require "helpers.php" ;                
                session_start();
                if ($_SERVER['REQUEST_METHOD'] === "POST")
                {
                    $type = $_POST['submit_btn'];

                    if ($type === "signup")
                    {
                        error_log("signup");
                        // add user  to the database 
                        $usr = $_POST['usr'];
                        $pass1 = $_POST['pass1'];
                        $pass2 = $_POST['pass2'];

                        if ($pass1 != $pass2)
                        {
                            echo "<script>alert('Password mismatch');</script>";
                        }

                        if (check_user($usr))
                        {
                            // add user to db 
                            add_user($usr,$pass1);
                        }
                        else
                        {
                            echo "<script>alert('Username taken');</script>";
                        }
                        error_log($usr.$pass1.$pass2);
                    }
                    else if ($type === "login")
                    {
                        //error_log("login");
                        // authenticate user 
                        $usr1 = $_POST['usr1'];
                        $pass= $_POST['pass'];
                        //error_log(">>>".$usr1.$pass);

                        if (check_user($usr1) && verify_user($usr1, $pass))
                        {
                            // add username to session 
                            $_SESSION['user'] = $usr1;
                            $_SESSION['cart'] = array();
                            // redirect to the menu 
                            header("Location: menu.php");
                            die();
                        }
                        else
                        {
                            echo "<script>alert('Wrong username or password');</script>";   
                        }
                    }
                }
                ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => {
                // add listener to the burger button 
                document.getElementById('show_menu').addEventListener('click', function() {
                    // list the menu using toggle function
                    document.getElementById('navbar_burger').classList.toggle('is-active');
                })
            
                // add login and sign up switch function
                let submit_btn = document.getElementById("submit_btn");
                let login_form = document.getElementById('login_form');
                let signup_form = document.getElementById('signup_form');

                const login_switch = document.getElementById('login_switch');
                const signup_switch = document.getElementById('signup_switch');
                login_switch.addEventListener('click', function(e){
                    
                    signup_form.style.display = 'none';
                    submit_btn.value = "login";

                    login_form.style.display = 'contents';

                });
                signup_switch.addEventListener('click', function(e){
                    
                    login_form.style.display = 'none';
                    submit_btn.value = "signup";

                    signup_form.style.display = 'contents';

                });
            });
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
            <form action="account.php" method="POST" novalidate>
                <!-- login in page -->
                <div class="card" style="background-color:  transparent; box-shadow: 0 0;" id="login_form">
                    <header class="card-header" style="box-shadow: 0 0;">
                        <p class="title is-2" style="text-align: center; margin: auto;" >
                            Log In
                        </p>
                    </header>

                    <div class="field">
                        <label class="label">Username</Label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Enter your username" name="usr1" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Pasword</Label>
                        <div class="control">
                            <input class="input" type="password" placeholder="Enter your password" name="pass" required>
                        </div>
                    </div>
                </div>
                <!-- Sign up page -->
                <div class="card" style="background-color:  transparent; box-shadow: 0 0; display:none;" id="signup_form">
                    <header class="card-header" style="box-shadow: 0 0;">
                        <p class="title is-2" style="text-align: center; margin: auto;" >
                            Sign Up
                        </p>
                    </header>
                    <div class="field">
                        <label class="label">Username</Label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Enter your username" name="usr" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Pasword</Label>
                        <div class="control">
                            <input class="input" type="password" placeholder="Enter your password" name="pass1" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Pasword again</Label>
                        <div class="control">
                            <input class="input" type="password" placeholder="Enter your password again" name="pass2" required>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <center>
                        <button type="submit" id="submit_btn" name="submit_btn" class="button is-primary" style="padding: 10px;margin:10px;" value="login">Submit</button>
                    </center>
                </div>
                <center>
                    <a href="#" id="login_switch"> Log In </a>
                    <a href="#" id="signup_switch"> Sign Up </a>
                </center>
            </form>
            <div class="card-image">
                <div class="image">
                    <img id="index_pic" src="/static/img/DALL·E 2022-12-22 16.41.52 - A salad made from computer parts, digital art .webp" alt="Placeholder image">
                <div>
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
