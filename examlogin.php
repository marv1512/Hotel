<?php




$data = fopen("examinfo.txt", "r");

fread($data, filesize($data));

if ($email == $_POST["name"] && $password == $_POST["password"]) {
    echo "successful";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto text-center mt-5">

                <div class="card shadow border-success mx-auto" style="width: 20rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPYu-0rxB9IkPQGwggbXSog4MGG4mltxEuPg&s"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Please fill in the details</h5>
                        <form action="" method="post">
                            <label for=""> Name</label>
                            <input type="text" name="name" required="required" placeholder="Enter name"
                                class="form-control">


                            <label for=""> Password</label>
                            <input type="password" name="password" required="required" placeholder="Enter password"
                                class="form-control">
                            <button type="submit" class="btn btn-primary mt-3">
                                Submit
                            </button>

                        </form>


                    </div>
                </div>




                </form>

            </div>
        </div>
    </div>
</body>

</html>