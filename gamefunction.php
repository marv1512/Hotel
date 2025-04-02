<?php





function selected($selected, $selected2)
{

    if ($_SESSION[1]) {
        $selected = $_SESSION[1];
        $selected2 = $_SESSION[1];

    }
    exit($selected . $selected2);


}

?>