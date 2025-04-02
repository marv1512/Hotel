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
                <form action="session.php" method="post">
                    <label for=""> name
                        <input type="text" name="username" required="required">
                    </label>
                    <!-- 
                    <label for=""> Email
                        <input type="email" name="email" required="required">
                    </label> -->

                    <!-- <label for=""> Phone number
                        <input type="phone" name="phone" required="required">
                    </label>

                    <label for=""> Address
                        <input type="address" name="address" required="required">
                    </label>

                    <label for=""> Password
                        <input type="password" name="password" required="required">
                    </label> -->

                    <button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>