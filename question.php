<?php include "questions.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Bank</title>
    <style>
        #questions {
            width: 600px;
            margin: 0 auto;
        }

        .question {
            margin: 10px 0;
            padding: 20px;
            box-shadow: 1px 1px 10px 1px wheat;
        }

        .question h2 {
            font-weight: 700;
            text-decoration: underline;
        }

        .options {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <form id="questions" action="process.php" method="POST">
       <?php foreach($questions as $key => $question): ?>
        <div class="question">
            <h2>Question: <?= $key +1 ?></h2>
            <p><?= $question['question']?></p>
            <div class="options">
               <?php foreach($question['options'] as $option => $value):?>
                <label for="<?=$key.$option?>">
                    <input type="radio" name="answers[<?=$key?>]" id="<?=$key.$option?>"  value="<?= $option ?>"> <?= strtoupper($option) ?>. <?= $value?>
                </label>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
    </form>
</body>

</html>