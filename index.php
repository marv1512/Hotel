<?php include 'questions.db.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Entrance Examination</h4>
                        <p class="card-text">Please answer all questions in this section</p>
                        <form action="post.php" method="POST">
                            <?php $question_no = 0 ?>
                            <?php foreach ($questions as $question): ?>
                                <div class="mb-3">
                                    <label for="" class="form-label d-block">This is Question: <?= $question_no ?></label>
                                    <small id="helpId" class="text-muted d-block"><?= $question['question'] ?></small>

                                    <input type="text" name="question[<?= $question_no; ?>]" id="" class="form-control"
                                        placeholder="Enter answer here" aria-describedby="helpId" />
                                </div>
                                <?php $question_no++ ?>
                            <?php endforeach ?>
                            <button type="submit" class="btn btn-primary">
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