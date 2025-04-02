<?php
session_start();


if (isset($_SESSION["note"])) {
    $store = $_SESSION["note"];
} else {
    $store = [];
}
?>