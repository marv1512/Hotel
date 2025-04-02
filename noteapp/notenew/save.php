<?php
session_start();
include "functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    save($title, $content);
    $_SESSION['message'] = "Created successfully";
    header("location:list.php");
} else {
    echo "Sorry, the request is unknown";
}
