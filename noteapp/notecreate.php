<?php
// if (empty($_POST["title"]) || empty($_POST["content"]) || empty($_POST["date"])) {
//     header("location:notecreate.php");
// }

include("notedb.php");
session_start();

// if ($_SERVER["REQUEST_METHOD"] !== "POST") {
//     header("location: notelogin.php");
// } else {
//     header("location:notecreate.php");
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    #cont {
        width: 100vw;
    }
</style>

<body>
    <div class="container mx-auto" id="cont">


        <div class="row mx-auto">
            <div class="col-sm-12 col-md-6 ">
                <?php
                if (isset($_SESSION["mess"])) {
                    echo "<div class='alert alert-danger'> " . $_SESSION["mess"] . " </div>";

                } else {
                    echo null;
                }
                ?>

                <div class="alert alert-success" role="alert">
                    <strong> Login success</strong> <?php echo " Welcome" . $_SESSION["name"]; ?>
                </div>

                <div class="card text-start bg-warning">

                    <div class="card-head">
                        <h1 class="card-title text-center bg-danger">Create a note</h1>
                    </div>

                    <div class="card-body">

                        <p class="card-text">

                        <form action="notesave.php" method="POST">
                            <div class="text-center">
                                <label for="">
                                    <h3>Title:</h3>
                                </label>
                                <input type="text" name="title" class="shadow rounded-pill">
                            </div>
                            <div class="mt-3 text-center">
                                <label for="">
                                    <h3>Date:</h3>
                                </label>
                                <input type="date" name="date" class="shadow rounded-pill">
                            </div>

                            <div class="mt-3 text-center">
                                <label for="">
                                    <h3>Content:</h3>
                                </label>
                                <textarea name="content" id="" placeholder="Please fill in the content"
                                    class="shadow"> </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 float-end">
                                Save
                            </button>

                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php unset($_SESSION["mess"]) ?>

</body>

</html>