<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.css">
</head>

<body>
    <h1>Create</h1>

    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <form action="save.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    SAVE
                </button>


            </form>
        </div>
    </div>
    </div>
</body>

</html>