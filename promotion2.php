<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Cab Hiring System</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>


        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>




        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Grab these Exciting offers now !! </h1>
                <p>*Terms and Conditions apply.</p>

            </div>
            <hr>


<div class="panel-footer"><p>Have a Promo code? <a href="promo_action.php">CLICK HERE!</a></p></div>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/percentoff1.jpg" alt="">
                        <div class="caption">
                            <h3>Flat 50% off on your first booking</h3>
                            <p>CODE: 123456789</p>
                            <p>*Minimum bill value : INR 200/-</p>
                            
                            <p><a href="promo_action.php" role="button" class="btn btn-primary btn-block">Apply code</a></p>
                            
                        </div>
                    </div>
                </div>





                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/30off.jpg" alt="">
                        <div class="caption">
                            <h3>Flat 30% off on your first booking</h3>
                            <p>CODE: 543210</p>
                            <p>*Minimum bill value : INR 130/-</p>
                            <p><a href="promo_action.php" role="button" class="btn btn-primary btn-block">Apply code</a></p>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/50back.png" alt="">
                        <div class="caption">
                            <h3>Flat 50/- Cashback on your first booking</h3>
                            <p>CODE: 456789</p>
                            <p>*Minimum bill value : INR 200/-</p>
                            <p><a href="promo_action.php" role="button" class="btn btn-primary btn-block">Apply code</a></p>
                            </a>
                        </div>
                    </div>
                </div>




                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/100back.jpg" alt="">
                        <div class="caption">
                            <h3>Flat 100/- Cashback on your first booking</h3>
                            <p>CODE: 0192837465</p>
                            <p>*Minimum bill value : INR 500/-</p>
                            <p><a href="promo_action.php" role="button" class="btn btn-primary btn-block">Apply code</a></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            

                

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
