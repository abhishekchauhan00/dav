<?php 

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style2.css">
    <title>AMPS</title>
  </head>
  <body>
  <div class="container mt-4">
   <a href="logout.php" style="float:right; border:2px solid #f99245; padding: 0px 4px; text-decoration:none; border-radius:10px 5px; background-color:#f99245; color:black">Log Out</a>
</div>
      <div class="container " id="a">
    <h3>Gallery</h3>
  <form class="mt-4" action="savedata.php"  method="POST" enctype="multipart/form-data">
  
  

  <div class="form-group">
    <label>Upload Picture</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" Required>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary ">Upload Picture</button>
</form>
</div>
<div class="container mt-4 mb-4">
<div class="row">
     <?php
                include "dbconnection.php";
               $n="SELECT *
              from images
              ORDER BY `id` DESC ";
                 
                 $n_run = mysqli_query($conn, $n);
                 if(mysqli_num_rows($n_run) > 0){
                 while ($row = mysqli_fetch_assoc($n_run)) {
                 ?>
                 <div class="col-lg-4 col-sm-12 mt-3 " style="text-align:center">
       <img style="height:150px; border-radius:5px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                 </div>
         <?php
          }
          }
          else{
          echo "";
          }
          ?>
          
         
     </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>