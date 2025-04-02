<?php
session_start();
// $store = [
//     [
//         'title' => 'Note one',
//         'content' => 'This is the content of the note one',
//     ],
//     [
//         'title' => 'Note two',
//         'content' => 'This is the content of the note two',
//     ],
// ];
if (isset($_SESSION['notes'])) {
    $store = $_SESSION['notes'];
} else {
    $store = [];
}

?>