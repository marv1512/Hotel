<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    $file = fopen("hotelfile.txt", "r");
    if (isset($email) && isset($password) && isset($name)) {
        $file = fopen("hotelfile.txt", "a+");

        $write = fwrite($file, "$name\n$email\n$password\n");
        fclose($file);
    }
    // $line = fgets($file);
    if (isset($_SESSION["email"])) {
        header("location: hotelbooking.php");
    } else {
        echo "Please fill in the details";
    }


}
?>