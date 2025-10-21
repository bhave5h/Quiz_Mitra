<!DOCTYPE html>
<html>

<?php include 'config.php';?>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>


<header class="bg-white p-3 text-black ">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <a href="https://github.com/bhave5h" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none"><b> made by Bhavesh</b></a>

      </div>
    </div>
  </header><br>

<div class="container shadow p-4" id="box">

  <h3 class="text-center mb-4">
    <i>Welcome to <br><h2 style="color: green;">Quiz Mitra</h2></i>
    <b>Sign In / Sign Up</b>
  </h3>

  <div class="row justify-content-center g-4">
    <div class="col-md-4">
      <div class="card text-center h-100 shadow border">
        <img src="https://github.com/bhave5h/Quiz_Mitra/blob/main/Quiz_mitra/assets/teacher.png?raw=true" 
             class="card-img-top img-fluid mx-auto d-block p-3" 
             alt="teacher" 
             style="width: 150px; height: 150px; object-fit: contain;">
        <div class="card-body">
          <h5 class="card-title">Admin Login</h5>
          <p class="card-text">Login as Teacher to set, review, and check test scores</p>
        </div>
        <div class="card-footer bg-white border-0">
          <a href="admin/login.php" class="btn btn-success w-100">Teacher Login</a>
        </div>
      </div>
    </div>

    <!-- Student Card -->
    <div class="col-md-4">
      <div class="card text-center h-100 shadow border">
        <img src="https://github.com/bhave5h/Quiz_Mitra/blob/main/Quiz_mitra/assets/student.png?raw=true" 
             class="card-img-top img-fluid mx-auto d-block p-3" 
             alt="student" 
             style="width: 150px; height: 150px; object-fit: contain;">
        <div class="card-body">
          <h5 class="card-title">Student Login</h5>
          <p class="card-text">Login as student to solve MCQ tests</p>
        </div>
        <div class="card-footer bg-white border-0">
          <a href="student/std_login.php" class="btn btn-success w-100">Student Login</a>
        </div>
      </div>
    </div>

  </div>
</div>




 
</body>
</html>
