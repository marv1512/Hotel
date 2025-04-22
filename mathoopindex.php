<?php

include("mathsoop.php");
if ($_SERVER['REQUEST_METHOD']== "POST") {
   $x= $_POST["num1"];
   $y= $_POST["num2"];
   $operator= $_POST["operator"];


   
   
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
.shado {
    border: 1px solid blue;
}
</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-12 col-sm-12 col-md-6 d-flex">

                <div class="mx-auto col-lg-4 ">
                    <div class="card shado">
                        <div class="card-head text-light text-center bg-primary">
                            <h3>Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">

                                <label for=""> Input the first number</label>
                                <input type="text" name="num1" class="form-control form-control-lg shado">
                                <label for=""> Input second number</label>
                                <input type="text" name="num2" class="form-control form-control-lg shado">

                                <label for=""> Operator task</label>

                                <select name="operator" name="operator" class="form-control mb-3 shado" id=""> Operator
                                    <option value="+"> +</option>
                                    <option value="-"> -</option>
                                    <option value="/"> /</option>
                                    <option value="*"> *</option>
                                    <option value="mean"> Mean</option>
                                    <option value="average"> Average</option>
                                    <option value="Std"> Standard Deviation</option>
                                    <option value="mode"> Mode</option>

                                </select>

                                <div class="text-center mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary shado">
                                        Submit
                                    </button>
                                </div>

                                <div class="alert alert-primary alert-dismissible fade show text-center shado"
                                    role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>

                                    <strong> You've calculated
                                        <?= $_POST["num1"]. $_POST["operator"]. $_POST["num2"] ?>: </strong>
                                    <h3> <?php if (!empty($x) || !empty($y)) {
        switch ($operator) {
            case '+':
                $add = new maths();
              echo  $add-> add($x, $y);


                break;


            case '-':
                $subtract = new maths();
                echo $subtract->subtract($x, $y);
                break;


            case '/':
                $divide = new maths();
                echo $divide->divide($x, $y);
                break;

            case '*':
                $multiply = new maths();
                echo $multiply->multipy($x, $y);
                break;
            case 'mean':
                $mean = new statistic();
                echo $mean->  mean($x, $y);
                break;
            case 'average':
                $mean = new statistic();
                echo $mean->  mean($x, $y);
                break;
            case 'std':
                $root = new statistic();
                echo $root ->std($x, $y);
                break;
            case 'mode':
                $mode = new statistic();
                echo $mode ->mode($x, $y);
                break;

            default:

                break;
        }
    }
   ?></h3>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</body>

</html>