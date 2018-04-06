<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-road"></span>   Cab Hiring System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    
                    <li><a href = "wallet/wallet.php"><span class = "glyphicon glyphicon-euro"></span> Wallet </a></li>
                    <li><a href = "promotion2.php"><span class = "glyphicon glyphicon-gift"></span> Promotional Codes </a></li>
                    <li><a href = "accmenu/index.php"><span class = "glyphicon glyphicon-user"></span> Profile Management </a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>    Login</a></li>
                    <li><a href = "promotion2.php"><span class = "glyphicon glyphicon-gift"></span> Promotional Codes </a></li>
                    <li><a href="forgot.php"><span class="glyphicon glyphicon-envelope"></span>   Forgot Password</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>