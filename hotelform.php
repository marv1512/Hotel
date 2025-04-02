<?php

// include("spinner.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $photoname = $_FILES["photo"];
    $photoinfo = pathinfo($photoname["name"]);
    $ext = $photoinfo["extension"];
    $new_filename = time();
    $image = $new_filename . "." . $ext;


    var_dump($photoinfo);




    if (move_uploaded_file($photoname["tmp_name"], "fileimage/$image")) {

        echo "File uploaded successfully";
    } else {
        echo "There was an error uploading the file";
    }

    include("messagefunction.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    if (validate($name) && validate($email) && validate($message)) {
        $result = save($name, $email, $message, $image);
        $success = "Your message has been sent successfully";

    } else {
        $error = "Please input all of the field";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <title>Document</title>
</head>
<style>
    #photo {
        background-image: url(photo/contactt.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 250px;

    }

    .main {
        display: flex;
    }

    #left {
        border: 3px solid black;
    }

    #navbar {
        position: fixed;





    }

    .container {
        height: 100vh;
    }
</style>

<body>
    <?php include("spinner.php") ?>
    <div class="container-fluid w-100">

        <div class="row  w-100">
            <div>
                <h3> <?= $success ?? null; ?></h3>
            </div>
            <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="hotelupdate.php"> <b>MARVELUXE APARTMENT & GRILLS</b> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="hotelupdate.php">Home</a>
                            <a class="nav-link" href="#">Dining</a>
                            <a class="nav-link" href="#">Meetings & Banqueting </a>
                            <a class="nav-link" href="#">Recreational Services </a>
                            <a class="nav-link" href="#">Event </a>
                            <a class="nav-link" href="#"> Gallery </a>
                            <a class="nav-link float-end" href="hotelsignin.php"> <b> My Account</b> </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row w-100">
            <div class="col-sm-12 col-md-6 mx-auto w-100">
                <div id="photo"> COntact us</div>
                <div class="mb-5 mt-5">
                    <h1> If you have any questions don't hesitate to contact us.</h1>
                </div>
                <div class="main">
                    <div class="col-7">
                        <div class="card shadow">
                            <div class="card-head"></div>
                            <div class="card-body">
                                <?php if (isset($error)): ?>
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <?= $error ?>
                                    </div>

                                    <script>
                                        var alertList = document.querySelectorAll(".alert");
                                        alertList.forEach(function (alert) {
                                            new bootstrap.Alert(alert);
                                        });
                                    </script>

                                <?php endif ?>
                                <?php if (isset($success)): ?>
                                    <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <?= $success ?>
                                    </div>

                                    <script>
                                        var alertList = document.querySelectorAll(".alert");
                                        alertList.forEach(function (alert) {
                                            new bootstrap.Alert(alert);
                                        });
                                    </script>

                                <?php endif ?>
                                <fieldset>
                                    <legend class="text-center"> Get in Touch</legend>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                        <br>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        <br>
                                        <input type="file" name="photo" class="form-control" placeholder="Phone">
                                        <br>
                                        <input type="phone" class="form-control" placeholder="Phone">
                                        <br>
                                        <input type="text" class="form-control mt-2" placeholder="Subject">
                                        <textarea name="message" id="" class="form-control mt-2"
                                            placeholder="Please Enter your message"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary mt-1">
                                            Send Message
                                        </button>

                                    </form>
                                </fieldset>
                            </div>

                        </div>
                    </div>
                    <div class="col-3 mx-5">
                        <div class="card shadow p-3">
                            <div class="card-head">
                                <h3 class="text-center"> INFORMATION</h3>

                            </div>
                            <div class="card-body">
                                <i class="fa fa-2x fa-envelope"></i>E-mail
                                sales@ekohotels.com, reservation@ekohotels.com, banquet@ekohotels.com

                                <br>
                                <i class="fa fa-2x fa-map-marker"></i> Address
                                Plot 1415 Adetokunbo Ademola Street, PMB 12724, Victoria Island, Lagos Nigeria
                                <br>
                                <i class="fa fa-2x fa-phone"></i> Phone / Fax
                                Calls Us: +234 9092772700, +234 8092772700
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row mt-5 bg-dark text-white">
                    <div class="col-3 mt-5">
                        <a href="hotelabout.php">About</a>
                        <br> <br>
                        Gallery
                        <br> <br>
                        Our Events
                        <br> <br>
                        Our Hotels
                        <br> <br>
                        Dining
                        <br> <br>
                        Our Vision & Mission
                        <br> <br>
                        <a href="hotelcontact.php"> Contact Us</a>
                        <br> <br>
                        Terms & Conditions
                    </div>

                    <div class="col-6 mt-5">
                        Plot 1415 Adetokunbo Ademola Street, PMB 12724, Victoria Island, Lagos Nigeria
                        <br> <br>
                        International Calls: +234 201 2772700, National Calls: 0201 2772700
                        <br> <br>
                        Fax: +234 1 2704071
                        <br> <br>
                        sales@ekohotels.com, reservation@ekohotels.com, banquet@ekohotels.com

                    </div>


                    <div class="col-3 mt-5">
                        Newsletter
                        <br> <br>
                        Subscribe to our email newsletter to receive updates and news.
                    </div>
                </div>

                <div class="text-center mb-2">
                    <div class="bg-warning mx-auto text-light " id="footer">
                        <h2><b>THE COMPANY</b></h2>
                    </div>
                    <h5>Copyright 2025 Marveluxe Apartment and Grills</h5>
                </div>


            </div>
        </div>

    </div>

</body>

</html>