<?php
include("notedb.php");





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row mx-auto">
            <div class="col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-head text-center"> Login</div>
                    <div class="card-body mx-auto">
                        <form action="notesave.php" method="post">
                            <div>
                                <label for=""> Name</label>
                                <input type="text" name="name">
                            </div>

                            <div class="mt-2">
                                <label for=""> Password</label>
                                <input type="password">
                            </div>

                            <button type="submit" class="btn btn-primary mx-auto">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>