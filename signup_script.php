<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['username'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);
  
  $addr = $_POST['address'];
  $addr = mysqli_real_escape_string($con, $addr);

  $dateofb = $_POST['dateofb'];
  $dateofb = mysqli_real_escape_string($con, $dateofb);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $kyc="Not Verified";
  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM usersignup WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
   echo '<script type="text/javascript"> alert("Email validation failure"); window.location.href = "/cabv2/signup.php"; </script>';
  } else if (!preg_match($regex_email, $email)) {
    echo '<script type="text/javascript"> alert("Email validation failure!! Enter correct email id") ; window.location.href = "/cabv2/signup.php";</script>';
  }  else {
    
    $query = "INSERT INTO `usersignup`(`username`, `password`, `dob` ,`addr`, `mobileno`, `email`,`kyc`) VALUES ('" . $name . "','" . $password . "','" . $dateofb . "','" . $addr . "','" . $contact . "','" . $email . "','" . $kyc . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $name;
  $_SESSION['mobileno'] = $contact;
  $_SESSION['dob'] = $dateofb;
  $_SESSION['addr'] = $addr;
  
    $_SESSION['kyc'] = $kyc;
    
    header('location: products.php');
  }
?>