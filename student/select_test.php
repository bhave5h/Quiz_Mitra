<?php include '../config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<title> Select Tests </title>
</head>
<body >

  

<div class="container" id="box">

    <h1 class="p-1">Student | Select Tests </h1> <hr>
    
    <table class="table border">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Test Name</th>
      <th scope="col">No. of Questions</th>
      <th scope="col">Marks per Question</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 <?php
        $std_id = $_GET['std_id'];
 ?>

  <?php
    $sql = "SELECT * FROM `test`";
    $result = $conn->query($sql);
    $srno = 1;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>{$srno}</td>
              <td>{$row['test_name']}</td>
              <td>{$row['noq']}</td>
              <td>{$row['mpq']}</td>
              <td>{$row['tm']}</td>
              <td>  <a href='solve_test.php?test_id={$row['test_id']}&std_id={$std_id}' class='btn btn-primary'>Solve</a> </td>
              </tr>";
            $srno++;
          }
        } else {
          echo "<tr><td colspan='6' class='text-center'>No tests available.</td></tr>";
        }
      ?>
    
  </tbody>

</table>

</div>

</body>
</html>