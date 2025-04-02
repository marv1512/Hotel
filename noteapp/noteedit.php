<?php

// include("notesave.php");
// include("notestorage.php");
// include("notelist.php");

// session_start();





// if (isset($_SESSION["notes"])) {
//     return $_SESSION["notes"];
// } else {
//     return [];
// }

// $note = $_SESSION["notes"];

// if (isset($note[$id])) {
//     return $note[$id];
// } else {
//     return null;
// }




// if ($_SERVER["request_method"] = "Post") {
//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     $note = [
//         'title' => $title,
//         'content' => $content
//     ];
//     $_SESSION['notes'][$id] = $note;
//     $_SESSION['message'] = "Updated successfully";
//     return header("Location:notelist.php");
// }

?>
<?php
// session_start();

include("notestorage.php");
include("notesave.php");

if (isset($_SESSION["note"])) {
    $count = count($_SESSION["note"]);
} else {
    $count = 0;
}

if (isset($_GET["id"])) {
    $_GET["id"];
    $id = $_GET["id"];
    $edited = $_SESSION["note"][$id];
}

// if (isset($note[$id])) {
//     return $note[$id];
// }
// $id = $_GET["id"];


// if ($_SERVER["REQUEST_METHOD"] == "post") {
//     $title = $_POST["title"];
//     $content = $_POST["content"];
//     $note = [
//         'title' => $title,
//         'content' => $content
//     ];
//     $edited = $note[$id];
//     $note = $_SESSION["note"];
//     $_SESSION['note'][$id] = $note;
//     $_SESSION['message'] = "Updated successfully";
//     return header("Location:notelist.php");
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">

                <div class="card">
                    <div class="card-header">
                        <h3> Update</h3>
                    </div>
                    <div class="card-body">
                        <form action="notesave.php" method="post">
                            <input type="text" name="title" value="<?= $edited['title'] ?>">
                            <input type="text" name="content" value="<?= $edited['content'] ?>">
                            <input type="date" name="date" value="<?= $edited['date'] ?>">

                            <button type="submit" name="submit" value="edit" class="btn btn-primary">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>