<?php


function validator($score)
{


    if (!is_numeric($score)) {
        $invalid = "Please input a number";
        return $invalid;
    }

}
function grade($score)
{

    if (empty($score) || !is_numeric($score)) {
        $grade = "Please input a number";
        return $grade;
    } else {
        if ($score < 39) {
            $grade = "F";
            return $grade;
        } else {
            if (is_numeric($score) >= 40 && $score <= 50) {
                $grade = "C";
                return $grade;
            } else {
                if (is_numeric($score) >= 51 && $score <= 69) {
                    $grade = "B";
                    return $grade;
                } else {
                    if (is_numeric($score) >= 70) {
                        $grade = "A";
                        return $grade;
                    } else {
                        echo "invalid input";
                    }
                }
            }

        }
    }
}

$score = readline("input a number:");
echo grade($score);

?>