<?php
session_start(); 
include "dbconnection.php";

if(isset($_POST['submit'])){
$dates = $_POST['dates'];
$notice= $_POST['notice'];

$newdate = date("d-M-y", strtotime($dates));

$q = "INSERT INTO `notice` (`dates`, `notice`) VALUES ('$newdate', '$notice')";
$q_run = mysqli_query($conn, $q);

if($q_run){
$_SESSION['msg'] = "Sign Up successfull";
header('location: notice.php');
}
else{
	$_SESSION['msg'] = "Something Wrong";
header('location: notice.php');
}
}

?>