<?php


// include("spinner.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $photoname = $_FILES["room"];
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

    include("roomfunction.php");
    $roomname = $_POST["roomname"];
    $description = $_POST["description"];
    $price = $_POST["price"];


    if (validate($roomname) && validate($description)) {
        $result = save($roomname, $description, $image, $price);
        $success = "Your message has been sent successfully";

    } else {
        $error = "Please input all of the field";
    }
}



// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (trim(isset($_SESSION["name"])) === trim("ADMIN") && trim(isset($_SESSION["password"])) === trim("PASS")) {
//         // header("location: hotelmessage.php");
//         $success = "Login Successful";

//     }
//     // exit;
//     if (empty($_SESSION["name"]) || empty($_SESSION["password"])) {
//         header("location: messagelogin.php");
//         exit;
//     } else {
//         if (isset($_SESSION["name"]) !== trim($setname) && isset($_SESSION["password"]) !== trim($setpassword)) {
//             header("location: messagelogin.php");

//         }
//     }



// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container w-100 ">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <img class="w-100" height="300px" src="photo/admin.jpg" alt="" srcset="">
    <div class="container w-100 mx-auto">

        <div class="row my-5 mx-auto">
            <div class="col-sm-12 col-md-6 mx-auto">


                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <?= $success ? $success : null ?>
                </div>


                <div class="card">
                    <div class="card-head">
                        <h2 class="text-center bg-info"> Room Upload</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for=""> Room Type</label>
                            <input type="text" class="form-control mt-2" name="roomname" placeholder="Roomname">
                            <br>
                            <label for=""> Room Description</label>
                            <input type="text" class="form-control mt-2" name="description" placeholder="Description">
                            <br>
                            <label for=""> Room price</label>
                            <input type="number" name="price" class="form-control mt-2">
                            <br>
                            <label for=""> Room Photo</label>

                            <input type="file" class="form-control mt-2" name="room">
                            <br>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>

                        </form>

                    </div>
                    <div class="card-footer"></div>
                </div>


            </div>


        </div>


    </div>


    </div>
    </div>

</body>

</html>