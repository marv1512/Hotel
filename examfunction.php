<?php
include("examdb.php");
function calculate($questions, $answer)
{
    $total = 0;
    foreach ($answer as $key => $option) {
        if ($questions[$key]["answer"] == $option) {
            $total++;
        }
    }
    return $total;

}

function failed($questions, $answer)
{
    $failed = 0;
    foreach ($answer as $key => $option) {


        if ($questions[$key]["answer"] !== $option) {

            $failed++;

        }

    }
    // return $key . $questions[$key]["question"] . " answer: " . $questions[$key]["answer"];
    return $failed;
}

function correction($questions, $answer)
{
    $corr = [];
    foreach ($answer as $key => $option) {

        if ($questions[$key]["answer"] !== $option) {
            array_push($corr, $questions[$key]);
        }

    }
    return $corr;
}
?>