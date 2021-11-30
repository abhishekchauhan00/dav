
<?php

$servername= "localhost";
$dbuser= "root";
$password = "@#$%1234";

$dbname = "amps";

$conn = mysqli_connect("$servername", "$dbuser", "$password", "$dbname");

if (!$conn) {
	echo "Connection failed!";
}
?>



