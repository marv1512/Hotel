<?php

include("notestorage.php");
// if (isset($_SESSION["note"])) {
//     $count = count($_SESSION["note"]);
// } else {
//     $count = 0;
// }

if (isset($_POST["delete"])) {
    $delete = $_POST["delete"];
    unset($_SESSION["note"][$delete]);
    $_SESSION["note"] = array_values($_SESSION["note"]);
    header("location:notelist.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<style>
    .container {}
</style>

<body>

    <div class="container mx-auto">
        <div class="row mx-auto">
            <div class="col-sm-12 col-md-6">

                <?php if (count($store)): ?>

                    <table class="table table-bordered table-hover table-striped" border="1">

                        <?php $num = 0; ?>
                        <?php foreach ($store as $key => $note): ?>


                            <tr>
                                <td> <?= ++$num ?></td>
                                <td> <?= $note["title"] ?> </td>
                                <td> <?= $note["date"] ?> </td>
                                <td> <?= $note["content"] ?> </td>
                                <td> <button type="submit" name="delete" title="delete" value=<?= $key ?>>delete </button></td>
                                <td> <button> <a href="noteedit.php?id=<?= $key ?>"> Edit </a> </button></td>


                            </tr>
                        <?php endforeach ?>
                    </table>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                        <strong> No note saved yet</strong>

                    </div>


                <?php endif ?>
                <a href="notecreate.php" class="btn btn-primary"> add note</a>
            </div>
        </div>
    </div>

</body>

</html>