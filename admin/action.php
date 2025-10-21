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
    <title>Actions</title>
    
</head>
<body >
    <?php include('../header.php'); ?>

<div class="container" id="box" style="height: 80vh">

<h3 class="text-center" style="padding-top: 15px;"> 
    <i>
        Hello,  
        <br>    
        <h2>Create, view Test or
         Register new student </h2>
    </i> 
</h3>

<br>

<div class="card-group " style="display: flex;">

    <div class="card text-center mb-3" style="width: 200px">
        <img src="https://github.com/bhave5h/Quiz_Mitra/blob/main/Quiz_mitra/assets/newtest.png?raw=true" class="card-img-top" alt="teacher" style="padding: 50px;">
        <div class="card-body">
        <h5 class="card-title">New Test</h5>
        <p class="card-text">Create New Test</p>      
        </div>
        <div class="card-footer bg-white">
        <a href="set_test.php" class="btn btn-success">Create</a>
        </div>
    </div>

    <div class="card text-center mb-3" style="width: 200px">
        <img src="https://github.com/bhave5h/Quiz_Mitra/blob/main/Quiz_mitra/assets/viewtest.png?raw=true" class="card-img-top" alt="teacher" style="padding: 50px;">
        <div class="card-body">
        <h5 class="card-title">View</h5>
        <p class="card-text">Show Created Test & Scores</p>
        </div>
        <div class="card-footer bg-white">
        <a href="test_list.php" class="btn btn-success">Show</a>
        </div>
    </div>

    <div class="card text-center mb-3 " style="width: 200px">
        <img src="https://github.com/bhave5h/Quiz_Mitra/blob/main/Quiz_mitra/assets/addstd.png?raw=true" class="card-img-top" alt="teacher" style="padding: 50px;">
        <div class="card-body">
        <h5 class="card-title">Register Studen</h5>
        <p class="card-text">Create New Student account</p>
        </div>
        <div class="card-footer bg-white">
         <a  href="std_register.php" class="btn btn-success">Add</a>
        </div>
    </div>


</div>
</body>
</html>