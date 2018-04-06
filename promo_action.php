<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Promotional Codes | Cab Hiring System</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Promo codes</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Type your Promo code here !! </i><p>
                                <form action="promo_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Promo code" name="pcode" required = "true">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Apply</button><br><br>
                                    
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>New to Cab Hiring System ?   <a href="signup.php">Register Here For Exciting Offers!</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>