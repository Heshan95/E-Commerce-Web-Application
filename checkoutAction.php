<?php
include './showErros.php';
session_start();
include './dbConnection.php';
$fname = "";
$lname = "";
$address = "";
$city="";
$contactNo = "";
$email = "";
$username = "";
$password = "";
$cart = "";

$user_ID = "";
if (isset($_SESSION['userid'])) {
    $user_ID = $_SESSION['userid'];
}

$is_login = false;
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
$last_id_invoice = "";
if (isset($_SESSION['current_invoice_id'])) {
    $last_id_invoice = $_SESSION['current_invoice_id'];
}

if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['contactNumber'])){$contactNo = $_POST['contactNumber'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['username'])){$username = $_POST['username'];}
if(isset($_POST['password'])){$password = $_POST['password'];}

//cart data
if(isset($_SESSION['cart'])){$cart = $_SESSION['cart'];}

    if($cart==''){header("Location:cart.php?msg=Cart not found !");die();}

 
    if(!$is_login){
    ///register new user part not require for registerd and logged in users !
$insertQuery = "INSERT INTO `users`(`fname`,`lname`,`address`,`number`,`email`,`city`,`zip`,`username`,`password`,`user_type`,`is_active`)VALUES('".$fname."','".$lname."','".$address."','".$contactNo."','".$email."','".$city."','".$zip."','".$username."','".$password."','2','1')";
// echo $insertQuery;
 $result = $connection->query($insertQuery); 
 
   $user_ID =0;
   if($result===TRUE){
      $user_ID =  $connection->insert_id;
       $_SESSION["userid"] = $user_ID;
   }else{
       echo "ERROR ".mysqli_error($connection);
   }
  }
   
   
    if($last_id_invoice!=""){
        //remove previous temp carts
        $dropCartQuery = "delete from invoice_items  where id_invoice = '".$last_id_invoice."' ";

$res = $connection->query($dropCartQuery);
    }
       $totalAmu = 180.0; 
               echo $totalAmu;
  if($last_id_invoice==""){
   $saveInvoice = "insert into "
           . "invoice(invoice_date,total_amount,invoiced_to,invoiced_checked_by,status) values"
           . "(now(),'".$totalAmu."','".$user_ID."',null,'2')";   
   
//   echo $saveInvoice;
   $resultx = $connection->query($saveInvoice);
       echo "invoice saved Successfully !";
     $last_id_invoice = $connection->insert_id;
     $_SESSION["current_invoice_id"] = $last_id_invoice;     
       echo "Invoice ID : ".$last_id_invoice; 
  }
       
       
       
       //save all the items !!!
           foreach ($cart as $cartItem){
               $querySaveItem = "insert into invoice_items(id_product,id_invoice,line_qty,line_unit_price) values('".$cartItem[0]."', '".$last_id_invoice."', '".$cartItem[1]."',(select sellPrice from products where idproducts ='".$cartItem[0]."' ) )"; 
              $pitem = $connection->query($querySaveItem);
              if($pitem===true){
                  echo $cartItem[0]." saved success";
               }else{
                   echo "error".mysqli_error($connection);
                   }      
   } 
   
   
             $updateInvoiceTotal = "update invoice i set i.total_amount = (select sum(ii.line_unit_price*ii.line_qty) from invoice_items ii where ii.id_invoice = i.id_invoice) where i.id_invoice =  '".$last_id_invoice."' ";
   
              if($connection->query($updateInvoiceTotal)===true){
                  echo " invoice total updated successfully !";
               }else{
                   echo "error".mysqli_error($connection);
                   }      
                  
               
               //payment Confirmation page
               header("Location: paymentConfirmation.php");
   
   ?>

<!--?php
session_start();
include './dbConnection.php';
$fname = "";
$lname = "";
$email = "";
$address = "";
$contactNo = "";
$city = "";
$username = "";
$password = "";
$cart = "";

$user_ID = "";
if (isset($_SESSION['userid'])) {
    $user_ID = $_SESSION['userid'];
}

$is_login = false;
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
$last_id_invoice = "";
if (isset($_SESSION['current_invoice_id'])) {
    $last_id_invoice = $_SESSION['current_invoice_id'];
}

if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['address'])){$address = $_POST['address'];}
if(isset($_POST['contactNumber'])){$contactNo = $_POST['contactNumber'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['username'])){$username = $_POST['username'];}
if(isset($_POST['password'])){$password = $_POST['password'];}

//cart data
if(isset($_SESSION['cart'])){$cart = $_SESSION['cart'];}

    if($cart==''){header("Location:cart.php?msg=Cart not found !");die();}


//write valiadtion 
 //write it....  Q1
 if(!$is_login){
    ///register new user part not require for registerd and logged in users !

$insertQuery = "INSERT INTO `users`
(
`fname`,
`lname`,
`email`,
`address`,
`number`,
`city`,
`username`,
`password`,
`user_type`,
`is_active`)
VALUES
('".$fname."','".$lname."','".$address."','".$contactNo."',
'".$email."',
'".$username."',
'".$password."',
'2',
'1')";
// echo $insertQuery;
 $result = $conn->query($insertQuery); 
 
   $user_id =0;
   if($result===TRUE){
      $user_id =  $conn->insert_id;
       $_SESSION["userid"] = $user_id;
   }else{
       echo "ERROR ".mysqli_error($conn);
   }
 }
 if($last_id_invoice!=""){
        //remove previous temp carts
        $dropCartQuery = "delete from invoice_items  where id_invoice = '".$last_id_invoice."' ";

$res = $conn->query($dropCartQuery);
    }
    
     $totalAmu = 0.0; 
                   
       if($last_id_invoice==""){
   $saveInvoice = "insert into "
           . "invoice(invoice_date,total_amount,invoiced_to,invoiced_checkd_by,status) values"
           . "(now(),'".$totalAmu."','".$user_id."',null,'2')";   
   
//   echo $saveInvoice;
   
   $resultx = $conn->query($saveInvoice);
   
   if($resultx===true){
       echo "invoice saved Successfully !";
     $last_id_invoice = $conn->insert_id;
     
     $_SESSION["current_invoice_id"] = $last_id_invoice;
     
       echo "Invoice ID : ".$last_id_invoice; 
   }
   
       //save all the items !!!
           foreach ($cart as $cartItem){
                  
               $querySaveItem = "insert into invoice_items(id_product,id_invoice,line_qty,line_unit_price)"
              . " values('".$cartItem[0]."', '".$last_id_invoice."', '".$cartItem[1].
                       "',(select sell_price from products where id_products ='".$cartItem[0]."' ) )"; 
              $pitem = $conn->query($querySaveItem);
              if($pitem===true){
                  echo $cartItem[0]." saved success";
               }else{
                   echo "error".mysqli_error($conn);
                   }      
   } 
   
             $updateInvoiceTotal = "update invoice i set i.total_amount = (select sum(ii.line_unit_price*ii.line_qty) from 
invoice_items ii where ii.id_invoice = i.id_invoice) where i.id_invoice =  '".$last_id_invoice."' ";
   
              if($conn->query($updateInvoiceTotal)===true){
                  echo " invoice total updated successfully !";
               }else{
                   echo "error".mysqli_error($conn);
                   }      
     
               }
               //payment Confirmation page
               header("Location: paymentConfirmation.php");
   
   ?>