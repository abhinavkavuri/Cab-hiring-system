<?php
require_once("../includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cab wallet</title>
  <link rel="stylesheet" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>

        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body background="/cabv2/img/money1.jpg">
<nav class="menu">
  <ul>
    <li><a href="#products">Log</a></li>
    <li><a href="../checkout/index.php">Add credits</a></li>
    <li><a href="#careers">Send</a></li>
    <li><a href="#about">Request</a></li>
    <li><a href="../checkout/savecard.php">Save cards</a></li>
  </ul>
</nav>
    <br>
    <h2 class="hint"><b>Wallet Balance</b></h2>
    
    <h1 class="hint"><b><?php echo "$ "; ?><?php echo $_SESSION['wallet']; ?></b></h1>
    
    
</body>
</html>
