<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>username editing </title>
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
                    <h4>Change username</h4>
                    <form method="POST" action="editname.php">
                        <div class="form-group">
                           
                            <input class="form-control" placeholder="New Username" name="newusername"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
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
      $query="update usersignup set username='$newusername' where username='$sai'";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Your username is changed...Please Log in Again") ; window.location.href = "/cabv2/logout_script.php";</script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry please try again") </script>';
      }
     }
     else{
      echo '<script type="text/javascript"> alert("This username already exists please choose different username") </script>';
     }
  }
    ?>
        
    </body>
</html>

