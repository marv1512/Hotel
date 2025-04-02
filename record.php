<?php 



$first= $_GET["first"];
$second= $_GET["second"];
$operator= $_GET["operator"];

if ( !empty($first) || !empty($second)) {
    switch ($operator) {
        case '+':
           echo $first + $second;
            break;
    
    
        case '-':
           echo $first - $second;
            break;
    
   
        case '/':
           echo $first / $second;
            break;
   
        case '*':
           echo $first * $second;
            break;
        
        default:
            
            break;
    }
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>



    hello

</body>

</html> -->