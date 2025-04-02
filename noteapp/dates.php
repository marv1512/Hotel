<?php
$timestamp = time();

echo date('j');

$dayname = date("D");
$date = date("d", 1);
$month = date("M");
$year = date("Y");

$dayy = [
    "Mon",
    "Tue",
    "Wed",
    "Thur",
    " Fri",
    "Sat",
    "Sun"
];
$monthh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Nov", "Dec"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    .a {

        width: 50px;
        height: 50px;
        border: 2px solid black;
    }

    .mother {
        display: grid;
        grid-template-columns: repeat(7, 1fr);


    }

    .a:hover {
        background-color: grey;


    }
</style>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card bord">
                    <div class="card shadow ">
                        <div class="card-header text-center bg-success text-light">Calender</div>
                        <div class="card-body text-center">
                            <h4 class="card-title"><?= $month . "/" . $year; ?></h4>
                            <div class="mother pb-2 gap-2">

                                <?php foreach ($dayy as $key => $value): ?>
                                    <?php echo "<div class='a'>" . $value . " </div>"; ?>
                                <?php endforeach ?>

                            </div>

                            <div class="mother gap-2">
                                <?php for ($i = $date; $i <= 31; $i++) {
                                    echo "<div class='a'> " . $i . "</div>";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center text-light bg-success"><?= $year; ?></php>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

</body>

</html>