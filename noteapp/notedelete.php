<?php

include("notesave.php");

if (isset($_SESSION["note"])) {
    $count = count($_SESSION["note"]);
} else {
    $count = 0;
}

if (isset($_POST["delete"])) {
    $delete = $_POST["delete"];
    unset($_SESSION["note"][$delete]);
    $_SESSION["note"] = array_values($_SESSION["note"]);
    header("location:notelist.php");
}

?>