<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
  <body background="img/taxi2.jpg">
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <!--Main banner image-->
            <div>
                <div class="container">	
                    <center>
                        <div id="banner_content2">
                            <h1 style="color:white;">Book a Cab now.</h1>
                            <p style="color:white;">A Unique Experience</p>
                            <br/>
                            <a  href="login.php" class="btn btn-danger btn-lg active">Book Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            

                    
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>

