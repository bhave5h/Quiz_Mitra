<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <?php include('../header.php'); ?>


    <?php
    $test_id = $_GET['test_id'];
    $std_id = $_GET['std_id'];


    $sql_test = "SELECT test_name, noq, mpq, tm 
            FROM test 
            WHERE test_id = $test_id";
    $result_test = mysqli_query($conn, $sql_test);
    $test = mysqli_fetch_assoc($result_test);

    $sql_std = "SELECT std_name 
            FROM student  
            WHERE std_id = $std_id";
    $result_std = mysqli_query($conn, $sql_std);
    $student = mysqli_fetch_assoc($result_std);

    $sql_answer = "SELECT selected_opt, correct_opt 
            FROM answer 
            WHERE test_id = $test_id AND std_id = $std_id";
    $result_answer = mysqli_query($conn, $sql_answer);

    $correct = 0;
    $wrong = 0;

    while ($row = mysqli_fetch_assoc($result_answer)) {
        if ($row['selected_opt'] === $row['correct_opt']) {
            $correct++;
        } else {
            $wrong++;
        }
    }
    $score = $correct * $test['mpq'];

    ?>


    <div class="container" id="box">
        <h1 class="p-1">Test Score : <?= $score ?> / <?= $test['tm']?></h1> <hr><br> 


        <table class="table border">
            <thead>
                <th>Student ID</th>
                <th>Student Name </th>
                <th>Test ID </th>
                <th>Test Name </th>
                <th>No of Ques </th>
                <th>Marks Per Ques </th>
                <th>Total Marks </th>
                <th>Correct </th>
                <th>Wrong </th>
                <th>Scored Marks </th>
            </thead>

            <tbody>
                <tr>
                    <td><?= $std_id ?></td>
                    <td><?= $student['std_name']?></td>
                    <td><?= $test_id ?></td>
                    <td><?= $test['test_name']?></td>
                    <td><?= $test['noq']?></td>
                    <td><?= $test['mpq']?></td>
                    <td><?= $test['tm']?></td>
                    <td><?= $correct ?></td>
                    <td><?= $wrong ?></td>
                    <td><?= $score ?> / <?= $test['tm']?> </td>
                    <td></td>
                </tr>
              
                <td>   <button onclick="window.print()" class='btn btn-success' >Print Result</button>  </td>

            </tbody>
        </table>
    </div>
<?php

    // echo $test_id; 
    // echo $std_id;
    // echo implode(', ', $test);
    // echo implode(', ', $student);
    // echo $test['test_name'];

?>
</body>

</html>

