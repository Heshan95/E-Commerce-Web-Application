<?php
include './showErros.php';
session_start();
include './dbConnection.php';

$user_ID = "";
if (isset($_SESSION['userid'])) {
    $user_ID = $_SESSION['userid'];
}

$is_login = FALSE;
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
//if ( $is_login === ''){    echo "<script> alert('Please check your Registeration  ');location='user_register.php' </script>"; }

$fname = "";
$lname = "";
$address = "";
$city = "";
$contactNo = "";
$email = "";
if ($is_login) {
    $query2 = "select * from users where idusers = '" . $user_ID . "'";
    $resultUser = $connection->query($query2);
    $record = $resultUser->fetch_assoc();
    $fname = $record['fname'];
    $lname = $record['lname'];
    $email = $record['email'];
    $contactNo = $record['number'];
    $address = $record['address'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>C H E C K O U T - F O R M</title>
          <link rel="stylesheet" href="footer.css">
          <link rel="shortcut icon" href="imags/w1.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <?php include './header_without_search.php'; ?>
        <br>
        <div align="center"> 
            <h2 style="color: #000;">Checkout</h2> 
            <table style="width: 80%; height: 100vh;" > 
                <b style="color: #000;">Billing and Delivery Details</b>
                <div class="backgd">
                    <div class="col-md-4 container bg-default" >
                        <form method="post" action="checkoutAction.php" >

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label style="color: #000;" for="fname" class="lbcls">First Name</label>
                                    <input type="text" name="fname" placeholder="First Name" id="fname" class="form-control"  value="<?php echo $fname; ?>">
                                    <div style="color: red;" class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>

                            </div>

                             <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label style="color: #000;" for="lname" class="lbcls">Last Name</label>
                                    <input type="text" name="lname" placeholder="Last Name" id="lname" class="form-control"  value="<?php echo $lname; ?>">
                                    <div style="color: red;;" class="invalid-feedback">
                                        Valid Last name is required.
                                    </div>
                                </div>

                            </div>
                            
                            <div class="form-group">

                            </div>

                            <div class="form-group">
                                <label style="color: #000;" for="email" class="lbcls">Email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label style="color: #000;" for="adress" class="lbcls">Address</label>
                                <input type="text" name="address" id="address" class="form-control" value="<?php echo $address; ?>" required>
                                <div style="color: red;" style="color: red;" class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>




                            <div class="form-group">
                                <label style="color: #000;" for="adress" class="lbcls">Contact Number</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $contactNo; ?>" required>
                                <div style="color: red;" class="invalid-feedback">
                                    Please enter your Contact Number.
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4 form-group">
                                    <label style="color: #000;" for="city" class="lbcls">City</label>
                                    <input type="text" name="city" id="city" class="form-control" value="<?php echo $city; ?>">
                                    <div style="color: red;" class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                            </div>


                            <?php if (!$is_login) { ?>           

                                if ( $is_login === ''){    echo "<script> alert('Please login to proceed !  ');location = 'login.php'</script>"; }

                            <?php } ?>

                            <div class="row">
                                <div class="col-md-4 form-group">

                                    <a href="paymentConfirmation.php"> <input style="padding: 4px 4px; color: black; background-color: #d9d9d9; width: auto; text-decoration: none; " type="submit" name="submit"  id="country" class="form-control" value="Make a payment"> </a>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div> 


                        </form>
                    </div>
                </div>

        </div><br>
        <?php include './footer.php'; ?>

       
    </body>
</html>
