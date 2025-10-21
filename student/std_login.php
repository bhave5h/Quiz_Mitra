<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    
    <title>Login</title>
    
</head>
<body >
    <?php include('../header.php'); ?>
    <?php include('../config.php');?>

<?php
if (isset($_POST['submit'])) {
    $phone = $_POST['phone_no'];
    $sql = "SELECT * FROM student WHERE std_number = '$phone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $std_id = $row['std_id'];
        echo "<script>window.location.href='select_test.php?std_id=$std_id';</script>";
    } else {
        echo "<script>alert('Please Register Your Phone Number');</script>";
    }
}
?>


<form method="POST">
  <div class="container py-5 d-flex justify-content-center align-items-center min-vh-200">
    <div class="card bg-white text-black shadow" style="max-width: 600px; min-height: 500px; border-radius: 20px;">
      <div class="card-body p-5 text-center">

        <h2 class="fw-bold mb-3 text-start">Student Login</h2>
        <p class="text-muted mb-4 text-start">Please enter your <br>Phone Number and password!</p>

        <input 
          id="phone_no"
          type="number" 
          name="phone_no" 
          class="form-control form-control-lg mb-3" 
          placeholder="Enter Number" 
          required
        >

        <input 
        id="pass"
          type="password" 
          name="submit" 
          class="form-control form-control-lg mb-4" 
          placeholder="Enter Password" 
          required
        >

        <button type="submit" name="submit" class="btn btn-secondary btn-lg w-100 mb-3">Login</button>

        <p class="mb-0">Don't have an account? 
          <br>
          <a href="https://github.com/bhave5h/Quiz_Mitra" class="fw-bold text-dark">Check Out ReadMe</a>
        </p>

      </div>
    </div>
  </div>
</form>


</body>
</html>