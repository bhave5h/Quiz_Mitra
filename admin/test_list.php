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
<script>
      
</script>

<title> Tests </title>
    
</head>
<body >
    <?php include('../header.php'); ?>

<div class="container" id="box">

    <h1 class="p-1">Teacher | View Test </h1> <hr><br>   
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Test ID</th>
      <th scope="col">Test Name</th>
      <th scope="col">No. of Questions</th>
      <th scope="col">Marks per Question</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Obtained Marks</th>

    </tr>
  </thead>
  <tbody>
        <?php

        $sql = "SELECT * FROM `test`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $srno=1;
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                <th scope="row"><?php echo $srno++ ; ?> 
                </th>
                <td><?php echo $row["test_id"]; ?></td>
                <td><?php echo $row["test_name"]; ?></td>
                <td><?php echo $row["noq"]; ?></td>
                <td><?php echo $row["mpq"]; ?></td>
                <td><?php echo $row["tm"]; ?></td>
                <td><a href="result.php?test_id=<?= $row['test_id'] ?>" class="btn btn-primary">View Results</a></td>

              </tr> 
        <?php  }
        } else {
            echo '<tr>
        <td colspan="6" class="text-center"> 0 MCQ tests Saved </td>
        </tr>';
        }
        ?> 
  </tbody>

</table>
 
<a href="set_test.php" class="btn btn-success"> Create New MCQ test </a>

</div>


</body>
</html>
