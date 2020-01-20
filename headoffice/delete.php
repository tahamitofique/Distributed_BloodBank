<?php
include("connection.php");
$DonorID=$_GET['DonorID'];
$name=$_GET['Name'];
$email=$_GET['Email'];
$phno=$_GET['Phone_no'];
$bg=$_GET['Blood_gp'];
$query = "DELETE FROM donors WHERE DonorID='$DonorID'"; 
$data = mysqli_query($conn,$query);

if($data)
{
	//echo "<font color='green'>Record deleted successfully";
	echo "<script> alert('Record Deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0;url=http://localhost/bloodbank/display.php" />
	<?php
}
else{
	echo "<font color='red'> detele failed";
}
?>