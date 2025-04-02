<?php
include("messagefunction.php");
$messages = read("hotelformdb.txt");
$message = [];

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

<?php if (isset($_GET['section'])) {
    $get_section = $_GET['section'];

    $fetched = $messages[$get_section];
} ?>
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
        <div class="container">
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
    <img src="photo/aboutt.jpg" alt="" srcset="">
    <div class="container">
        <!-- <?= $success ? $success : null ?> -->
        <div class="row my-5">
            <div class="col-sm-12 col-md-6">
                <div class="list-group">
                    <?php if (count($messages)): ?>
                        <?php foreach ($messages as $key => $item): ?>

                            <a href="hotelmessage.php?section=<?= $key; ?>"
                                class="list-group-item list-group-item-action flex-column align-items-start "
                                aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3">
                                            <img src="fileimage/<?= $item["image"]; ?>" width="100px" height="100px" alt=""
                                                srcset="">
                                        </div>
                                        <div class="col-sm-12  col-md-9">
                                            <h5 class="mb-1 mx-5"><?= $item['name']; ?></h5>
                                            <small class="text-muted mx-5"><?= $item['email']; ?></small>
                                        </div>
                                    </div>
                                    <!-- <form action="" method="post" enctype="multipart/form-data">
                                        <input type="file" name="room">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>

                                    </form> -->

                                </div>
                                <p class="mb-1"><?= substr($item['message'], 0, 50) ?></p>
                            </a>
                        <?php endforeach ?>
                    <?php else: ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>No messages has been received yet</strong>
                        </div>
                    <?php endif ?>
                </div>


            </div>

            <div class="col sm-12 col-md-6">
                <?php if (!empty($message)): ?>
                    <div class="div-flex justify-content-between">
                        <h4>Sender's name</h4>
                        <a name="" id="" class="btn btn-warning" href="#" role="button">DELETE </a>
                    </div>
                    <h6>senders email</h6>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, facere!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, iste! Veniam fuga minus incidunt hic
                        laborum earum suscipit pariatur unde.
                    </p>

                <?php else: ?>
                    <?php if (count($messages)): ?>
                        <p>Please select any of the messages</p>
                        <p><?= $fetched['name']; ?></p>
                        <img src="fileimage/<?= $fetched["image"]; ?>" width="100px" height="100px" alt="" srcset="">
                        <div class="col-sm-12 col-md-3">
                            <p><?= $fetched['email']; ?></p>
                            <p><?= $fetched['message']; ?></p>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        </div>

</body>

</html>