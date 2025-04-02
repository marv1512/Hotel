<?php

// $session = [
//     'level_one' => [
//         'right_number' => 10,
//         'selected_number' => 3
//     ],
//     'level_two' => [
//         'right_number' => 10,
//         'selected_number' => 3
//     ],
//     'level_two' => [
//         'right_number' => 10,
//         'selected_number' => 3
//     ]
// ];


function start_game($level)
{
    $_SESSION['current_level'] = $level;
    
    $_SESSION['level_1'] = [
        'right_number' => rand(1, 10),
        'selected_number' => null,
        'range' => [0, 10]
    ];
    $_SESSION['level_2'] = [
        'right_number' => rand(10, 20),
        'selected_number' => null,
        'range' => [11, 20]
    ];
}
function nextLevel() {}

function currentLevel() {}


function score() {}

function generateNumbers($level)
{
    $generated = [];
    $start = $_SESSION[$level]['range'][0];
    $end = $_SESSION[$level]['range'][1];

    $lucky_number = $_SESSION[$level]['right_number'];

    foreach (range(1, 9) as $key => $value) {
        array_push($generated, rand($start, $end));
    }
    if (!in_array($lucky_number, $generated)) {
        $generated[rand($start, $end)] = $lucky_number;
    }
    return $generated;
}
