<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href='../style.css'>
    <title>Login</title>
    
</head>
<body >
    <?php include('../header.php'); ?>



<?php
if (isset($_POST['submit'])) {
    $email = $_POST['ad_email'];
    $password = $_POST['ad_pass'];
    $sql = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>window.location.href='action.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>


<form action="login.php" method="POST">
  <div class="container py-5 d-flex justify-content-center align-items-center min-vh-200">
    <div class="card bg-white text-black shadow" style="max-width: 600px; min-height: 500px; border-radius: 20px;">
      <div class="card-body p-5 text-center">

        <h2 class="fw-bold mb-3 text-start">Teacher Login</h2>
        <p class="text-muted mb-4 text-start">Please enter your login and password!</p>

        <input 
        id="ad_email"
          type="email" 
          name="ad_email" 
          class="form-control form-control-lg mb-3" 
          placeholder="Enter Email" 
          required
        >

        <input 
        id="ad_pass"
          type="password" 
          name="ad_pass" 
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