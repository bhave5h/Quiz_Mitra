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

<title>Register Student</title>
    
</head>
<body>
    <?php include('../header.php'); ?>

<form action="ctrl_reg.php" method="POST">
  <div class="container py-5 d-flex justify-content-center align-items-center min-vh-200">
    <div class="card bg-white text-black shadow" style="max-width: 600px; min-height: 500px; border-radius: 20px;">
      <div class="card-body p-5 text-center">

        <h2 class="fw-bold mb-3 text-start">Register New Student</h2>
        <p class="text-muted mb-4 text-start">Please enter correct Details!</p>

        <input 
          id="std_name" 
          name="std_name"
          type="text"  
          class="form-control form-control-lg mb-3" 
          placeholder="Enter Student Name" 
          required
        >

        <input 
          type="number" 
          id="std_number" 
          name="std_number"   
          class="form-control form-control-lg mb-4" 
          placeholder="Enter Phone Number" 
          required
        >

        
        <input 
          type="text" 
          id="std_pass" 
          name="std_pass"
          class="form-control form-control-lg mb-4" 
          placeholder="Enter New Password" 
          required
        >

        <button type="submit" class="btn btn-secondary btn-lg w-100 mb-3">Submit</button>

        <p class="mb-0">Already Have a Account? 
          <a href="signup.php" class="fw-bold text-dark">Login</a>
        </p>

      </div>
    </div>
  </div>
</form>


</div>



</body>
</html>
