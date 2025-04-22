<?php
include("hotelsession.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (isset($email) && isset($password) && isset($name)) {
        $file = fopen("hotelfile.txt", "a+");

        $write = fwrite($file, "$name\n$email\n$password\n");
        fclose($file);

        $success = "Welcome:" . "" . $name;
    } else {
        $failed = "Please fill the form";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="nav.css">
</head>
<style>
.card-head {
    background-color: #0DCAF0;

}

.card-footer {
    background-color: #0DCAF0;
}

#navbar {
    position: fixed;
    z-index: 9;
}

.body {}
</style>

<body>
    <div class="row w-100 ">
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
                        <a class="nav-link" href="bookinglogin1.php"> <b>List a property</b> </a>
                        <a class="nav-link float-end" href="hotelsignin.php"> <b> My Account</b> </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid fs-2 ">
        <?php include("spinner.php") ?>


        <!-- end of navbar -->

        <div class="row mx-auto w-100 ">
            <div class="col-md-12 bg-dark">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1000">
                            <img src="photo/eko-slide3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="photo/eko-slide4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="photo/eko-slide1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row bg-dark p-5 text-white w-100 mx-auto ">
            <div class="col-3"> ARRIVAL DATE
                <br>
                Arrival date
            </div>

            <div class="col-3"> DEPARTURE DATE
                <br>
                Departure date
            </div>

            <div class="col-3"> ADULTS
                <br> 0 Adult
            </div>
            <div class="col-3"> CHILDREN'
                <br> 0 Child
            </div>

        </div>

        <div class="row  bg-dark w-100 text-center text-white mx-auto mb-5">
            <div class="col-12 ">
                <a href="hotelbooking.php"> <button class="btn btn-danger ps-5 pe-5 p-3 mb-5 border-secondary"> CHECK
                        AVAILABILITY</button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="text-center"> WELCOME TO MARVELUXE APARTMENT AND GRILLS</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-lg-0 mb-5">
                <img src="photo/home-about.jpg" class="col-md-11 col-12">
            </div>
            <div class="col-md-6 ">
                <div class="card shadow border-0 p-4 col-md-11 col-12">
                    <div class="card-body">
                        <h5 class="card-title"> About Us</h5>
                        <p class="card-text">
                        <h3> The Most Preferred Hotel in West Africa</h3>.
                        Eko Hotels & Suites is the most preferred hotel in West Africa, and it is all about the right
                        mix! Located in the heart of Victoria Island, we offer our clients a perfect blend of business &
                        leisure amenities with dining and recreational options delicately infused in one amazing space.
                        We crown all these with services that meet the highest international standards. Overlooking the
                        new Eko Atlantic City and Atlantic Ocean, it is just a 10-minute drive to the City Centre and
                        only 45minutes away from the Airport.

                        Our hotels are designed for your comfort and convenience. Your security is our primary concern
                        and you will find our customer care second to none.</p>
                        <a href="#" class="btn btn-primary"> Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center mb-5"> Our Hotel</h1>
        <div class="row mb-3">
            <div class="col-md-6"> <img src="photo/eko-gardens.jpg" class="col-lg-12 col-md-12 col-12"></div>
            <div class="col-md-6"> <img src="photo/eko-hotel.jpg" class="col-lg-12 col-md-12 col-12"></div>


        </div>


        <div class="row mb-5">
            <div class="col-md-6"> <img src="photo/eko-suites.webp" class=" col-lg-12 col-md-12 col-12" alt=""></div>
            <div class="col-md-6"> <img src="photo/eko-signature.webp" class=" col-lg-12 col-md-12 col-12" alt=""></div>


        </div>

        <h2 class="text-center mb-5"> View All hotel</h2>

        <div class=" container-fluid bg-dark p-5 mb-5">
            <div class="text-white text-center mb-5 ">
                <h2>Recreational Services </h2>
            </div>
            <div class="row bg-dark mb-5 ">

                <div class="col-lg-6 col-sm-12 ">
                    <div class="card border border-secondary mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="photo/gym.webp" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title"> Gymnasium</h3>
                                    <p class="card-text"> Our well-Equipped gym with Sauna room are accessible to our in
                                        house fit fam Junkies, and come with available instructor</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 ">
                    <div class="card border border-secondary mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="photo/swimming-pool.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title"> Swimming Pool</h3>
                                    <p class="card-text"> Additional perk on being an in house guest is to enjoy a day
                                        or night time swim. Access to the pool for outside guests are at additional cost
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 shadow">
                <div class="card" style="width: 20rem; border: none;">
                    <img src="photo/sky-restaurant.jpg" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title">THE SKY RESTAURANT</h3>
                        <p class="card-text">Situated at the tallest Penthouse of Eko Hotel, the Sky Restaurant has a
                            'wow' factor that is hard to dispute. It's a...</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 shadow">
                <div class="card" style="width: 20rem; border: none;">
                    <img src="photo/88-restaurant.jpg" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title">ATARODO</h3>
                        <p class="card-text">The Atarodo is an infusion of afro-centric food culture. The menu is the
                            brain-child of our British Nigerian c...</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 shadow">
                <div class="card" style="width: 20rem; border: none;">
                    <img src="photo/lagoon-breeze.jpg" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title"> LAGOON BREEZE</h3>
                        <p class="card-text">Located by the swimming pool, the Lagoon Breeze Restaurant is loved by
                            those who know Lagos and appreciate nicely pre..</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <h2 style="transform: rotate(360deg); margin-top: 200px; font-size: 50px ;"> MARVELUXE</h2>

            </div>

        </div>


        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 text-center shadow">
                <h2 style="transform: rotate(360deg); margin-top: 200px; font-size: 50px ;"> GRILL</h2>
            </div>


            <div class="col-lg-3 col-md-6 shadow">
                <div class="card" style="width: 18rem; border: none;">
                    <img src="photo/calabash-bar.jpg" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title"> Calabar Bar</h3>
                        <p class="card-text">While watching a game on one of Kuramo Sports Café’s huge plasma screens,
                            you can enjoy the best buffet in Lagos!</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 shadow">
                <div class="card" style="width: 18rem; border: none;">
                    <img src="photo/lagos-irish-pub.webp" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title"> LAGOS IRISH</h3>
                        <p class="card-text">Lagos Irish Pub is a charming wooden traditional pub with live music and an
                            outdoor patio. Enjoy a pint and a large s...</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 shadow">
                <div class="card" style="width: 18rem; border: none;">
                    <img src="photo/red-chinese-restaurant.jpg" class="card-img-top" alt="..." style="width: 350px;">
                    <div class="card-body">
                        <h3 class="card-title"> RED CHINESE</h3>
                        <p class="card-text">RED Chinese Restaurant & Lounge offers a unique dining experience in the
                            day time and becomes the perfect night Loung...</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>

        </div>

        <h2 class="text-center"> Our gallery</h2>

        <div class="row">
            <div class=" col-lg-3 col-md-3 col-12"> <img src="photo/gallery_img1.jpg" width="350px" height="250px">
            </div>
            <div class=" col-lg-3 col-md-3 col-12"> <img src="photo/gallery_img2.jpg" width="350px" height="250px"
                    alt=""></div>
            <div class="col-lg-3 col-md-3 col-12"> <img src="photo/gallery_img3.jpg" width="350px" height="250px"
                    alt=""></div>
            <div class="col-lg-3 col-md-3 col-12"> <img src="photo/gallery_img4.jpg" width="350px" height="250px"
                    alt=""></div>


        </div>

        <div class="row mt-5">
            <div class="col-md-6 p-5 shadow mx-auto">
                <div class="card">
                    <div class="card-head">
                        <h3 class="text-center  p-4">
                            Sign Up to make reservation and get our special offers
                        </h3>
                    </div>
                    <div class="card-body shadow text-center">
                        <form action="hotelsession.php" method="Post">
                            <div class="mb-3">
                                <label for="exampleInputname1" class="form-label ">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputtext1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div class="text-center mx-auto">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Copyright 2025 Marveluxe Apartment and Grills
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 p-3 bg-dark  text-white">
            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
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

            <div class="col-sm-12 col-md-6 col-lg-6 mt-5 text-center">
                Plot 1415 Adetokunbo Ademola Street, PMB 12724, Victoria Island, Lagos Nigeria
                <br> <br>
                International Calls: +234 201 2772700, National Calls: 0201 2772700
                <br> <br>
                Fax: +234 1 2704071
                <br> <br>
                sales@ekohotels.com, reservation@ekohotels.com, banquet@ekohotels.com

            </div>


            <div class="col-sm-12 col-md-3 col-lg-3 mt-5">
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
        <script src="js/bootstrap.min.js"></script>
    </div>

</body>

</html>