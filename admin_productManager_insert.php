<?php
include './showErros.php';
include './dbConnection.php';


if(isset($_POST['inserdata']))
{
    $idproducts = $_POST['idproducts'];
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productCategory = $_POST['productCategory'];
    $sellPrice = $_POST['sellPrice'];
    $buyPrice = $_POST['buyPrice'];
    $image_url = $_POST['image_url'];
    

    $query = "INSERT INTO `products` (`idproducts`,`productName`,`productDescription`,`productcategory`,`sellPrice`,`buyPrice`,`image_url`) VALUES ('".$idproducts."','".$productName."','".$productDescription."','".$productCategory."','".$sellPrice."','".$buyPrice."','".$image_url."')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: admin_productManager.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
         header('Location: admin_productManager.php');
    }
}

?>