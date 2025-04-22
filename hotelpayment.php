<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
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
.na {
    position: fixed;
    z-index: 9;
}

.card {
    border: 1px solid blue;
}
</style>

<body>
    <div class="container-fluid na">
        <div class="row">
            <div class="col-12">
                <div class="">
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
                                    <a class="nav-link" href="bookinglogin1.php"> <b>List a property</b> </a>
                                    <a class="nav-link float-end" href="hotelsignin.php"> <b> My Account</b> </a>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-sm-12 col-md-6 mt-5 mx-auto">
                <div class="card form-control my-5 mt-5">
                    <div class="card-head "></div>
                    <div class="card-body bg-info">
                        <div class="form-control bg-warning mb-3 text-center">
                            <h2> Please Reconfirm your details</h2>
                        </div>
                        <div class="form-control "><?= $name ?> </div>
                        <br>
                        <div class="form-control "><?= $email ?> </div>
                        <br>
                        <div class="form-control "><?= $phone ?> </div>
                        <br>
                        <div class="form-control "><?= $address ?> </div>
                        <br>


                    </div>
                </div>

                <div class="card">
                    <div class="card-head bg-info text-center">
                        <h2> <b>Booking Payment</b> </h2>
                    </div>
                    <div class="card-body  text-center ">

                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-primary btn-lg" data-bs-toggle="collapse" href="#collapseExample"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                Payment Method
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <h1> <b>Transfer Details</b></h1>
                                <h2> Marveluxe General Merchandise</h2>
                                <h3>8164420576</h3>
                                <h3>Moniepoint</h3>

                            </div>
                            <br>
                            <div class="card card-body">
                                <h1> <b>Crypto Wallet details</b></h1>
                                <h2>Here is the crypto wallet</h2>
                                <h3> ZRHJW73JFKJERHJWRHJ</h3>
                            </div>
                        </div>


                        <!-- <input type="radio" name="payment" value="Card">
                        <label for=""> <b>Card</b></label>


                        <input type="radio" name="payment" value="Crypto">
                        <label for=""> <b>Crypto</b> </label> -->
                        <h2 class="my-4 bg-warning"> Please select a payment method and send a copy of reciept to our
                            email once
                            payment is made
                        </h2>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                <h5>submit</h5>
                            </button>
                        </div>


                    </div>
                </div>
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