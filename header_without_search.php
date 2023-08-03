<?php
include './showErros.php';
include './dbConnection.php';

?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="header_footer.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>
    <body>

        <?php
        if (isset($_SESSION["is_login"]) && ($_SESSION["is_login"] == true)) {
            ?>

            <nav>
                <ul>
                    <li class="logo">Ceylon LAKSHA</li>
                    <li class="btn"><span class="fas fa-bars"></span></li>
                    <div class="items">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our_product.php">Our Products</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="cart.php"><img src="img/shopping-cart.png"></a></li>
                        <li><a href="admin_login_logout.php"><img src="img/logout_mini.png"></a></li>
                    </div>

                </ul>
            </nav>

            <?php
        } else {
            ?>

            <nav>
                <ul>
                    <li class="logo">Ceylon LAKSHA</li>
                    <li class="btn"><span class="fas fa-bars"></span></li>
                    <div class="items">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="our_product.php">Our Products</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="cart.php"><img src="img/shopping-cart.png"></a></li>
                        <li><a href="admin_login.php" style="font-size: 0.8em;">Log In</a></li>|
                        <li><a href="admin_register.php" style="font-size: 0.8em;">Register</a></li>
                    </div>

                </ul>
            </nav>

            <?php
        }
        ?>
    </body>
</html>