  <?php
  include './showErros.php';
include './dbConnection.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>P R O D U C T</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="product1.css" rel="stylesheet">
        <link rel="shortcut icon" href="imags/w1.png">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <?php
        $pid = $_GET['pid'];
        ?>
    </head>
    <body>
        <!--Navigation bar start -->
        <?php
        include './header.php';
        
        ?>
        <!--Navigation bar end -->

        <?php
        $query = "SELECT * FROM products WHERE idproducts = '" . $pid . "'";
        $result = $connection->query($query);
        while ($row = $result->fetch_assoc()) {
            ?>
            <!--card start -->
            <div class="card-div">
                <div class="card">
                    <div class="circle"></div>
                    <div class="content">
                        <h2><?php echo $row["productName"]; ?></h2>
                        <p><?php echo $row["productDescription"]; ?></p>
                        <h3 class="price">$<?php echo $row["sellPrice"]; ?></h3>


                        <a class="btn" href="addtoCart.php?pid=<?php echo $row["idproducts"]; ?>">Buy Now</a>

                    </div>
                    <img src="imags/<?php echo $row["image_url"]; ?>">
                </div>
            </div>
<?php } ?>
        <!--card end -->


        <!--footer start -->
<?php
include './footer.php';
?>

        <!--footer end -->

        <!--menu drop-->
        <script>
            $('nav ul li.btn span').click(function () {
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        </script>
    </body>
</html>


