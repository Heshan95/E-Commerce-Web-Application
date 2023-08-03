<?php
include './showErros.php';
session_start();
include './dbConnection.php';
$orderID = ""; 
if(isset($_GET['order_id'])){$orderID  =$_GET['order_id'];}
if($orderID==""){header("Location: ./cart.php?msg=Cart Requre to process payment");die();}
$user_ID = ""; 
if(isset($_SESSION['userid'])){$user_ID  = $_SESSION['userid'];}
if($user_ID==""){header("Location: ./cart.php?msg=Please Login or Register before Continue");die();}

//have to do this part at notify_url page
   $query = "Update invoice set status = '1' where id_invoice = '".$orderID."'";
         if($connection->query($query)===TRUE){
//              echo "<h2>Payment Processed Successfully !</h2>";
              if(isset($_SESSION['cart'])){
                  $_SESSION['cart'] = null;
              $_SESSION['current_invoice_id'] = null;
              }
         }
//notify_url page part completed

 
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>I N V O I C E</title>
        <link rel="shortcut icon" href="imags/w1.png">
        <style> @media print {.no_print{
            display: none;
}} </style>
    </head>
    <body> 
        <div class="no_print">
        <?php include './header_without_search.php'; ?> 
        </div><br>
        &nbsp; &nbsp; &nbsp; &nbsp;
        <input style="color: #000; padding: 4px 4px; " type="button" onclick="window.print()" value="Print" class="no_print"/>
        <div align="center">
            <h2 style="color: #000;">Order Placed Successfully !</h2>
            
            <div width="400">
                          <h2 style="color: #000;">Customer Details</h2>
    
    <?php 
            $query2 = "select * from users where idusers = '".$user_ID."'";
            $resultUser = $connection->query($query2);
           $record = $resultUser->fetch_assoc();
    ?>
    
    <table border="0"> 
            <tr>
                <td style="color: #000;">Order Id : </td>
                <td style="color: #000;"><?php echo $orderID;?></td>
            </tr>
            <tr>
                <td style="color: #000;">First Name : </td>
                <td style="color: #000;"><?php echo $record['fname']?></td>
            </tr>
            <tr>
                <td style="color: #000;">Last Name : </td>
                <td style="color: #000;"><?php echo $record['lname']?></td>
            </tr>
            <tr>
                <td style="color: #000;">Customer Email: </td>
                <td style="color: #000;"><?php echo $record['email']?></td>
            </tr>
            <tr>
                <td style="color: #000;">Contact Number: </td>
                <td style="color: #000;"><?php echo $record['number']?></td>
            </tr>
            <tr>
                <td style="color: #000;">Address : </td>
                <td style="color: #000;"><?php echo $record['address']?></td>
            </tr>
            <tr>
                <td style="color: #000;">Country : </td>
                <td style="color: #000;">Sri Lanka</td>
            </tr>
           
    </table> </td> 
                <br style="color: #000;">
                <h2 style="color: #000;">Product Details</h2>
            </div>
            
            <table>
                <thead>
                <tr>
                    <td></td>
                    <td><h4 style="color: #000;">Product Name</h4></td> 
                    <td><h4 style="color: #000;">Qty</h4></td> &nbsp;&nbsp;&nbsp;
                    <td><h4 style="color: #000;">Amount</h4></td> 
                </tr>
                </thead>
                <tbody>
            <?php
            $productList = "SELECT * FROM invoice i join  invoice_items ii on i.id_invoice = ii.id_invoice
 join products p on ii.id_product = p.idproducts
where i.id_invoice = '".$orderID."' ";
            
            $result = $connection->query($productList);
            $total = 0;
            
                if($result->num_rows>0){
       while($row = $result->fetch_assoc()){
           $total =$total + ($row['line_unit_price']*$row['line_qty']);
            ?>
             <tr>
                     
                 <td style="color: #000;"><img  src="imags/<?php echo $row['image_url'];?>" width="90" height="90" /> </td> 
                        <td style="color: #000;"><?php echo $row['productName'];?></td> &nbsp;&nbsp;&nbsp;
                        <td style="color: #000;"><?php echo $row['line_qty'];?></td> &nbsp;&nbsp;&nbsp;
                        <td style="color: #000;"><?php echo ($row['line_unit_price']*$row['line_qty']);?></td>  
                    </tr>    
            <?php
                }
                
       }
            ?>
                </tbody>
            </table>
            <h2 style="color: #000;">Total : USD <?php echo $total?></h2>
            
        </div> <br>
        <div class="no_print">
        <?php include './footer.php'; ?>
            </div>
    </body>
</html>
