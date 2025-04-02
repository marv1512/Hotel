<?php 
include ("statedb.php");
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

    <div class="container  ">
        <div class="row ">
            <div class="col-sm-12 ">
                <table border=1 class="table   table-fluid  table-responsive table-striped table-hover">
                    <tr>
                        <th> State Name</th>
                        <th> State Capital</th>
                    </tr>

                    <tr>
                        <td>
                            <ul>
                                <?php foreach ($states as $name => $data):  ?>
                                <li> <a href="dataentry.php?state_name=<?=$name?> ">
                                        <?= $data['state_name']?> </a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </td>

                        <td>
                            <ul>
                                <?php foreach ($states as $name => $data):  ?>
                                <li> <?= $data['capital']?></li>
                                <?php endforeach ?> <?= "\n"?>
                            </ul>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</body>

</html>