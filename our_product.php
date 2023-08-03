<?php
include './showErros.php';
include './dbConnection.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>O U R - P R O D U C T S</title>
        <link rel="stylesheet" type="text/css" href="our_product.css">
<link rel="shortcut icon" href="imags/w1.png">

        <?php
        $keyword = "";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            ?>

        <?php } ?>

    </head>
    <body>

        <?php
        include './header_without_search.php';
        ?>
        
        <br>
        
        <div class="bar">
            <form class="bar_form">
                        <!--li class="search-icon">
                            <input type="text" placeholder="Search" name="keyword" id="keyword" /> &nbsp;
                            <button type="submit" name="search"><i class="fas fa-search"></i></button>
                        </li-->
                        <!--li class="search-icon"-->
                        <input style="color: black;" type="text" name="keyword" id="keyword" placeholder="Search" class="bar_form_input">
                            <label class="icon">
                                <button style="color: black;" class="bar_form_input_btn" type="submit" name="search"> <i style="color: black;" class="fas fa-search"></i></button>
                            </label>
                        <!--/li-->
                    </form>
            </div>

        <!--form action="our_product.php" method="get" style="color: black;">
            <div class="bar">
                <input type="text" placeholder="Search" name="keyword" id="keyword" /> &nbsp;
                <button type="submit" name="search"><i class="fas fa-search"></i></button>
            </div>

        </form>


        <!-- slide show start-->
        <?php
        $query = "SELECT * FROM products where productName like '%" . $keyword . "%'";
        $result = $connection->query($query);
        while ($row = $result->fetch_assoc()) {
            ?>




        <center>

            <!-- item --> 
            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a"> 
                    <div class="box">
                        <div class="slide-img">
                            <img src="imags/<?php echo $row["image_url"]; ?>" alt="">
                            <div class="buy">
                                <a class="btn" href="product1.php?pid=<?php echo $row["idproducts"]; ?>">Buy Now</a>                                    
                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="type">
                                <a href="product1.php"><?php echo $row["productName"]; ?></a>
                                <span><?php echo $row["productDescription"]; ?></span>
                            </div>
                            <a href="product1.php" class="price">$<?php echo $row["sellPrice"]; ?></a>
                        </div>
                    </div> 
                </li>
            </ul>

        </center>

        <?php
    }
    ?>


    <!-- slide show end-->


    <?php
    include './footer.php';
    ?>


    <!--icon, other animation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <!--menu drop-->
    <script>
        $('nav ul li.colour span').click(function () {
            $('nav ul div.items').toggleClass("show");
            $('nav ul li.colour span').toggleClass("show");
        });
    </script>

</body>
</html>
