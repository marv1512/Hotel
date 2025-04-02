<?php
include("roomfunction.php");
$messages = read("room.txt");

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
    .divide {
        display: flex;
    }

    /* .container {
        background-image: url(photo/home-about.jpg);
        background-repeat: no-repeat;
        background-size: contain;
    } */
</style>

<body>
    <div class="row  w-100">

        <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary w-100">
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
    <div class="container w-100 ">
        <div class="row w-100  ">
            <div class="col-sm-12 col-md-6 mx-auto">
                <?php $num = 1 ?>
                <?php foreach ($messages as $item): ?>
                    <div class="mt-5">
                        <h1 class="text-center"> Available room <?= $num++ ?></h1>
                    </div>

                    <div class="shadow p-3 ">
                        <div> <img src="fileimage/<?= $item["image"] ?>" class="w-100" alt="" srcset="">
                        </div>
                        <div class="text-center">
                            <H2> Room type: <?= $item["roomname"] ?></H2>
                        </div>
                        <div class="divide">
                            <div class="col-md-9">

                                <h4 class="my-2"><?= $item["description"] ?></h4>

                                <br>

                                <h5> All deluxe rooms feature a personal safe, minibar and a working desk</h5>

                                <ul>
                                    <li>Room: 29.68 m2 </li>
                                    <li> Bathroom: 6.82 m2</li>

                                </ul>
                                <br>
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Book room
                                </button>

                            </div>
                            <div class="col-md-3">
                                <h3>Room feature</h3>
                                Double king bed
                                <br>
                                Breakfast
                                <br>
                                Air conditioning
                                <br>
                                Mini bar
                                <br>
                                Wi-Fi service
                                <br>
                                Free parking
                                <br>
                                <h3 class="mt-5"> Price: <?= $item["price"] ?></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <div class="row mt-5 p-2 bg-dark text-white w-100">
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

    <div class=" row text-center mb-1 w-100">
        <div class="bg-warning w-100 mx-auto text-light " id="footer">
            <h2><b>THE COMPANY</b></h2>
        </div>
        <h5 class="mb-5">Copyright 2025 Marveluxe Apartment and Grills</h5>
    </div>


</body>

</html>