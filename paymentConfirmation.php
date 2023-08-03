<?php
include './showErros.php';
session_start();
include './dbConnection.php';
$orderID = "";
if (isset($_SESSION['current_invoice_id'])) {
    $orderID = $_SESSION['current_invoice_id'];
}
if ($orderID == "") {
    header("Location: ./cart.php?msg=Cart Requre to process payment");
    die();
}

$user_ID = "";
if (isset($_SESSION['userid'])) {
    $user_ID = $_SESSION['userid'];
}
if ($user_ID === "") {
    header("Location: ./cart.php?msg=Please Login or Register before Continue");
    die();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>P A Y M E N T - C O N F I R M A T I O N</title>
        <link rel="shortcut icon" href="imags/w1.png">

    </head>
    <body>
<?php include './header_without_search.php'; ?>

        <div class="all-div" align="center">
            <br><br><br>
            <h2 style="color: black;">Order Confirmation Page</h2><br>
            <div class="details-div" style="width: 100%; height: 60vh;">
                <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
                    <table>
                        <tr>
                            <td>
                                <div class="order-det-div">
                                    <input type="hidden" name="merchant_id" value="1216537"> 
                                    <!-- Replace your Merchant ID -->
                                    <input type="hidden" name="return_url" value="http://localhost/laksha/return.php">
                                    <input type="hidden" name="cancel_url" value="http://localhost/laksha/cancel.php">
                                    <input type="hidden" name="notify_url" value="http://localhost/laksha/notify_url.php">  

                                    <input style="color: black;" type="hidden" name="order_id" value="<?php echo $orderID; ?>">  

                                    <h2 style="color: black;">Order Details </h2>
                                    <br>
                                        <?php
                                        $paymentItems = "";
                                        $items = "select * from invoice_items i join products p on i.id_product = p.idproducts where i.id_invoice = '" . $orderID . "'";
                                        $result = $connection->query($items);

                                        $total = 0;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                ?>
                                            <label style="color: black;">Item Name : <?php
                                                $total = $total + ($row['line_unit_price'] * $row['line_qty']);
                                                $paymentItems = $paymentItems . ", " . $row['productName'] . ":" . $row['line_qty'];
                                                echo $row['productName']
                                                ?></label><br>
        <?php
    }
}
?>

                                    <label style="color: black;">Currency  : USD </label><br>
                                    <label style="color: black;">Amount    : <?php echo $total; ?></label><br>
                                    <input style="color: black;" type="hidden" name="items" value="<?php echo $paymentItems; ?>"><br> <br>
                                    <input style="color: black;" type="hidden" name="currency" value="USD">
                                    <input style="color: black;" type="hidden" name="amount"  value="<?php echo $total; ?>"> 
                                </div>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <div class="customer-det-div">
                                    <h2 style="color: black;">Customer Details</h2>

<?php
$query2 = "select * from users where idusers = '" . $user_ID . "'";
$resultUser = $connection->query($query2);
$record = $resultUser->fetch_assoc();
?>

                                    <table border="0"> 
                                        <tr>
                                            <td style="color: black;">Order Id  : </td>
                                            <td style="color: black;"><?php echo $orderID; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">First Name : </td>
                                            <td style="color: black;"><?php echo $record['fname'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">Last Name : </td>
                                            <td style="color: black;"><?php echo $record['lname'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">Customer Email: </td>
                                            <td style="color: black;"><?php echo $record['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">Contact Number: </td>
                                            <td style="color: black;"><?php echo $record['number'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">Address : </td>
                                            <td style="color: black;"><?php echo $record['address'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: black;">Country : </td>
                                            <td style="color: black;">Sri Lanka</td>
                                        </tr>

                                    </table> </div></td>
                        </tr></table>


                    <input type="hidden" name="first_name" value="<?php echo $record['fname'] ?>">
                    <input type="hidden" name="last_name" value="<?php echo $record['lname'] ?>">
                    <input type="hidden" name="email" value="<?php echo $record['email'] ?>">
                    <input type="hidden" name="phone" value="<?php echo $record['number'] ?>">
                    <input type="hidden" name="address" value="<?php echo $record['address'] ?>">
                    <input type="hidden" name="city" value="<?php echo $record['city'] ?>"><br> 
                    <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                    <input style="width: 130; height:35;font-weight: bold; color: black;" type="submit" value="Payment">  
                    <br><br>
                </form>
            </div>
        </div>


<?php
include './footer.php';
?>
    </body>
</html>
