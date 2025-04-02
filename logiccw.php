<?php
function logic($x)
{
    if ($x > 0) {
        return true;

    }
}

$x = readline("input a number");
echo logic($x);
?>