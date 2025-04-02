<?php include "inc/config.php"; ?>
<?php include "inc/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <?php include "inc/sidebar.php" ?>
        </div>
        <div class="col-sm-12 col-md-7">
            <h4 class="my-3">Add Note</h4>
            <form action="save.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input
                        type="text"
                        name="title"
                        id=""
                        class="form-control"
                        placeholder=""
                        aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="" rows="3"></textarea>
                </div>
                <button
                    type="submit"
                    class="btn btn-primary">
                    SAVE
                </button>


            </form>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>