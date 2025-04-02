<?php
include("examdb.php");
include("examfunction.php");

session_start();

$correct = calculate($questions, $_GET["answers"]);
$total = count($questions);
$failed = failed($questions, $_GET["answers"]);
// $failed = $total - $correct;
$answered = count($_GET["answers"]);
$average = round($total / 2, 0);

if ($correct >= $average) {
    $aggregate = "Pass";
} else {
    $aggregate = "Failed";
}

$correction = correction($questions, $_GET["answers"]);

// var_dump($correction);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .cont {
        margin: 0px auto;
        height: 200px;
        width: 500px;
        box-shadow: 1px 2px 3px 1px grey;
        justify-items: center;
        padding: 20px;
        font-size: 18px;
    }

    .all {
        display: flex;
    }

    .second {
        margin-right: 0px;
        box-shadow: 1px 2px 3px 1px;
        height: 600px;
        width: 350px;
        justify-items: center;
        overflow-y: scroll;
    }

    .correct {
        height: 200px;
    }

    #b {
        box-shadow: 1px, 1px, 2px, 1px black;
    }

    .container {}

    .b {
        align-content: center;
    }
</style>

<body>



    <div class="container d-block ">
        <div class="row ">
            <div class="col-sm-12 col-md-6 mx-auto ">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5> Hello <?= $_SESSION["name"]; ?> </h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                        </div>
                    </div>
                </div>


                <table class="table table-responsive table-striped table-hover " border="1">
                    <th colspan="2"> Result</th>
                    <tr>
                        <td> Total score:</td>
                        <td> <?= $correct ?></td>
                    </tr>
                    <tr>
                        <td> Total question:</td>
                        <td> <?= $total ?></td>
                    </tr>


                    <tr>
                        <td>Questions Answered:</td>
                        <td> <?= $answered ?></td>
                    </tr>
                    <tr>
                        <td> Failed Questions Answered:</td>
                        <td> <?= $failed ?></td>
                    </tr>
                    <tr>
                        <td> Aggregate:</td>
                        <td> <?= $aggregate ?></td>
                    </tr>

                </table>
            </div>


        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto mt-5" border="1">

                <table class="table table-responsive table-striped table-hover" border="1">

                    <tr>
                        <th colspan="2"> CORRECTION</th>
                    </tr>

                    <tr>
                        <th> Questions failed </th>
                        <th> Question answer</th>
                    </tr>
                    <?php if ($correction): ?>
                        <?php foreach ($correction as $key => $value): ?>
                            <tr>
                                <td><?= $key + 1 . "." . $value["question"]; ?></td>
                                <td><?= $value["answer"]; ?></td>
                            </tr>
                        <?php endforeach ?>

                    <?php endif ?>

                </table>

                <a href="logout.php"> Logout</a>

            </div>

        </div>
    </div>


</body>

</html>