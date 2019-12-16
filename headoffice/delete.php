<?php
include("connection.php");
$Sno=$_GET['Sno'];
$query = "DELETE FROM donors WHERE Sno='$Sno'"; 
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