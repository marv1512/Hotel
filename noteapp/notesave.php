<?php

include("notedb.php");
session_start();


// if (empty($_POST["title"]) || empty($_POST["content"]) || empty($_POST["date"])) {
//     $_SESSION["mess"] = "Please fill in the complete information";
//     header("location: notecreate.php");

//     exit("");
// }


// foreach ($datas as $key => $username) {
//     if (isset($_POST["name"]) == $username["name"]) {

//         $name = $_POST["name"];
//         $_SESSION["name"] = $name;
//         header("location: notecreate.php");
//     } else {
//         header("location: notelogin.php");
//     }
// }
// foreach ($datas as $key => $username) {
//     if ($_POST["name"] == $username["name"]) {
//         // $_POST["name"] = $_SESSION["name"];
//         $name = $_POST["name"];
//         $_SESSION["name"] = $name;
//         header("location:notecreate.php");
//         exit;
//     } else {
//         header("location: notelogin.php");
//         exit;

//     }
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = $_POST["date"];



    if (isset($_SESSION["note"])) {
        $store = $_SESSION["note"];
    } else {
        $store = [];
    }
    $note = [

        "title" => $title,
        "content" => $content,
        "date" => $date,
    ];
    $_SESSION["note"][] = $note;
    header("location: notelist.php");



} else {
    echo "Your request is unknown";
}
?>