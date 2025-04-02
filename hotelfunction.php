<?php

function validator($email, $password, $name)
{
    if (isset($email) && isset($password) && isset($name)) {
        $file = "hotelfile.txt";
        $store = fopen($file, "a+");
        $write = fwrite($file, "$name\n$email\n$password\n");
        fclose($file);

    }

}


function session($key, $data)
{
    session_start();


    $_SESSION[$key] = $data;


}

function required($value)
{
    return strlen($value) > 0;
}

?>