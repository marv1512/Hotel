<!-- <?php session_start();
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    .tab {
        box-shadow: 1px 2px 1px 2px grey;
    }

    .ri {
        box-shadow: 1px 2px 1px 1px grey;
    }

    .t1 {
        height: 300px;
        width: 20%;
        background-color: greenyellow;

    }

    .t2 {
        background-color: blue;
        width: 40%;
        color: white;
    }

    .t3 {
        width: 20%;
        background-color: yellow;
    }

    .t4 {
        width: 20%;
        color: white;
        background-color: red;
    }

    .hea {
        justify-items: center;
        background-color: orange;
    }
</style>

<body>



    <div class="container " class="tab">
        <div class="row mx-auto my-auto text-center">
            <div class="col-sm-12">
                <table class="table-bordered shadow rounded ">
                    <tr class="text-center">
                        <th colspan="3" class="hea"> Welcome to your exam portal</th>
                    </tr>

                    <tr>
                        <td class="t1"> <b> <a href="examsignup.php" method="Post"> Sign up for exam session</a> </b>
                        </td>
                        <td class="t2"> <b><a href="http://localhost/state/superglobals/datasetlogin.php"> Sign
                                    in</a></b>
                        </td>
                        <td class="t3"> <b>Check result</b></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="t4"><b> In creative thinking we can achieve our full potential</b>
                        </td>
                        <td> <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPYu-0rxB9IkPQGwggbXSog4MGG4mltxEuPg&s"
                                alt=""></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

</body>

</html>