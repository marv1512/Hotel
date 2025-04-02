<?php
include("dataset.php");

session_start();
foreach ($data as $key => $value) {

}
if (isset($_SESSION["name"]) == false) {
    header("location: datasetlogin.php");
    exit;
}

// if ($_SESSION["name"] == $value["name"]) {
//    return true;
// } else {
//     return false;
//     exit("User not found");
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

<style>
    .full {
        width: 100vw;
    }
</style>

<body>


    <div class="container " class="full">
        <div class="row ">
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class=" text-start shadow border-primary mx-auto" style="width: 35rem;">
                    <img class="card-img-top"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPYu-0rxB9IkPQGwggbXSog4MGG4mltxEuPg&s"
                        alt="Title" />
                    <div class="card-body">
                        <?php foreach ($data as $key => $value): ?>
                            <?php if ($_SESSION["name"] == $value["name"] && $_SESSION["password"] == $value["password"]): ?>



                                <h2 class="card-title">Welcome <?= strtoupper($_SESSION["name"]); ?></h2>
                                <p class="card-text">
                                <table class="table table-responsive table-striped table-hover shadow" border="1">
                                    <tr>

                                        <th>
                                            <h1></h1>
                                        </th>
                                        <th colspan="5">
                                            <h3> This is your confidential details</h3>
                                        </th>
                                    </tr>

                                    <tr>

                                        <td>Name </td>
                                        <td>Email </td>
                                        <td>Phone</td>
                                        <td>Password</td>
                                        <td>Exam</td>
                                        <td>logout</td>
                                    </tr>

                                    <tr>

                                        <td> <?= $value["name"]; ?> </td>
                                        <td> <?= $value["email"]; ?> </td>
                                        <td> <?= $value["phone"]; ?> </td>
                                        <td> <?= $value["password"]; ?> </td>
                                        <td> <button class="btn btn-dark"> <a href="exam.php"> Start
                                                    Exam</a></button></td>
                                        <td><a href="logout.php"> logout</a></td>
                                        <?php exit ?>

                                    <?php endif ?>

                                <?php endforeach ?>

                                <?php if ($_SESSION["name"] !== $value["name"]): ?>
                                    <?php header("location:datasetlogin.php"); ?>

                                <?php endif ?>
                            </tr>
                        </table>
                        </p>
                    </div>

                </div>




            </div>
        </div>
    </div>


</body>

</html>