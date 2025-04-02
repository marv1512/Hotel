<?php

$name = $_GET['name'];
$email = $_GET['email'];

if (empty($name) || empty($email)) {
   $error = "Name and email cannot be empty";
} else {
   $success= "Data is accepted";
   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <?php if(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?= $error ?></strong>
                </div>
                <?php endif?>
                <?php if(isset($success)): ?>
                <div class="alert alert-success" role="alert">
                    <strong><?= $success ?></strong>
                </div>
                <?php endif?>
            </div>
        </div>
    </div>
</body>

</html>