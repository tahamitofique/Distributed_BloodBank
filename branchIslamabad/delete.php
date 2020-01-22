<?php
include("connection.php");
$DonorID=$_GET['DonorID'];
$name=$_GET['Name'];
$email=$_GET['Email'];
$phno=$_GET['Phone_no'];
$bg=$_GET['Blood_gp'];
echo "$Sno";
$query = "DELETE FROM donors WHERE DonorID='$DonorID'"; 
$data = mysqli_query($conn,$query);

$query = "DELETE FROM temp WHERE Name='$name' AND Email='$email' AND Phone_no='$phno' AND Blood_gp='$bg'";
$temp_data = mysqli_query($conn, $query); 
if($data && $temp_data)
{
	//echo "<font color='green'>Record deleted successfully";
	echo "<script> alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0;url=http://localhost/bloodbank/branchIslamabad/display.php" />
	<?php
}
else{
	echo "<font color='red'> detele failed";
}
?>