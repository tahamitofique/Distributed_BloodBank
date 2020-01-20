
<?php
include("connection.php");
error_reporting(0);
$DonorID=$_GET['DonorID'];
setcookie('Sno',$DonorID,time()+1000);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	
	Quantity <input type="text" name="quantity" value=""><br><br>
	<input type="submit" name="submit" value="Add">
</form>
<?php
if($_GET['submit'])
{
// getting data through global array

$quantity=$_GET['quantity'];
$Sno=$_COOKIE['Sno'];
//echo "$name";  //displaying data on page

//check that form fields are not empty
if($quantity !="")
	{
// Now inserting data into database
$query = "INSERT INTO donations( `Quantity`, `Donor_id`) VALUES ('$quantity','$Sno')";
$dn_data = mysqli_query($conn, $query); 

if ($dn_data) {
		echo "<font color='green'>Record Added successfully";
	?>
	<meta http-equiv="refresh" content="0;url=http://localhost/bloodbank/display.php" />
	<?php
	}
else
	{
		echo "<font color='red'> Failed to Add Record";
	}
}
else
	echo "<font color='blue'>Press Add button to save the changes";
}


?>
</body>
</html>