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
        <title>user mobile number editing</title>
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
                    <h4>Change user mobile number</h4>
                    <form method="POST" action="editno.php">
                        <div class="form-group">
                           
                            <input class="form-control" placeholder="New mobile number" maxlength="10" size="10" name="newmobile"  required = "true" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="submitmobile">Change</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
        
       <?php
if(isset($_POST['submitmobile'])){
    $newmobile=$_POST['newmobile'];
    $cha=$_SESSION['mobileno'];
    $query="update usersignup set `mobileno`='$newmobile' where `mobileno`='$cha'";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Your number is changed.....log in again"); window.location.href = "/cabv2/logout_script.php"; </script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry please try again") </script>';
      }
  }
  ?>
        
    </body>
</html>
