<?php 


$first= readline("Please input first number:"); 


$second= readline("Please input second number:");


if ( empty($first) || empty($second) || !is_numeric($first)|| !is_numeric($second) ) {
  echo "error";
  return;
}

$info= readline("What would you like to calculate:
+ Add
- Subtract
/ Divide
* Multiply");


switch ($info) {
    case '+':
        $add= $first + $second;
        echo "Answer:". $add;
        break;

        case '-':
       
$subtract= $first - $second;
echo "Answer:".$subtract;
        break;

        case '/':
      $divide= $second / $first;  
      echo "Answer:".$divide;
        break;
case '*':
       $multiply= $first * $second; 
       echo "Answer:".$multiply;
        break;
    
    default:
        # code...
        break;
}



?>