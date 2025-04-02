<div class="shadow p-5 mt-5">
    <h4 class="my-3"><?= APP_NAME; ?></h4>
    <ul class="list-group">
        <a href="create.php" class="list-group-item d-flex justify-content-between align-items-center">
            CREATE NOTE
        </a>
        <a href="list.php" class="list-group-item d-flex justify-content-between align-items-center">
            VIEW NOTES
            <span class="badge bg-primary rounded-pill"><?= $count; ?></span>
        </a>

    </ul>
</div>