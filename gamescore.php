<?php
include("gamesession2.php");
include("gamefunction.php");

$answer = selected($selected, $selected2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello</h1>
    <h1> Level 1 answer: <?= $selected ?> </h1>
    <h1> Level 2 answer: <?= $selected2 ?> </h1>
    <h1>
        <?php echo $answer; ?>
    </h1>

</body>

</html>