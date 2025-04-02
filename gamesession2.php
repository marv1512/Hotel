<?php
include("game.php");


$level1 = $_POST[1];
$_SESSION[1] = $level1;
$lucky = 6;
if ($_SESSION[1] == $lucky) {




    $selected = $_SESSION[1];

    // $selected2 = $_SESSION[1];
    header("location: gamescore.php");
    exit;
}
// header("location:gamescore.php");
//     exit;




?>