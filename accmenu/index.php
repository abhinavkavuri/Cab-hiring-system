<?php
require("../includes/common.php");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Management Suite</title>
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="../img/taxi.jpg">
    
  <div class="screen">
  <header>
    <a class="target-burger">
      <ul class="buns">
        <li class="bun"></li>
        <li class="bun"></li>
      </ul>
      <!--buns-->
    </a>
    <!--target-burger-->
  </header>
  <nav class="main-nav" role="navigation">
    <ul>
        <li><a href="../tables/index.php"><span>View Personal Info</span></a></li>
      
      <li><a href="../upload.php"><span> *Upload KYC documents</span></a></li>
      <li><a href="../settings.php"><span>Change Password</span></a></li>
      <li><a href="../logout_script.php"><span>Log Out</span></a></li>
    </ul>
  </nav>
  <!--main-nav-->
  <div class="container">
    <div class="app-content">
      <ul class="content-list">
        <li>
          <article>
            <figure>
              
              <figcaption>
                <span class="category">Profile management</span>
                
                <span class="price"> &pound;255</span>
              </figcaption>
            </figure>
          </article>
        </li>
      </ul>
      <!--content-list-->
    </div>
    <!--app-content-->
  </div>
  <!--contaienr-->
</div>
<!--screen-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
