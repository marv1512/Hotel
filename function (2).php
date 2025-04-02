<?php
include "questions.php";
function calculateScore($questions, $answers)
{
    $total = 0;
    foreach ($answers as $key => $option) {
        if ($questions[$key]['answer'] == $option) {
            $total++;
        }
    }
    return $total;
}
function calculateFailed($questions, $answers)
{
    $failed = [];
    foreach ($answers as $key => $option) {
        if ($questions[$key]['answer'] != $option) {
            array_push($failed, $questions[$key]);
        }
    }
    return $failed;
}


//  print_r(calculateScore($questions, ['d', 'b']));