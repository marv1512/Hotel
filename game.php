<?php


session_start();


if ($_SESSION["username"] == false) {


    header("location:gamelogin.php");
    exit;
}


// if ($_SESSION[range(1, 10)]) {
//     header("location:game2.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <style>
        .box {
            background-color: blue;
            height: 200px;
            width: 200px;
            border: 5px solid black;
            text-align: center;
            font-size: 20px;

        }


        .box:hover {}

        .main {
            display: block;

        }

        .game {}

        .button {
            height: 200px;
            width: 200px;
            background-color: blue;
            color: white;
            font-size: 30px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto">
                <div>

                </div>
                <div class="main">
                    <form action="gamesession2.php" method="post">
                        <h1> <?= $_SESSION["username"] ?></h1>
                        <div class="game">



                            <button class="button" name="1" value=<?= rand(1, 10) ?>> <?= rand(1, 10) ?></button>
                            <button class="button" name="2"> <?= rand(1, 10) ?></button>
                            <button class="button" name="3"> <?= rand(1, 10) ?></button>

                        </div>

                        <div class="game">
                            <button class="button" name="4"> <?= rand(1, 10) ?></button>
                            <button class="button" name="5"> <?= rand(1, 10) ?></button>
                            <button class="button" name="6"> <?= rand(1, 10) ?></button>


                        </div>

                        <div class="game">
                            <button class="button" name="7"> <?= rand(1, 10) ?></button>
                            <button class="button" name="8"> <?= rand(1, 10) ?></button>
                            <button class="button" name="9"> <?= rand(1, 10) ?></button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>