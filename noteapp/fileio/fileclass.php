<?php

// $project = "My name is emmanuel and i like football hhjerjfwkjfwjfwfwfkkjfewfjkf
//  god is goo god is peace";
// $input = $_POST["find"];
// $rep = $_POST["replace"];
// $find = substr_count($project, $input);
// $replace = substr_replace($input, $rep, $project);
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
    /* .project {
        width: 650px;
        height: 500px;
    } */

    /* .container {
        width: 800px;
        height: 900px;
    } */

    /* .sec {
        display: flex;
    } */

    .t {
        border-radius: 5px;
    }

    .project {
        height: 200px;
        width: 400px;
    }
</style>

<body>

    <div class="container">
        <div class="row text-center bg-success mx-auto my-5 shadow">
            <div class="col-sm-12 col-md-6 mx-auto text-light shadow">
                <form action="fileanswer.php" method="post">
                    <div class="text-center">
                        <input type="text" name="content" class="project my-2 rounded-pill shadow">
                    </div>

                    <div class="sec ">
                        <label for=""> Find</label>
                        <input type="text" name="find" value="" class=" t shadow">
                        <label for=""> Replace</label>
                        <input type="text" name="replace" class="t shadow">

                    </div>
                    <div class="mt-2 mx-auto mb-2">
                        <button type="submit" class="btn btn-primary shadow">
                            Submit
                        </button>
                    </div>



                </form>
            </div>
        </div>
    </div>



</body>

</html>