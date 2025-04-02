<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    // $AUC = $a . "," . $c;
    // $AnC = strchr($c, $a);
    $a = explode(",", $_POST["a"]);
    $b = explode(",", $_POST["b"]);
    $c = explode(",", $_POST["c"]);

    $AUC = array_merge($a, $c);
    $AnC = [];
    foreach ($a as $number) {
        if (in_array($number, $c)) {
            $dd = array_push($AnC, $number);
        }

    }
    if (count($AnC) == 0) {
        echo "No intersection found";
    } else {
        echo "interection found" . implode(",", $AnC);
    }
    $BnC = [];
    foreach ($b as $number) {
        if (in_array($number, $c)) {
            $cd = array_push($BnC, $number);
        }

    }
    if (count($BnC) == 0) {
        echo "No intersection found";
    } else {
        echo "interection found" . implode(",", $BnC);
    }


    // $bb = [];
    // array_push($bb, $b);
    // $cc = [];
    // array_push($cc, $c);

    // $AnC = array_intersect($aa, $cc);
    // $BnC = array_intersect($bb, $cc);





}


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

    <div class="container">
        <div class="row  ">
            <div class="col-sm-12 col-md-6">
                <div class="card text-start shadow">

                    <div class="card-body text-center bg-secondary">
                        <h4 class="card-title bg-warning">Union</h4>
                        <form action="" method="post">
                            <div>
                                <label for=""> A:</label>
                                <input type="text" name="a" class="my-2   rounded-pill shadow"
                                    placeholder="input must be in 1,2,3 format">
                            </div>
                            <div>
                                <label for=""> B:</label>
                                <input type="text" name="b" class="my-2  rounded-pill shadow"
                                    placeholder="input must be in 1,2,3 format">
                            </div>
                            <div>
                                <label for="">C: </label>
                                <input type="text" name="c" class="my-2 rounded-pill shadow"
                                    placeholder="input must be in 1,2,3 format">
                            </div>

                            <button type="submit" class="btn btn-primary" name="AUC">
                                Submit
                            </button>


                        </form>


                    </div>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card text-center">
                    <div class="card-head"></div>
                    <div class="card-body bg-success text-light">
                        <div> Answer for AUC: <?= implode(",", $AUC); ?>
                        </div>
                        <div>

                            Answer for AnC: <?= implode(",", $AnC); ?>

                        </div>
                        <div>

                            Answer for BnC: <?= implode(",", $BnC); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>