<?php
 include './showErros.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>C O N T A C T - U S</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="contact_us.css"/>
        <link rel="shortcut icon" href="imags/w1.png">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- header start -->
        <?php
        include './header_without_search.php';
        ?>
        <!-- header end -->
        <div style="width: 100%; height: 90vh;">

        
            <section id="contact" class="contact">

                <div class="contact-box">
                    <div class="c-heading">
                        <h1>Get In Touch</h1>
                        <p>Call Or Email Us Regarding Question Or Issues</p>
                    </div>
                    <div class="c-inputs">
                        <form>
                            <input type="text" placeholder="Full Name"/>	
                            <input type="email" placeholder="Example@gmail.com"/>
                            <textarea name="message" placeholder="Write Message"></textarea><br>
                            
                            <button class="button">SEND</button>
                        </form>
                    </div>

                </div>
                <div class="map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9039919377637!2d79.92527321418137!3d6.902084195012758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2572db42b813d%3A0xcd38b4ad7d6b4276!2sDepartment%20of%20Industries%20(Western%20Province)!5e0!3m2!1sen!2slk!4v1612098929540!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>></iframe>
                </div>
            </section>
        
</div>


        <!-- footer end -->  
        <?php
        include './footer.php';
        ?>
        <!-- footer end -->

        <!--query js start-->
        <script>
            $('nav ul li.btn span').click(function () {
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        </script>
        <!--query js end-->
    </body>
</html>




