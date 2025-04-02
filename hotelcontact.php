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


    #left {
        border: 3px solid black;
    }

    #navbar {
        position: fixed;





    }

    .card {
        border: 2px solid blue;
    }

    .shadow {
        border: 2px solid blue;
    }

    .question {
        height: 120px;

    }

    .h1 {
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class="container-fluid fs-2">
        <div class="row">
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
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div id="photo"> COntact us</div>
                <div class="text-center bg- shadow rounded-pill mt-5  question">
                    <h1 class="my-3"> <b>If you have any questions don't hesitate to contact us.</b> </h1>
                </div>
            </div>
        </div>


        <div class="row fs-2 my-5 p-1">



            <div class="col-lg-8 col-md-8 col-sm-12 my-5 mx-auto">
                <div class="card fs-1 bg-info shadow">
                    <div class="card-head"></div>
                    <div class="card-body">
                        <fieldset>
                            <legend class="text-center bg-warning">
                                <h2>Get in Touch</h2>
                            </legend>
                            <form action="" method="post">
                                <input type="text" class="form-control shadow" placeholder="Name">
                                <br>
                                <input type="email" class="form-control shadow" placeholder="Email">
                                <br>
                                <input type="phone" class="form-control shadow" placeholder="Phone">
                                <input type="text" class="form-control mt-2 shadow" placeholder="Subject">
                                <textarea name="content" id="" class="form-control shadow mt-2"
                                    placeholder="Please Enter your message"></textarea>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary shadow mt-1">
                                        <h2> Send Message</h2>
                                    </button>
                                </div>

                            </form>
                        </fieldset>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-5 mx-auto">
                <div class="card shadow ">
                    <div class="card-head">
                        <h2 class="text-center bg-info"> INFORMATION</h2>

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



        <div class="row fs-3 mt-5     bg-dark text-white">
            <div class="col-lg-3 col-sm-12 col-md-3 mt-5">
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

            <div class="col-lg-6 col-sm-12 col-md-6 mt-5">
                Plot 1415 Adetokunbo Ademola Street, PMB 12724, Victoria Island, Lagos Nigeria
                <br> <br>
                International Calls: +234 201 2772700, National Calls: 0201 2772700
                <br> <br>
                Fax: +234 1 2704071
                <br> <br>
                sales@ekohotels.com, reservation@ekohotels.com, banquet@ekohotels.com

            </div>


            <div class="col-lg-3 col-sm-12 col-md-3 mt-5">
                Newsletter
                <br> <br>
                Subscribe to our email newsletter to receive updates and news.
            </div>
        </div>

        <div class="row fs-3 mb-4">
            <div class=" col-sm-12 col-md-12 col-lg-12 text-center ">
                <div class="bg-warning mx-auto text-light " id="footer">
                    <h2><b>THE COMPANY</b></h2>
                </div>
                <h5 class="fs-3">Copyright 2025 Marveluxe Apartment and Grills</h5>
            </div>
        </div>




        <script src="js/bootstrap.min.js"></script>
    </div>

</body>

</html>