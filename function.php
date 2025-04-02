<?php
include "questions.php";
function calculateScore($questions, $answers){
    $total = 0;
    foreach ($answers as $key => $option) {
        if ($questions[$key]['answer'] == $option) {
            $total++;
        }
    }
    return $total;
}


// echo calculateScore($questions, ['a', 'b']);