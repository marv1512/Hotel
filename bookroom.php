<?php
session_start();
include("roomfunction.php");
$messages = read("room.txt");
// var_dump($_SESSION);

if (isset($_GET["book"])) {
    $book = $_GET["book"];
    $booked = $messages[$book];
}
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
    .shadow {
        border-radius: 10px;
        border: 3px solid blue;
    }

    .na {
        position: fixed;
        z-index: 9;
    }

    .pic {
        width: 100%;
    }
</style>

<body>
    <div class="container-fluid na ">
        <div class="row">
            <div class="col-12">
                <div class="fs-2">
                    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="hotelupdate.php"> <b>MARVELUXE APARTMENT & GRILLS</b> </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
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
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid fs-4    ">
        <div class="row p-1  ">

            <div class="col-sm-12 col-md-6 col-lg-3 mt-5 mx-auto">
                <div class="card mt-5 ">
                    <div class="card-head">
                        <h1 class="text-center bg-warning"> <b> Please fill in the info to make a booking</b></h1>

                    </div>
                    <div class="card-body  bg-info shadow">
                        <form action="hotelpayment.php" method="post">
                            <label for=""> Name</label>
                            <input type="Name" name="name" class="form-control">
                            <br>
                            <label for=""> Email</label>
                            <input type="email" name="email" class="form-control">
                            <br>
                            <label for=""> Phone number</label>
                            <input type="phone" name="phone" class="form-control">
                            <br>
                            <label for=""> Address</label>
                            <input type="Address" name="address" class="form-control">
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mx-auto">
                                    <h3 class=""> Continue to payment method</h3>
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-9 mx-auto text-center">
                <?php for ($i = 0; $i < 1; $i++): ?>
                    <div class="card mx-auto mt-5">
                        <div class="card-head w-100 bg-info">
                            <div class="mt-5">
                                <h1 class="text-center"> Available room <?= $i ?></h1>
                            </div>
                        </div>
                        <!-- <div class="card-image"></div> -->

                        <div class="card-body">
                            <div class="shadow p-2 d-lg-block d-sm-block d-md-block  ">
                                <div><img src="fileimage/<?= $booked["image"] ?>" width="" class="pic " height="" alt=""
                                        srcset="">
                                </div>
                                <div class="text-center">
                                    <H2 class="mx-5"> Room type: <b class="text-primary"> <?= $booked["roomname"] ?></b>
                                    </H2>
                                </div>
                                <div class="divide d-flex  text-center mx-auto">
                                    <div class="col-md-6  col-sm-12">

                                        <h4 class="my-2"><?= $booked["description"] ?></h4>

                                        <br>

                                        <h3> All deluxe rooms feature a personal safe, minibar and a working desk</h3>

                                        <ul>
                                            <li>Room: 29.68 m2 </li>
                                            <li> Bathroom: 6.82 m2</li>

                                        </ul>
                                        <br>


                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h2>Room feature</h2>
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
                                        <h3 class="mt-5"> Price: <?= $booked["price"] ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php endfor ?>
            </div>



            <div class="row">

            </div>

        </div>

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
        <div class="text-center mb-5">
            <div class="bg-warning mx-auto text-light " id="footer">
                <h2><b>THE COMPANY</b></h2>
            </div>
            <h5>Copyright 2025 Marveluxe Apartment and Grills</h5>
        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>