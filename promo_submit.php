<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: login.php');
    
}

if(!isset($_SESSION['pcode'])){
    $_SESSION['pcode'] = 'null';
    
}

$pcode = $_POST['pcode'];
$pcode = mysqli_real_escape_string($con, $pcode);
$pc=$_SESSION['pcode'];

// Query checks if the email and password are present in the database.
$query = "SELECT pcode FROM promotion WHERE pcode='" . $pcode . "' ";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if($pc == $pcode){
    echo '<script type="text/javascript"> alert("Promo code already applied...cannot apply another one"); window.location.href = "/cabv2/promo_action.php"; </script>';
    
}
elseif ($num == 0) {
  echo '<script type="text/javascript"> alert("Enter valid Promo code"); window.location.href = "/cabv2/promo_action.php"; </script>';
  $_SESSION['pcode'] = "null";
} 
else { 
   echo '<script type="text/javascript"> alert("Promo code applied !"); window.location.href = "/cabv2/login.php"; </script>'; 
   $_SESSION['pcode'] = $pcode;
  //$row = mysqli_fetch_array($result);
  //$_SESSION['email'] = $row['email'];
  //$_SESSION['user_id'] = $row['id'];
  //header('location: products.php');
}
