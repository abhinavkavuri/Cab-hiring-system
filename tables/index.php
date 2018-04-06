<?php
require("../includes/common.php");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>user info</title>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="style.css">
      
      

  
</head>

<body >
    
<h1><span class="blue"></span>User<span class="blue"></span> <span class="white">Information Suite</pan></h1>

<h2><span class="white">Look out for Prying Eyes :)</span></h2>
<table class="container">
	<thead>
		
	</thead>
	<tbody>
		<tr>
			<td>Username</td>
                        <td><?php echo $_SESSION['username']; ?><br><br><a href="../editname.php"><button>Change</button></a></td>
			
			
		</tr>
		<tr>
			<td>Address</td>
                        <td ><?php echo $_SESSION['addr']; ?><br><br><a href="../editaddr.php"><button>Change</button></a></td>
			
			
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><?php echo $_SESSION['dob']; ?><br><br><a href="../editdob.php"><button>Change</button></a></td>
			
			
		</tr>
    <tr>
			<td>Registered Email ID</td>
			<td><?php echo $_SESSION['email']; ?><br><br><a href="../editmail.php"><button>Change</button></a></td>
			
			
		</tr>
    <tr>
			<td>Mobile Number</td>
			<td><?php echo $_SESSION['mobileno']; ?><br><br><a href="../editno.php"><button>Change</button></a></td>
			
		</tr>
    <tr>
			<td>KYC status</td>
			<td><?php echo $_SESSION['kyc']; ?></td>
			
		</tr>
	</tbody>
</table>


</body>