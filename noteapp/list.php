<?php include "storage.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.css">
</head>

<body>
    <h1>Hello world</h1>

    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <?php if (count($store)): ?>
                <table class="table table-bordered table-hover">
                    <?php foreach ($store as $key => $note): ?>
                        <tr>
                            <td><?= $note['title'] ?></td>
                            <td><?= $note['content'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    <strong>No note saved yet</strong>
                </div>

            <?php endif; ?>
            <a href="/create.php" class="btn btn-primary btn-md">ADD NOTES</a>
        </div>
    </div>
    </div>
</body>

</html>