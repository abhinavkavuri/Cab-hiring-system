<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cab</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 50px" background="/cabv2/img/taxi2.jpg">
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div style="padding-top: 170px" class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Cab Hiring System!</h1>
                <p>We have the best Cab's waiting for you. No need to hunt around, we have the best reserved just for you.</p>
                
                <a  href="/cabv2/carmenu2/index.php" class="btn btn-danger btn-lg active">Start booking Here !</a>

            </div>
            
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
