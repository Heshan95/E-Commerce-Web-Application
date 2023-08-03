<?php
include './showErros.php';
include './dbConnection.php';

if(isset($_POST['deletedata']))
{
    $idproducts = $_POST['delete_id'];

    $query = "DELETE FROM `order_manager` WHERE `oredr_id`='".$oredr_id."'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location: admin_orderManager.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>
