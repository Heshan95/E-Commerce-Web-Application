<?php
include './showErros.php';
include './dbConnection.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$number = $_POST["number"];
$address = $_POST["address"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$username = $_POST["username"];
$password = $_POST["password"];

//echo $userName;
//echo $password;
//echo $email;
$select = "SELECT * FROM `users`";
 $check = $connection->query($select);
 if ($check->num_rows > 0) {
    while($row = $check->fetch_assoc()){
        if($row['email']==$email){
            header("Location: admin_register.php?msg=Email already exists");die();
        } else if($row['username']==$username){
            header("Location: admin_register.php?msg=Username already exists");die();
        }
    }
    }


$query = "INSERT INTO `users`(`fname`,`lname`,`email`,`number`,`address`,`city`,`zip`,`username`,`password`,`is_active`) VALUES ('".$fname."','".$lname."','".$email."','".$number."','".$address."','".$city."','".$zip."','".$username."','".$password."','1')";
  

$isSaved = mysqli_query($connection, $query);

if($isSaved){
    echo "SUCCESS";
    header("Location: index.html?msg=Success ! ");die();
}else{
    echo "ERROR";
    header("Location: admin_register_user.php?msg=Error : ".$connection->error);die();

}


        
?>

