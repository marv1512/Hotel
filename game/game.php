<?php
include "includes/config.php";
include "functions/game_control.php";
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
$current_level = $_SESSION['current_level'];
// $next_level = 
if (isset($_GET['selected'])) {
    $selected = $_GET['selected'];
    $game = $_SESSION[$current_level];
    // $_SESSION[$current_level]['selected_number'] = $selected;

}
$generated = generateNumbers($current_level);
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            background-color: darkblue;
            border: 1px solid black;
            text-align: center;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        .box:hover {
            background-color: white;
            color: darkblue;
            cursor: pointer;
        }

        #container {
            display: flex;
        }

        .game {
            display: flex;
        }
    </style>
</head>

<body>
    <h1><?= APP_NAME; ?></h1>
    <div id="container">
        <fieldset>
            <legend>You are logged in as <?= $_SESSION['user'] ?></legend>
            <a href="logout.php">Logout</a>
        </fieldset>
        <div class="game">
            <?php foreach ($generated as $box): ?>
                <a href="game.php?selected=<?= $box; ?>&&current_level=<?= $level ?>" class="box"><?= $box ?></a>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>