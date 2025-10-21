<html>
  <head>
    <link rel="stylesheet" type="text/css" href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="https://raw.githubusercontent.com/bhave5h/Quiz_Mitra/refs/heads/main/Quiz_mitra/assets/logo.ico">


  </head>
</html>


<?php 
$servername = "enter sever name eg.localhost";
$username = "enter username eg.root";
$password = "enter pass";
$dbname = "enter database name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>