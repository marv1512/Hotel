<?php
include("gamelogin.php");

session_start();
$username = $_POST["username"];
$_SESSION["username"] = $username;

// if ($_SESSION["username"] = false) {
//     header("location:gamelogin.php");
// }
if ($_SESSION["username"] == true) {
    header("location:game.php");





} else {
    header("location:gamelogin.php");
}
?>