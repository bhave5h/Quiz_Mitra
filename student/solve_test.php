<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <title>Solve Test</title>

</head>

<body>

    <?php
    include '../config.php'; 

    $test_id = $_GET['test_id'];
    $std_id = $_GET['std_id'];

    $questions = mysqli_query($conn, "SELECT * FROM questions WHERE test_id = $test_id");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($_POST['answer'] as $question_id => $selected_opt) {

            $sql = "SELECT correct_opt FROM questions WHERE question_id = $question_id";
            $result = mysqli_query($conn, $sql);
            $correct_opt = mysqli_fetch_assoc($result)['correct_opt'];

           
            $insert = "INSERT INTO answer (test_id, std_id, question_id, correct_opt, selected_opt)
                       VALUES ($test_id, $std_id, $question_id, '$correct_opt', '$selected_opt')";
            mysqli_query($conn, $insert);
        }

            $questions = mysqli_query($conn, "SELECT * FROM questions WHERE test_id = $test_id");

        header('Location: submited.php');
        exit(); 
    }
    
    ?>

<div class="container row" id="questionbox">    

<form method="POST" class="w-100">
<div class="row" >
    <?php while ($row = mysqli_fetch_assoc($questions)) { ?>
    <div class="col-12 mb-4 ">
    <div class="card border-dark">
        <div class="card-body">
                       
            <h5 class="card-title text-black mb-3 "><?= $row['question'] ?></h5>

            <div class="row g-2">
                <?php for ($i = 1; $i <= 4; $i++) {
                    $optionId = "q{$row['question_id']}_opt{$i}";
                ?>
                                
            <div class="col-md-6">
                <input type="radio" class="btn-check" name="answer[<?= $row['question_id'] ?>]" id="<?= $optionId ?>" value="<?= $row['opt_' . $i] ?>" required>
                <label class="btn btn-outline-secondary w-100 text-start py-3 border-dark " for="<?= $optionId ?>">
                    <?= $row['opt_' . $i] ?>
                </label>
            </div>
                
            <?php } ?>
            </div>
        
        </div>
    </div>
    </div>

    <?php } ?>

    <button type="submit" class="btn btn-success btn-lg px-5">Submit Answers</button>
</div>

</form>

</div>
<br>
</body>

</html>