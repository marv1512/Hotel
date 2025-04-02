<?php



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
    #input {
        border-radius: 10px;
    }
</style>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto">
                .<div class="card text-start shadow">
                    <img class="card-img-top"
                        src="https://devimages-cdn.apple.com/wwdc-services/articles/images/3D5F5DD3-14F7-4384-94C0-798D15EE7CD7/2048.jpeg"
                        alt="Title" />
                    <div class="card-body mx-auto">
                        <h4 class="card-title">Gamer user login</h4>
                        <p class="card-text">

                        <form action="gamesession.php" method="post">
                            <input type="text" name="username" placeholder="Enter username" class="shadow" id="input">

                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>

                        </form>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>