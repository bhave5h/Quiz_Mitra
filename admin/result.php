<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
 
    <?php include('../header.php'); ?>

    <div class="container" id="box">
        <h1 class="p-1">Test Solved By :</h1> <hr><br> 

    <table class="table">
    <thead>
        <th>Test name</th>
        <th>Test id</th>    
        <th>Student name</th>
        <th>student id</th>
        <th>Detailed Result</th>
    </thead>
            
    <tbody>

    <?php
    $test_id = $_GET['test_id'];
    $sql = " SELECT 
                a.test_id,
                t.test_name,
                a.std_id,
                s.std_name
            FROM answer a
            JOIN student s ON a.std_id = s.std_id
            JOIN test t ON a.test_id = t.test_id
            WHERE a.test_id = $test_id
            GROUP BY a.std_id"; 

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<tr>  
                <td>{$row['test_name']}</td>
                <td>{$row['test_id']}</td>
                <td>{$row['std_name']}</td>
                <td>{$row['std_id']}</td>
                <td> <a href='result_detail.php?test_id={$row['test_id']}&std_id={$row['std_id']}' type='button' class='btn btn-success' > View </a> </td>
              </tr>";
                }
            }
        else
        echo "<tr><td><h2>No Body solved this test</h2></td></tr>"    
            

            ?>
        </tbody>
    </table>
    </div>
</body>
</html>