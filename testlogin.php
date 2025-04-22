<?php
$data = [
    [
        "Username" => "emma",
        "password" => "emma"
    ]

];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($data as $key => $value) {


        if ($username == $value["Username"] && $password == $value["password"]) {
            $success = "Correct username";
            header("location: hotelupdate.php");
        } else {
            $failed = "incorrect username or password";

        }
    }
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
    .dd {
        justify-items: center;
        align-content: center;
        margin-top: 200px;
    }

    #bord {
        border: 1px solid blue;

    }

    .card {
        border: 1px solid gray;
    }

    body {
        background-image: url(photo/home-about.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>

    <div class="dd">
        <div class="card fs-5">
            <div class="card-head text-center bg-warning">
                <h2><b> Hotel Login</b></h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?= $success ?? null ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>Wrong credentials!</strong>
                        <?= $failed ?? null ?>
                    </div>


                    <label for=""> Username</label>
                    <input type="text" name="username" class="form-control " id="bord">
                    <br>

                    <label for=""> Password</label>
                    <input type="password" name="password" class="form-control " id="bord">
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" id="bord">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
            <div class="card-footer text-center">
                <h4> Copyright of Marveluxe Apartment & Grills</h4>
            </div>
        </div>
        <?php unset($failed); ?>
    </div>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>