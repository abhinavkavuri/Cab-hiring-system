<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Cab Hiring System</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">

                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Username" name="username"  required = "true" pattern="^[A-Za-z0-9_]{6,15}$">
                            </div>

                            <div class="form-group">
                                <input autocomplete="off" type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
                            </div>
                            
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Address" name="address"  required = "true" >
                            </div>

                            <div class="form-group">
                                <input autocomplete="off" type="Date" class="form-control" placeholder="Date of birth" name="dateofb" required = "true">
                            </div>

                            <div class="form-group">
                                <input autocomplete="off" type="text" class="form-control"  placeholder="Contact" pattern="^[789][0-9]{9}$" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>