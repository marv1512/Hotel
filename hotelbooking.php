<?php
session_start();
include("roomfunction.php");
$messages = read("room.txt");
// var_dump($_SESSION);
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
        /* background-image: url(photo/home-about.jpg); */
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100vw;
    }

    /* .pic {
       
    } */

    #navbar {
        /* position: fixed; */
    }

    /* #flow {
      
        width: 60%;
        height: 100%;
    } */
    /* 
    @media screen and (max-width: 450px) {
        .flow {
            width: 100vw;
            display: block;

        }

      
    } */
    .card {
        /* width: 450px; */
        width: 100%;
        align-items: center;
    }

    @media screen and (min-width: 451px) {
        .flow {
            width: 60%;

        }
    }




    .divide {
        /* width: 700px; */
    }

    .shadow {
        border-radius: 15px;
        border-color: aqua;
        border: 2px solid blue;
    }

    .pic {
        width: 100%;
        border-radius: 10px;
    }

    /* .footer {
    width: 100%;
} */
    .na {
        position: fixed;
        z-index: 9;
    }
</style>


<body>

    <div class="container-fluid  fs-2">
        <div class="row ">
            <div class="col-12 na">
                <div>
                    <div>
                        <h3> <?= $success ?? null; ?></h3>
                    </div>
                    <nav id="navbar" class="  navbar navbar-expand-lg bg-body-tertiary">
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
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5  fs-3 ">
        <div class="row   p-3">
            <div class="col-sm-12 col-md-6 col-lg-3 mx-auto  p-1 mt-5">
                <div class="card shadow  mt-5">
                    <div class="card-head text-center  w-100 bg-info">
                        <h2> Welcome <?= strtoupper($_SESSION["name"]) ?></h2>
                        <h3>Please kindly fill in the form for your booking</h3>
                    </div>
                    <div class="card-body w-100 bg-info">
                        <form action="" method="post">
                            <label for=""> How many nights do you intend to stay</label>
                            <input type="date" name="date" class="my-2 form-control shadow">
                            <br>
                            <div>
                                <div class="text-center text-light">
                                    <label for=" " class="form-label text-center">
                                        <h3> Number of guest</h3>
                                    </label>
                                </div>
                                <br>
                                <label for="" class="form label">Adult:</label>
                                <input type="number" name="adult" placeholder="adult" class="my-2 form-control shadow">
                                <br>
                                <label for=""> Children:</label>
                                <input type="number" name="children" class="my-3 form-control shadow">

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary shadow">
                                    <h3>Submit</h3>
                                </button>
                                <br>
                                <a href="hotellogout.php"> <button class="bg-danger text-light mt-3  shadow">
                                        logout</button></a>
                            </div>


                        </form>


                        <div class="card-footer bg-info mt-2">
                            Copyright 2025 Marveluxe Apartment and Grill
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-9 col-sm-12 col-md-6 d-sm-block mx-auto mt-5 p-1" id="flow">
                <?php $num = 1 ?>
                <h2 class="mb-3 text-center">This is the Available number of room: <?= count($messages); ?></h2>
                <?php foreach ($messages as $key => $item): ?>
                    <div class="card mx-auto">
                        <div class="card-head w-100 bg-info">
                            <div class="mt-5">
                                <h1 class="text-center"> Available room <?= $num++ ?></h1>
                            </div>
                        </div>
                        <!-- <div class="card-image"></div> -->

                        <div class="card-body">
                            <div class="shadow p-2 d-lg-flex d-sm-block d-md-block  ">
                                <div><img src="fileimage/<?= $item["image"] ?>" width="" class="pic" height="400px" alt=""
                                        srcset="">
                                </div>
                                <div class="text-center">
                                    <H2 class="mx-5"> Room type: <b class="text-primary"> <?= $item["roomname"] ?></b></H2>
                                </div>
                                <div class="divide d-flex  text-center mx-auto">
                                    <div class="col-md-6  col-sm-12">

                                        <h4 class="my-2"><?= $item["description"] ?></h4>

                                        <br>

                                        <h3> All deluxe rooms feature a personal safe, minibar and a working desk</h3>

                                        <ul>
                                            <li>Room: 29.68 m2 </li>
                                            <li> Bathroom: 6.82 m2</li>

                                        </ul>
                                        <br>
                                        <a href="bookroom.php?book=<?= $key ?>"><button type="submit"
                                                class="btn btn-lg btn-primary">
                                                Book room
                                            </button></a>

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
                                        <h3 class="mt-5"> Price: <?= $item["price"] ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php endforeach ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12   text-center">
                <button class=" btn btn-lg my-3 rounded-pill bg-success text-light">
                    <h2>List your property</h2>
                </button>
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
        <div class="text-center mb-2">
            <div class="bg-warning mx-auto text-light " id="footer">
                <h2><b>THE COMPANY</b></h2>
            </div>
            <h5>Copyright 2025 Marveluxe Apartment and Grills</h5>
        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>