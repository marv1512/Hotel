<?php
function exists($data)
{
    if (empty($data) || $data == '') {
        return false;
    } else {
        return true;
    }
}

function valid_password($data)
{

    if (empty($data) || $data == '') {
        return false;
    } else {
        if (strlen($data) > 6) {
            return true;
        } else {
            return false;
        }
    }
}

function email_exists($email)
{
    $file = fopen("examinfo.txt", "r");
    $registered = [];
    while ($line = fgets($file)) {
        $registered[] = trim($line);
    }
    fclose($file);
    if (in_array($email, $registered)) {
        return true;
    } else {
        return false;
    }
}
?>