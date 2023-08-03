<?php
include './showErros.php';
session_start();

$SESSION["is login"] = false;
session_destroy();
header("Location: admin_login.php");
?>
