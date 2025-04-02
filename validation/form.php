<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2 mt-5 shadow">
                <div class="row mt-5 p-5">
                    <div class="col-sm-12 col-md-6">
                        <img width=300px
                            src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d6/Seal_of_delta_State.png/150px-Seal_of_delta_State.png"
                            alt="">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <form action="register.php" method="get">
                            <h2>Register an account</h2>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input required type="text" name="name" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                                <small id="helpId" class="text-muted">Enter your full name</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input required type="email" name="email" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                                <small id="helpId" class="text-muted">Enter a valid email address</small>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>