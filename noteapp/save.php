<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $note = [
        'title' => $title,
        'content' => $content
    ];
    $_SESSION['notes'][] = $note;
    header("location:list.php");
} else {
    echo "Sorry, the request is unknown";
}

?>