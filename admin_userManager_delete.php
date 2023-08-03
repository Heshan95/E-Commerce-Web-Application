<?php
include './showErros.php';
include './dbConnection.php';

$user_id=$_GET['id'];


$sql="DELETE FROM `users` WHERE `idusers`='".$user_id."'";

$isDelete= mysqli_query($connection, $sql);

if($isDelete){
    echo "User deleted successfully";
    header("Location: admin_userManager.php");
    exit();
}else{
    echo "Error !!";
}
?>
