<?php

require("includes/common.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM usersignup WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  echo '<script type="text/javascript"> alert("Enter valid e-mail id and password") ; window.location.href = "/cabv2/login.php";</script>';
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['mobileno'] = $row['mobileno'];
  $_SESSION['dob'] = $row['dob'];
  $_SESSION['addr'] = $row['addr'];
  $_SESSION['wallet'] = $row['wallet'];
    $_SESSION['kyc'] = $row['kyc'];
  
  header('location: products.php');
}

