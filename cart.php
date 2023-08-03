<?php
include './showErros.php';
session_start();
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
        <meta charset="UTF-8">
        <title>S H O P P I N G - C A R T</title>  
        <link rel="shortcut icon" href="imags/w1.png">
        
    </head>
    <body>
        <?php
        include './header_without_search.php';
        
        ?><br>
        <div align="center" style=" width: 100%; height: auto; ">
            <h2 style="color: #000;">Shopping Cart</h2>
            <table border="0" style="width: 80%; height: 40vh;">
                <?php
                
                $totalAmu = 0.00;
                $cart;
                $isProducts = FALSE;
                
                if(isset($_SESSION['cart'])){
                                $cart = $_SESSION['cart'];
                                foreach ($cart as $cartItem) {
                                                              
                $producQuery = "SELECT * FROM `products` WHERE `idproducts` = '".$cartItem[0]."' ";
                $result = $connection->query($producQuery);
                if($result->num_rows > 0){
                   $row = $result->fetch_assoc(); 
                 $rowamu = ($row['sellPrice'] * $cartItem[1]);
                 $totalAmu = $totalAmu + $rowamu;
                 $isProducts = TRUE;  
                 
                ?>
                <tr>
                    <td style="color: #000; padding-left: 2%; padding-right: 2%;"><?php echo $cartItem[0]; ?></td>
                    <td><img src="<?php echo "imags/".$row['image_url']; ?>" width="150" height="200"/></td>
                    <td style="color: #000;padding-left: 2%; padding-right: 2%;"><?php echo $row['productName']; ?> </td>
                    <td style="color: #000;padding-left: 2%; padding-right: 2%;"><?php echo $row['productDescription']; ?> </td>
                    <td style="color: #000;padding-left: 2%; padding-right: 2%;"><?php echo $row['sellPrice']; ?> </td>
                    <td style="color: #000;padding-left: 2%; padding-right: 2%;"><?php echo $cartItem[1]; ?> </td>
                    <td style="color: #000;padding-left: 2%; padding-right: 2%;"><?php echo ($rowamu); ?></td>
                    <!--td><!?php echo $row['sell_price'] * $cartItem[1]; ?> /></td-->
                    <td><a href="removefromCart.php?pid=<?php echo $cartItem[0]; ?>">
                            <input type="button" value="Remove" style="background-color: crimson; font-size: medium; padding: 4px 4px; color: #ffffff; border-radius: 5px; border-style: none; "></a></td>
                </tr>
                <?php
                }
                }
                } if(!$isProducts) {
                    ?>
                    <span style="color: red;"><?php echo 'Cart Empty !';?></span>
                        <?php
                }
                ?>
            </table>
            <br>
            <label style="color: #000; padding-left: 2%; padding-right: 2%;">Total : $ <?php echo $totalAmu ?></label>
            <a href="checkOut.php"><input type="button" name="checkout" value="checkout" style="background-color: #d9d9d9; font-size: medium; padding: 4px 4px; color: #000; border-radius: 5px; border-style: solid;" ></a>
        </div>
        <br>
        <?php
                include './footer.php';
        
        ?>
    </body>
</html>
