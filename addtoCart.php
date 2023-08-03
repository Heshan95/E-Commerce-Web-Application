<?php
include './showErros.php';
session_start();
$productId="";
if(isset($_POST['pid'])){$productId  = $_POST['pid'];}
if(isset($_GET['pid'])){$productId  = $_GET['pid'];}
if($productId==""){header("Location: index.html?msg=Wrong Feed Cart page");die();}

//define cart
$cart;
//assign cart
$isInTheCart = FALSE;

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    
    foreach ($cart as $key => $value){
    if($value[0]==$productId){
        $currentQty = $value[1];
        unset($cart[$key]);
        $cartItem = array($productId,$currentQty+1); 
        array_push($cart, $cartItem);
        $isInTheCart = true;
    }
} 
    
}else{
    $cart = array();
}


if(!$isInTheCart){
$cartItem = array($productId,1); 
array_push($cart, $cartItem);
}

$_SESSION['cart'] = $cart;

header("Location:cart.php");
?>



<!--?php //
session_start();
//assign Id
$productId = "";

if(isset($_POST['pid'])){$productId = $_POST['pid'];}
if(isset($_GET['pid'])){$productId = $_GET['pid'];}
if($productId=="") {    header("Location: product1.php?msg=Incorrect Product Id at Cart page");    die();}

//define cart
$cart;
$isInTheCart = FALSE;
//assign cart
//check - cart available ???
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    //if cart not available.. we need to give a cart.. We use Array
foreach ($cart as $key => $value) {
    if($value[0] == $productId){
        $currencyQty = $value[1];
        unset($cart[$key]);
        $cartItem = array($productId,$currencyQty + 1);
        array_push($cart, $cartItem);
         $isInTheCart  = TRUE;
    }
}
    
} else {
    $cart = array();
}

if(!$isInTheCart){
$cartItem = array($productId,1);
//array_push is php variable (eg: add for something)
array_push($cart, $cartItem);
}
//now need to handover that cart to custemor
$_SESSION['cart'] = $cart;

//pass to GUI that all of details
header("Location: cart.php");

?-->

