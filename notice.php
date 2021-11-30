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
    <h3>Notice Board</h3>
  <form class="mt-4" action="insert.php" id="usrform" method="POST">
  
  

  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="dates" class="form-control" id="dates" aria-describedby="emailHelp" placeholder="Date">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Notice</label>
    <textarea name="notice" class="form-control" form="usrform" placeholder="Enter text here..."></textarea>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary ">Update Notice Board</button>
</form>
</div>
<div class="container mt-4">
     <?php
                include "dbconnection.php";
               $n="SELECT *
              from notice
              ORDER BY `id` DESC LIMIT 10";
                 
                 $n_run = mysqli_query($conn, $n);
                 if(mysqli_num_rows($n_run) > 0){
                 while ($row = mysqli_fetch_assoc($n_run)) {
                 ?>
         <h5 class="text-success"><?php echo $row['dates']; ?></h5><h6>"<?php echo $row['notice']; ?> "</h6><br>
         <?php
          }
          }
          else{
          echo "";
          }
          ?>
         
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>