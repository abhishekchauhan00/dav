<?php 
session_start(); 
include "dbconnection.php";

if(isset($_POST['submit'])){
    $id = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = MD5($pass);
   
    
    $q = "select * from admin where userid='$id' AND password= '$cpass'";
    $q_run = mysqli_query($conn, $q);
    $num= mysqli_num_rows($q_run);
    if($num==1){
        $_SESSION['a']=$id;
        header('location:admin.php');
        }
        
      
    

else{
    header('location:login.php');
}
}
?>