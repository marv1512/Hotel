<?php
include "includes/config.php";
include "functions/login.php";
include "functions/game_control.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = $_POST['username'];
   login($username);
   start_game(1);
   header("location:game.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <?php if (isset($error)): ?>
            <p style="color:red"><?= $error; ?></p>
        <?php endif; ?>
        <legend>Enter username</legend>
        <form action="index.php" method="post">
            <input type="text" name="username">
            <input type="submit" value="Login">
        </form>
    </fieldset>
</body>

</html>