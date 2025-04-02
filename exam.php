<?php
include("examdb.php");


session_start();
if (isset($_SESSION["name"]) == false) {
    header("Location: datasetlogin.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
    .options {
        margin-bottom: 20px;
    }
</style>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mt-5 mx-auto">
                <div class="card shadow p-5" height="100vh" ;>

                    <h2> Hello <?= strtoupper($_SESSION["name"]) ?> </h2>

                    <div class="card-header mx-auto mb-3">
                        <h4><b>This is an aptitude test questions</b></h4>
                    </div>
                    <form action="examrecord.php" method="get">
                        <?php foreach ($questions as $key => $value): ?>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h5>Questions: <?= $key + 1 ?></h5>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>

                                <div>

                                </div>
                                <p> <img src="https://i0.wp.com/eloquentdisplays.com/wp-content/uploads/2016/04/quality-nigerian-flag-for-sale-in-lagos.jpg?w=500&ssl=1"
                                        alt="pic" height="200px" width="200px"></p>
                                <p> <?php echo $value["question"] . "<br/>"; ?></p>
                                <div>
                                    <input type="radio" value="yes" name="answers[<?= $key ?>]"> yes
                                </div>
                                <div class="options">
                                    <input type="radio" value="no" name="answers[<?= $key ?>]"> no
                                </div>

                            <?php endforeach ?>
                        </div>
                        <button type="submit" class="btn btn-primary">

                            Submit
                        </button>
                    </form>



                </div>


            </div>
        </div>
    </div>
</body>

</html>