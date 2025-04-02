<?php 
include("calculator.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
.card {
    justify-content: space-around;
}
</style>

<body>

    <div class="container p-5">
        <div class="row">
            <div class="col-sm-2 mx-auto mt-5">
                <div class="card shadow">

                    <div class="card-head">
                        <form action="">
                            <input type="text" value="answer">
                        </form> <?php $t= readline("enter input:");
                    echo $t; ?>
                    </div>

                    <div class="card-body p-3" class="card">
                        <input type="button" value="1" class="btn btn-primary">

                        <input type="button" value="2" class="btn btn-primary">

                        <input type="button" value="3" class="btn btn-primary">

                        <input type="button" value="4" class="btn btn-primary">

                        <input type="button" value="5" class="btn btn-primary">

                        <input type="button" value="6" class="btn btn-primary">

                        <input type="button" value="7" class="btn btn-primary">

                        <input type="button" value="8" class="btn btn-primary">

                        <input type="button" value="9" class="btn btn-primary">
                        <input type="button" value="+" class="btn btn-primary">

                        <input type="button" value="-" class="btn btn-primary">

                        <input type="button" value="/" class="btn btn-primary">

                        <input type="button" value="*" class="btn btn-primary">

                        <input type="button" value="=" class="btn btn-success">
















                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>