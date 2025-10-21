<?php
include '../config.php';

$test_id = $_POST['test_id'];
$std_id = $_POST['std_id'];
$answers = $_POST['answer'];

foreach($answers as $question_id => $selected_opt) {
    
    $get_correct = mysqli_query($conn, "SELECT correct_opt FROM questions WHERE question_id = $question_id");
    $correct = mysqli_fetch_assoc($get_correct)['correct_opt'];


    mysqli_query($conn, "INSERT INTO answer (test_id, std_id, question_id, correct_opt, selected_opt)
                         VALUES ($test_id, $std_id, $question_id, '$correct_opt', '$selected_opt')");
}

echo "Answers";
?>
