<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sub=$_POST['subject'];
		$msg=$_POST['message'];

		$to='webquency@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject="".$sub;
		$message="Name : ".$name."\n"."Message : "."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<h1>Sent Successfully! Thank you'.' '.$name.', We will contact you shortly! </h1> </br> <a href="index.html#contact">Go Back</a>';
		}
		else{
			echo 'Something went wrong! </br> <a href="index.html#contact">Go Back</a>';
		}
	}
?>