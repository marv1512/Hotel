<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
$filesize = $_FILES["photo"]["size"] / 1024;
$filetype = $_FILES["photo"]["type"];

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

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <?= "The file type is:" . $filetype ?>
                <br>
                <?= "The file size is:" . $filesize . "KB" ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-head text-center"> Upload File</div>
                    <div class="card-body text-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" name="user">
                            <br>
                            <input type="text" name="name" class="mt-3">
                            <br>
                            <input type="file" name="photo" class="mt-3 form-control">
                            <br>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>


                        </form>
                    </div>
                    <div class="card-footer"></div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>