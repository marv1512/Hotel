<?php
// include("messagesession.php");

// include("spinner.php");



// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (trim(isset($_SESSION["name"])) === trim("ADMIN") && trim(isset($_SESSION["password"])) === trim("PASS")) {
//         header("location: hotelmessage.php");

//     }
//     // exit;
//     if (empty($_SESSION["name"]) || empty($_SESSION["password"])) {
//         $failed = "All field are required";
//     } else {
//         if (isset($_SESSION["name"]) !== trim($setname) && isset($_SESSION["password"]) !== trim($setpassword)) {
//             $success = "Username or password not correct";
//             var_dump($_SESSION);
//             var_dump($setname);
//             var_dump($setpassword);

//         }
//     }  # code...



// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card text-center">
                    <div class="card-head text-center mt-3">
                        <h3>Admin Login</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


                            <?php //isset($failed) ? $failed : $success; ?>




                        </div>


                        <form action="messagesession.php" method="post">

                            <label for="">Name
                            </label>
                            <input type="text" name="name" class="mt-3">
                            <br>
                            <label for=""> Password</label>
                            <input type="password" name="password" class="mt-3">
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
</body>

</html>