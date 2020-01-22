<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodBank";

// create connection

$conn=mysqli_connect($servername,$username,$password,$dbname );

if ($conn) {
	# code...
	//echo "Conneciton Open"; 
	
}
else
		echo "Connection failed";
	// or use the die function to view the reason

//mysqli_close($conn);	 
?>