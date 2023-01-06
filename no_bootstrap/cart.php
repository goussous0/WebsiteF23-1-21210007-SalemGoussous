<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="/static/css/styles.css">

        <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon-16x16.png">
        <ul class="nav_lst" >
            <li class="nav_elm">
                <img class="logo" src="/static/img/logo.svg">
            </li>
            <li class="nav_elm"><a class="item" href="/about.php">About Us</a></li>
            <li class="nav_elm"><a class="item" href="/menu.php">Menu</a></li>
            <li class="nav_elm"><a class="item" href="/cart.php">Cart</a></li>
            <li class="nav_elm"><a class="item" href="/contact.php">Contact Us</a></li>
        </ul>  
    </head>
    <body>
        <div class="card mt-1"> <!-- mt stands for margin top with 1rem-->
            <h4 class="card-header" style="margin:0 auto;font-size: 5rem;">Cart</h4>
            <div id="bdy" style="display: flex;">
                <div id="cart">

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
        </div>
    </body>
</html>