<?php

session_start();
$username = $_POST["name"];

$_SESSION["name"] = $username;
header("Location: exam.php");
exit;

?>