<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Cab Hiring System</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px" background="/cabv2/img/taxi.jpg">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div>
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1 style="color:white;">Book a Cab now.</h1>
                            <p style="color:white;">A Unique Experience</p>
                            <br/>
                            <?php
                                 if (isset($_SESSION['email'])) {
                                  ?>
                              <a  href="/cabv2/carmenu2/index.php" class="btn btn-danger btn-lg active">Start booking Here !</a>
                            ?>
                            <?php
                             } else {
                            ?>
                            <a  href="/cabv2/login/index.php " class="btn btn-danger btn-lg active">Book Now</a>
                            
                            <?php
                             }
                            ?>
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
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>