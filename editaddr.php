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
        <title>user address editing</title>
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
                    <h4>Change user address</h4>
                    <form method="POST" action="editaddr.php">
                        <div class="form-group">
                           
                            <input type="text" class="form-control" placeholder="New address"  name="newusername"  required = "true" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="submitsavechanges">Change</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
        
       <?php
  if(isset($_POST['submitsavechanges'])){
     $newusername=$_POST['newusername'];
     $sai=$_SESSION['username'];
     $query="select * from usersignup where username='$newusername' ";
     $query_run=mysqli_query($con,$query);
     if(mysqli_num_rows($query_run)==0){
      $query="update usersignup set addr='$newusername' where username='$sai'";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Your address is changed....log in again !"); window.location.href = "/cabv2/logout_script.php"; </script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry please try again") </script>';
      }
     }
     else{
      echo '<script type="text/javascript"> alert("This address already exists please choose different address") </script>';
     }
  }
    ?>
        
    </body>
</html>

