<?php


var_dump($_GET);

$test = ['maths', 'physics'];
echo $test[1];

$student = [
    'age' => 3,
    "class" => "jss1"
];
echo $student['class'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    You clicked on : <?= $_GET['student']; ?>
</body>

</html>