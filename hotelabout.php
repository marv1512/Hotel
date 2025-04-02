<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    /* .container {

        width: 100%;
        height: 100vh;

    } */



    .image {
        background-image: url(photo/aboutt.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 300px;
    }

    #font {
        font-size: 23px;
        margin-top: 50px;
    }

    .value {
        font-size: 23px;
    }

    #footer {
        width: 300px;

    }

    #navbar {
        position: fixed;
        z-index: 9;
    }

    .card {
        border: 2px solid blue;
    }

    .li {
        padding-left: 500px;
    }
</style>

<body>

    <div class="container-fluid fs-2 text-center mx-auto ">

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

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12 text-center mx-auto  p-1 ">
                <div class="card  fs-2  form-control">
                    <div class="image"></div>
                    <div class="card-head">
                        <h1>About Marveluxe Apartment and Grills</h1>
                    </div>
                    <div class="card-body p-1">
                        <b> Marveluxe Apartment & Grill is the most preferred hotel in West Africa and it's all about
                            the right
                            mix!
                            Located in the heart of Victoria Island and shielded from the hustle and bustle of the Lagos
                            metropolis, we offer our corporate clients and walk in guests a perfect blend of relaxation,
                            activities, and African tradition delicately infused to meet the highest international
                            standards.

                            Overlooking the Marveluxe Apartment & Grill Atlantic City and Ocean, it is just a 10-minute
                            drive to
                            the City Centre and
                            only 45minutes away from the Airport.

                            Our hotels are designed for your comfort and convenience. Your security is our primary
                            concern and
                            you'll find our customer care second to none.

                            Our hotel has taken important steps to live up to West Africa's future model in the
                            hospitality
                            sector. With the best conference and banqueting facilities, tastefully furnished to a
                            7000-seater
                            capacity, a world-class swimming pool, 824 excellently furnished rooms spread across 4
                            hotels:
                            Marveluxe Apartment & Grill
                            SIGNATURE, Marveluxe Apartment & Grill SUITES, Marveluxe Apartment & Grill, mostly with a
                            choice of
                            city and sea views. We
                            have 9 different restaurants and 7 different bars serving a range of international cuisines,
                            amongst
                            other facilities.

                            The hotel is equipped with a state of the art health and fitness centre comprising of a gym,
                            a
                            tennis/basket ball court, a volley ball court, a sauna, spa, salon, and nail studio. We have
                            an
                            in-house medical clinic as well.

                            We host the best themed buffet every Friday evening where we serve specialties across the
                            globe:
                            Africa, Asia, America, Italy, Mexico Middle East and Mongolia amongst others.

                            We are passionate about serving you and look forward to having you.

                            Welcome to Marveluxe Apartment & Grill, Nesting International Standards with African
                            Hospitality.
                        </b>
                    </div>
                </div>
                <!-- <div class="image"> Hello </div>
                <div class="shadow text-center mx-auto p-5" id="font">
                    <h1 class="mb-5"> About Marveluxe Apartment and Grills</h1>
                    Marveluxe Apartment & Grill is the most preferred hotel in West Africa and it's all about the right
                    mix!
                    Located in the heart of Victoria Island and shielded from the hustle and bustle of the Lagos
                    metropolis, we offer our corporate clients and walk in guests a perfect blend of relaxation,
                    activities, and African tradition delicately infused to meet the highest international standards.

                    Overlooking the Marveluxe Apartment & Grill Atlantic City and Ocean, it is just a 10-minute drive to
                    the City Centre and
                    only 45minutes away from the Airport.

                    Our hotels are designed for your comfort and convenience. Your security is our primary concern and
                    you'll find our customer care second to none.

                    Our hotel has taken important steps to live up to West Africa's future model in the hospitality
                    sector. With the best conference and banqueting facilities, tastefully furnished to a 7000-seater
                    capacity, a world-class swimming pool, 824 excellently furnished rooms spread across 4 hotels:
                    Marveluxe Apartment & Grill
                    SIGNATURE, Marveluxe Apartment & Grill SUITES, Marveluxe Apartment & Grill, mostly with a choice of
                    city and sea views. We
                    have 9 different restaurants and 7 different bars serving a range of international cuisines, amongst
                    other facilities.

                    The hotel is equipped with a state of the art health and fitness centre comprising of a gym, a
                    tennis/basket ball court, a volley ball court, a sauna, spa, salon, and nail studio. We have an
                    in-house medical clinic as well.

                    We host the best themed buffet every Friday evening where we serve specialties across the globe:
                    Africa, Asia, America, Italy, Mexico Middle East and Mongolia amongst others.

                    We are passionate about serving you and look forward to having you.

                    Welcome to Marveluxe Apartment & Grill, Nesting International Standards with African Hospitality.


                </div> -->

                <div class="value  fs-2 p-5">
                    <h2 class="mt-5">Our VISION & MISSION</h2>
                    <ul>
                        <li>We aspire to be the leading and preferred hotel in West Africa</li>
                        <li> We are committed to exceeding guests' expectations</li>
                        <li> We are dedicated to providing impeccable facilities and personalized services</li>
                        <li>We are proud to deliver genuine care, comfort and warmth to all our guests </li>
                        <li>We pursue growth and development through continuous learning </li>
                        <li> We are constantly adapting to an ever-changing world</li>
                        <li> Marveluxe Apartment & Suites... Nesting International Standards with African Hospitality
                        </li>
                    </ul>

                    <h2> Our Values</h2>
                    <ul>
                        <li>Commitment to Excellence</li>
                        <li>Pursuit of Growth</li>
                        <li>Genuine Care</li>
                        <li>Dedication</li>
                        <li>Creativity</li>
                        <li>Passion</li>
                        <li>Integrity and Discipline</li>
                        <li>Socially and Environmentally Responsible</li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="row mt-5 p-3 bg-dark text-white">
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

        <div class="text-center mb-2">
            <div class="bg-warning mx-auto text-light " id="footer">
                <h2><b>THE COMPANY</b></h2>
            </div>
            <h5>Copyright 2025 Marveluxe Apartment and Grills</h5>
        </div>




    </div>
    <script src="js/bootstrap.min.js"></script>
    </div>

</body>

</html>