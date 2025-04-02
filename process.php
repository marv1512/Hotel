<?php include "questions.php" ?>
<?php include "function.php" ?>
<?php
$correct = calculateScore($questions, $_POST['answers']);
$total = count($questions);
$failed = $total - $correct;
$answered = count($_POST['answers']);
$average = round($total / 2, 0);

if ($correct >= $average) {
    $aggregate = "Pass";
} else {
    $aggregate = 'Failed';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #questions {
            width: 600px;
            margin: 0 auto;
        }

        .question {
            margin: 10px 0;
            padding: 20px;
            width: 100%;
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
    <pre>
<?php // var_dump($_POST); ?>
</pre>
    <div id="questions">

        <table class="question">
            <tr>
                <td>Total Questions</td>
                <td><?= $total; ?></td>
            </tr>
            <tr>
                <td> Questions answered</td>
                <td><?= $answered ?></td>
            </tr>
            <tr>
                <td> Score</td>
                <td><?= $correct ?></td>
            </tr>
            <tr>
                <td> Failed</td>
                <td><?= $failed; ?></td>
            </tr>
            <tr>
                <td> Aggregate</td>
                <td><?= $aggregate; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>