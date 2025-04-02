<pre>
    <?php
    include 'questions.db.php';

    echo "User";
    echo "<hr/>";
    $user_answer = $_POST['question'];

    $original = $questions;


    // var_dump($user_answer);
    
    // echo "Original";
    // echo "<hr/>";
    // var_dump($original);
    
    // if ($user_answer[0] == $original[0]['answer']) {
    //     echo "Correct";
    // } else {
    //     echo "Incorrect";
    // }
    // foreach ($user_answer as $key => $answer) {
    //     // echo $key . $answer;
    //     // echo "<br/>";
    //     if ($answer == $original[$key]['answer']) {
    //         echo "Correct";
    //     } else {
    //         echo "Incorrect";
    //     }
    //     echo "<br/>";
    
    // }
    ?>
</pre>