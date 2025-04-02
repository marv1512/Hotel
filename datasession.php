<?php
include("dataset.php");

session_start();

// foreach ($data as $key => $value["name"]) {
//     if ($_SESSION["name"] != $value["name"]) {

//     }
//     header("location: datasetlogin.php");
//     exit;
// }

$username = $_POST["name"];
$_SESSION["name"] = $username;



$phone = $_POST["phone"];
$_SESSION["phone"] = $phone;

$password = $_POST["password"];
$_SESSION["password"] = $password;

$email = $_POST["email"];
$_SESSION["email"] = $email;

header("Location: datastore.php");
exit;
?>