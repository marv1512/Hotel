<?php
function save($roomname, $description, $image, $price)
{
    $file_name = "room.txt";

    $file = fopen("$file_name", "a+");
    fwrite($file, $roomname . "\n");
    fwrite($file, $description . "\n");
    fwrite($file, $image . "\n");
    fwrite($file, $price . "\n");

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
                "roomname" => $content[$counter - 4],
                "description" => $content[$counter - 3],
                "image" => $content[$counter - 2],
                "price" => $content[$counter - 1],

            ]);

        }
    }
    return $messages;

}

?>