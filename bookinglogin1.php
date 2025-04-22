<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
/* .bg-primary {
    height: 10vh;
    width: 100vw;
} */

.bg-inf {
    height: 70vh;
    width: 100%;
}

#main {
    height: 100%;
    width: 100%;
}

.card {
    width: 500px;
    height: 50%;
}

.bord {
    border: 2px solid blue;
}

.na {
    width: 100%;
}

#navbar {
    position: fixed;
    z-index: 9;

}
</style>

<body>



    <div class="container-fluid mx-auto " id="main">

        <div class="row">
            <div class="col-sm-12 col-md-6 bg-succes   ">
                <div class="na w-100 fs-4  ">
                    <nav id="navbar" class="navbar  na navbar-expand-lg bg-info ">
                        <div class="container-fluid bg-info">
                            <a class="navbar-brand" href="hotelupdate.php"> <b>MARVELUXE APARTMENT & GRILLS</b> </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
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

        <div class="row mt-5 ">
            <div class="col-sm-12 col-md-6 mt-5  mx-auto">
                <div class="bg-inf mx-auto  mt-5 ">

                    <div class="card  border-0 mx-auto mt-5">
                        <div class="card-head mx-3">
                            <h3> <b>Create your partner account</b></h3>
                            <br>
                            <span>Create an account to list and manage your property.</span>
                        </div>
                        <div class="card-body">
                            <form action="bookinglogin2.php" method="post">
                                <label for=""> <b>Email address </b> </label>

                                <input type="text" class="form-control form-control-lg  bord">
                                <br>


                                <button type="submit" class="btn btn-primary btn-lg form-control">
                                    Continue
                                </button>

                                <hr>




                                <div class=" mb-3">
                                    <span>
                                        Questions about your property or the Extranet? Check out Partner Help or ask
                                        another partner in the Partner Community.
                                    </span>

                                </div>

                                <button type=" submit" class="btn btn-light btn-lg form-control bord">
                                    <b class="text-primary"> Sign in</b>
                                </button>
                                <hr>
                                <div class="text-center">
                                    <span>
                                        By signing in or creating an account, you agree with our Terms & Conditions and
                                        Privacy Statement
                                    </span>
                                    <br>
                                    <span>
                                        All rights reserved.
                                    </span>
                                    <br>
                                    <span>Copyright (2006-2025) – Booking.com™</span>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </div>

</body>

</html>