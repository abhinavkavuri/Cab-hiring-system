<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 50px" background="/cabv2/img/id2.jpg">
    
    <?php
        include 'includes/header.php';
        ?> 
    
    

    
    
    
    
    <div id="content">
            <!--Main banner image-->
            <div>
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1 style="color:white;">Upload Your Proof of Existence Here.</h1>
                            <p style="color:white;">*Upload is Mandatory</p>
                            <br/>
                            <form enctype="multipart/form-data" action="upload.php" method="POST">
                           <input type="file" name="uploaded_file"></input><br />
                            
                            <a class="btn btn-danger btn-lg active">*<input type="submit" value="upload">*</input></a>
                             </form>
                        </div>
                    </center>
                </div>
            </div>
            
             </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        
        
    
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      echo '<script type="text/javascript"> alert("File upload successfull"); window.location.href = "/cabv2/accmenu/index.php"; </script>';
    } else{
        echo '<script type="text/javascript"> alert("There was an error uploading the file, please try again!") </script>';
        
    }
  }
?>