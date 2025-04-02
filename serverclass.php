<pre>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $display = $_POST["option"];
    }
} else {
    $display = "Please select from the option";
}

?>
</pre>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Document</title>
</head>


<body>
    <div class="container mx-auto">
        <div class="row">
            <div class="col-sm-12 col-md-6">

                <div class="card bg-success mx-auto">
                    <div class="card-header mx-auto bg-light">
                        <h2> <?= $display; ?> </h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <select class="form-select form-select-lg mb-3 border-success" name="option"
                                aria-label="Large select example">

                                <option selected>Server info</option>
                                <?php foreach ($_SERVER as $key => $value): ?>
                                    <option value="<?= $_SERVER[$key] ?>" name="name"> <?= $key; ?></option>
                                <?php endforeach ?>

                            </select>


                            <button type="submit" name="submit" value="search" class="btn btn-primary float-end">
                                search
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="js/bootstrap.js"></script>
</body>

</html>