<?php
include './showErros.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>A D M I N - H O M E</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="admin_home.css">
        <link rel="shortcut icon" href="img/unauthorized-person.png">

    </head>
    <body>
        <!--Navigation bar start -->
        <?php
        include './admin_header.php';
        ?>
        <!--Navigation bar end -->


        <!-- Image hover start --->
        <div class="d-middle">
            <div class="container">
                <div class="hexagon"><a href="admin_userManager.php">
                        <div class="shape">
                            <img src="img/user.jpg">
                            <div class="content1">
                                <h2>User Manager</h2>
                            </div>
                        </div></a>
                </div>
                <div class="hexagon"><a href="admin_productManager.php">
                        <div class="shape">
                            <img src="img/order.jpg">
                            <div class="content1">
                                <h2>Place Order</h2>
                            </div>
                        </div></a>
                </div>
                <div class="hexagon"><a href="admin_orderManager.php">
                        <div class="shape">
                            <img src="img/register.jpg">
                            <div class="content1">
                                <h2>Product Register</h2>
                            </div>
                        </div></a>
                </div>
            </div>
        </div>

        <!-- Image hover end --->

        <!--footer start -->
        <?php
        include './footer.php';
        ?>
        <!--footer end -->



    </body>
</html>
