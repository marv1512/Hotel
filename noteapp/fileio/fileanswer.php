<?php
include("filefunction.php");


$content = $_POST["content"];
$input = $_POST["find"];

$rep = $_POST["replace"];

$replace = str_replace($input, $rep, $content);
// $newwword = checkword($project);
// $badreplace = checkword($project);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    .highlight {
        width: 100px;
        display: inline;

    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto my-5">
                <div class="card shadow">
                    <div class="card-head text-center bg-success text-light">
                        <h3> Replacement</h3>
                    </div>
                    <div class="card-body text-center">

                        <!-- <h4> <?= $replace ?> </h4> -->

                        <?php if (isset($input) == $content): ?>

                            <?php $new = str_replace($input, "<div class=' highlight bg-warning'> " . $input . "</div>", $content) ?>

                            <?= $new; ?>

                        <?php endif ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>