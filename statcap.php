<?php
include "statedb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>

            <div>
                <table class=" table table-responsive table-hover table-striped" border="1">
                    <thead>
                        <th colspan="7">
                            <h3 style="text-align: center;"> This is the data of Nigeria state population 2023</h3>
                        </th>
                    </thead>
                    <thead>

                        <tr>

                            <th scope="col">S/N</th>
                            <th scope="col">State Name</th>
                            <th scope="col ">State Capital</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <?php $totally=[]; ?>
                            <?php $num=0; ?>
                            <?php $k=[]; ?>

                            <?php foreach ($states as $name => $data) { ?>

                            <?php $push= array_push($totally, $data["population"]); ?>

                            <td> <?php echo ++$num;  ?></td>
                            <td> <?php echo $data["state_name"]; ?></td>
                            <td> <?php echo $data["capital"]; ?></td>

                        </tr>

                        <?php } ?>

                        <tr>



                        <tr>
                            <td> Total Population</td>
                            <td colspan="5">
                                <?php
    
   
    $total= array_sum( $totally);
    echo number_format($total);?>
                            </td>
                            <td>
                                <?php $vi= []; ?>
                                <?php foreach ($states as $name => $data)   { ?>
                                <?php $ii= percentage(tota($states), $data["population"]); ?>
                                <?php  $pi=array_push($vi, $ii);  ?>


                                <?php } ?>

                                <?php echo array_sum($vi) ."%";  ?>


                            </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>