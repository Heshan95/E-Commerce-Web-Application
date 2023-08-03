<?php
include './showErros.php';
include './dbConnection.php';

if (isset($_POST['updatedata'])) 
{
$idusers = $_POST["idusers"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$country = $_POST["country"];
$number = $_POST["number"];
$address = $_POST["address"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$username = $_POST["username"];
$password = $_POST["password"];

//echo $id . " " . $Username . " " . $Email . " " . $Password;

$query = "UPDATE `users` SET `fname`='".$fname."',`lname`='".$lname."',`email`='".$email."',`country`='".$country."',`number`='".$number."',`address`='".$address."',`city`='".$city."',`zip`='".$zip."',`username`='".$username."',`password`='".$password."' WHERE `idusers`='".$idusers."'";
$query_run = mysqli_query($connection, $query);


if ($query_run) {
    echo '<script> alert("Data Updated"); </script>';
     header("Location:  admin_userManager.php");
   
} else {
    echo '<script> alert("Data Not Updated"); </script>';
         header("Location: admin_userManager.php");
}
}
mysqli_close($connection);
?>
