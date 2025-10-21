<?php
include '../config.php';

$sql = "INSERT INTO `student` (`std_name`, `std_number`, `std_pass`) VALUES ('".$_POST['std_name']."','".$_POST['std_number']."','".$_POST['std_pass']."')";

// $sql= "INSERT INTO `admin` (`email`, `pass`) VALUES ('".$_POST['ad_email']."','".$_POST['ad_pass']."')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>
              alert('New Student Registered created successfully');
              window.location.href = 'action.php';
          </script>";
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();
exit;
?>