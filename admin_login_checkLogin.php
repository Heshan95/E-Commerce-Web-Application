<?php
include './showErros.php';
session_start();
if (isset($_SESSION["is_login"])) {
    if (($_SESSION["is_login"] == true)) {  // The user is  logged in to the home.
        header("Location: index.html"); // User log wela inne ee nisa home page ekata directed wenawa. mokada amuthuwen check karanna deyak nh username password.
        exit();
    }
} else {

    include './dbConnection.php';

    $un = "";
    $pw = "";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $un = $_POST["username"];
        $pw = $_POST["password"];

        $_SESSION["details1"] = $un;
        $_SESSION["details2"] = $pw;


        if ($un == "admin" && $pw == "1234") {
            header("Location: admin_home.php");
            exit();
        } else {

            $searchQuery = "SELECT  * FROM `users` WHERE `username`='" . $un . "' AND `password`='" . $pw . "'";

            $result = $connection->query($searchQuery);
            if ($row = $result->fetch_assoc()) {
                $_SESSION["is_login"] = true;
                
                $_SESSION["userid"] = $row["idusers"];
                
                header("Location: index.html"); //user service end
                exit();
            } else {
                header("Location: admin_login.php");
                echo "Fail";
                exit();
            }
        }
    }
}
?>

