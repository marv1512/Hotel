<?php

class maths
{
    public function add($x, $y)
    {
        $addition = $x + $y;
        return $addition;
    }
    public function subtract($x, $y)
    {
        $substraction = $x - $y;
        return $substraction;
    }
    public function divide($x, $y)
    {
        $division = $x / $y;
        return $division;
    }
    public function multipy($x, $y)
    {
        $multiplication = $x * $y;
        return $multiplication;
    }
}


class statistic extends maths
{
    public function mean($x, $y)
    {

        $sum = new maths;


        $mean = $sum->add($x, $y) / 2;
        return $mean;
    }
    public function std($x, $y)
    {

        $bracket = $x - $this->mean($x, $y);
        $square = $bracket ** 2;
        $divide = new maths;
        $divide->divide($square, 2);
        $squareroot = sqrt($divide->divide($square, 2));
        return $squareroot;
    }
    public function mode($x, $y)
    {
        if ($x == $y) {
            return $x;
        } else {
            $answer = "There is no mode";
            return $answer;
        }
    }



}

$num1 = readline("Enter first number:");
$num2 = readline("Enter second number:");
$add = new statistic();


echo $add->std($num1, $num2);