<?php

session_start();


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
    body {
        background-image: url(photo/home-about.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100vw;
    }

    .card-head {
        background-color: #0DCAF0;
        height: 50px;
    }

    .card {
        height: 500px;
    }

    #navbar {
        position: fixed;
    }

    .control {
        margin-bottom: 0px;
    }

    .about {
        margin-bottom: 0px;
        display: flex;

    }

    .space {
        height: 320px;
    }

    #navbar {
        position: fixed;
        z-index: 9;
    }

    .shadow {
        border: 2px solid blue;
    }
</style>

<body>
    <!-- <?php include("spinner.php") ?> -->
    <div class="container-fluid fs-3 w-100 ">
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
            <div class="col-sm-12 col-md-6 mt-5 mx-auto">

                <div class="card  shadow my-5">

                    <div class="card-head text-center bg-warning ">


                        <b> Sign in</b>

                    </div>
                    <div class="card-body">
                        <form action="hotelbooking.php" method="post">
                            <label for=""><b>Email</b></label>
                            <input type="email" class="form-control">
                            <br>
                            <label for=""> <b>Password</b></label>
                            <input type="password" class="mt-2 form-control">
                            <br>
                            <!-- <label for=""> <b>Profile Picture</b> </label>
                            <input type="file" class="form-control" id=""> -->
                            <div class="text-center">
                                <button type="submit" class="btn text-center mx-auto btn-primary mt-2">
                                    <h3>Submit</h3>
                                </button>
                                <br>
                                <a href="hotelupdate.php" class="mt-2 text-center mx-auto"> sign up </a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-info text-center">
                        Copyright 2025 Marveluxe Apartment and Grill
                    </div>

                </div>
            </div>
        </div>
        <div class="space"></div>

        <div class="row mt-5 p-3 bg-dark mx-auto text-white">
            <div class="col-lg-3  col-sm-12 mt-5">
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

            <div class="col-lg-6 col-sm-12 mt-5">
                Plot 1415 Adetokunbo Ademola Street, PMB 12724, Victoria Island, Lagos Nigeria
                <br> <br>
                International Calls: +234 201 2772700, National Calls: 0201 2772700
                <br> <br>
                Fax: +234 1 2704071
                <br> <br>
                sales@ekohotels.com, reservation@ekohotels.com, banquet@ekohotels.com

            </div>


            <div class="col-lg-3 col-sm-12 mt-5">
                Newsletter
                <br> <br>
                Subscribe to our email newsletter to receive updates and news.
            </div>
        </div>
        <div class="text-center mb-1">
            <div class="bg-warning mx-auto text-light " id="footer">
                <h2><b>THE COMPANY</b></h2>
            </div>
            <h2 class="bg-light">Copyright 2025 Marveluxe Apartment and Grills</h2>
        </div>



    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>