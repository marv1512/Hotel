<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $_SESSION["name"] = $name;
    $password = $_POST["password"];
    $_SESSION["password"] = $password;
    $setname = "ADMIN";
    $setpassword = "PASS";

    if (trim($_SESSION["name"]) === trim("ADMIN") && trim($_SESSION["password"]) === trim("PASS")) {
        return header("location: hotelmessage.php");


    }

    // if ($_SESSION["name"] === trim("ADMIN") && trim($_SESSION["password"]) === trim("PASS")) {
    //     return header("location: hotelmessage.php");


    // }
    else {
        header("location: messagelogin.php");
    }
}
?>