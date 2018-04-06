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
        <title>user Email editing </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change user email ID</h4>
                    <form method="POST" action="editmail.php">
                        <div class="form-group">
                           
                            <input class="form-control" placeholder="New email ID" name="newemail"  required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="submitsavechanges">Change</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
        
       <?php
  if(isset($_POST['submitsavechanges'])){
    $newemail=$_POST['newemail'];
    $sai=$_SESSION['email'];
    $query="update usersignup set email='$newemail' where email='$sai'";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Your email is changed...Log in Again"); window.location.href = "/cabv2/logout_script.php"; </script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry please try again") </script>';
      }
  }
  ?>
        
    </body>
</html>

