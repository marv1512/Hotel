<?php
function save($name, $email, $message, $image)
{
    $file_name = "hotelformdb.txt";

    $file = fopen("$file_name", "a+");
    fwrite($file, $name . "\n");
    fwrite($file, $email . "\n");
    fwrite($file, $message . "\n");
    fwrite($file, $image . "\n");

    fclose($file);


    return true;




}

function validate($value)
{
    if (empty($value)) {
        return false;
    } else {
        return true;
    }
}

function read($filename)
{
    $file = fopen($filename, "r");
    $index = 0;
    $content = [];
    while ($line = fgets($file)) {
        array_push($content, $line);
    }
    $messages = [];
    $counter = 0;
    for ($i = 0; $i < count($content); $i++) {
        $counter++;
        if ($counter % 4 == 0) {
            array_push($messages, [
                "name" => $content[$counter - 4],
                "email" => $content[$counter - 3],
                "message" => $content[$counter - 2],
                "image" => $content[$counter - 1],

            ]);

        }
    }
    return $messages;

}

function session()
{
}
?>