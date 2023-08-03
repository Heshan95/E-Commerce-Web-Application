<?php
include './showErros.php';
?><!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="admin_header.css">
        <link rel="shortcut icon" href="img/banner.jpg">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   
    </head>
    <body>

        <div class="navigation">
            <nav>
                <ul>
                    <li class="logo">Ceylon LAKSHA</li>
                    <li class="btn"><span class="fas fa-bars"></span></li>
                    <div class="items">
                        <li><a href="admin_home.php">Home</a></li>                       
                        <li><a href="admin_userManager.php">User Manager</a></li>
                        <li><a href="admin_productManager.php">Place Order</a></li>
                        <li><a href="admin_orderManager.php">Product Register</a></li>
                        <li><a href="admin_login_logout.php"><img src="img/logout_mini.png"></a></li>
                    </div>

                </ul>
            </nav>
        </div>
        <!--Navigation bar end -->
        
         <!--menu drop-->
         <script>
            $('nav ul li.btn span').click(function () {
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        </script>
    </body>
</html>