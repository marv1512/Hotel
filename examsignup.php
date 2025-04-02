<?php
include("examsignupfunction.php");


// if (empty($_POST["email"]) || empty($_POST["password"])) {
//     $_SESSION["error"] = "Please fill in all the field";
//     header("location: examsignup.php");
//     exit;
// }
$data = fopen("examinfo.txt", "a+");

$db = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    if (exists($email)) {
        if (valid_password($password)) {
            $write = fwrite($data, "$password\n");
            if (email_exists($email)) {
                $email_input = $email;
                $password_input = $password;
                $email_error = "email is already in use";
            } else {
                $write = fwrite($data, "$email\n");

                return;
            }
        } else {
            $email_input = $email;
            $password_input = $password;
            $password_error = "Password is required and must be 6 characters";
        }
    } else {
        $email_input = $email;
        $password_input = $password;
        $email_error = "Email is required";
    }



}
// $write = fwrite($data, "$email\n");

// $write = fwrite($data, "$password\n");

fclose($data);




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
    .one {
        margin-top: 10px;
    }

    .container {
        background-image: url(https://www.euroschoolindia.com/wp-content/uploads/2023/06/study-tips-for-final-exams.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 800px;
    }
</style>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">



                <div class="card bg-secondary shadow my-5">
                    <div class="card-head text-center">
                        <h2>Sign up</h2>
                    </div>
                    <div class="card-body text-center">
                        <form action="" method="post">


                            <div class="one">
                                <label for=""> Email</label>
                                <input type="email" value="<?= $email_input ?? null; ?>" name="email" required>
                                <span style="color:red"><?= $email_error ?? null ?></span>
                            </div>
                            <div class="one">
                                <label for=""> Password</label>
                                <input type="password" value="<?= $password_input ?? null; ?>" name="password" required>
                                <span style="color:red"><?= $password_error ?? null ?></span>
                            </div>

                            <div class="one">
                                <button type="submit" class="btn btn-primary">
                                    Sign Up
                                </button>
                                <a href="examlogin.php" method="post" class="text-primary"> sign in</a>
                            </div>







                        </form>
                    </div>
                </div>

            </div>
        </div>
        <?php unset($_SESSION["error"]); ?>
    </div>
</body>

</html>