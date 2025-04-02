<?php
include "inc/config.php";
include "inc/header.php";
include "functions.php";

$data = fetch();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <?php include "inc/sidebar.php"; ?>
        </div>
        <div class="col-sm-12 col-md-7">
            <h4 class="my-3">Saved Notes</h4>
            <?php if (isset($_SESSION['message'])) : ?>
                <div
                    class="alert alert-success alert-dismissible fade show"
                    role="alert">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>

                    <?= $_SESSION['message']; ?>
                </div>

            <?php endif ?>
            <?php if (count($data)): ?>
                <?php foreach ($data as $key => $note): ?>
                    <div class="bg-light p-2 border-bottom mb-2">
                        <h6 class="d-flex justify-content-between ">
                            <strong><?= $note['title'] ?></strong>
                            <div>
                                <a class="btn btn-sm btn-primary" href="edit.php?id=<?= $key ?>">EDIT</a>
                                <a class="btn btn-sm btn-danger" href="">DELETE</a>
                            </div>
                        </h6>
                        <p><?= $note['content'] ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div
                    class="alert alert-danger"
                    role="alert">
                    <strong>No note saved yet</strong>
                </div>

            <?php endif; ?>
            <a href="/create.php" class="btn btn-primary btn-md">ADD NOTES</a>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>