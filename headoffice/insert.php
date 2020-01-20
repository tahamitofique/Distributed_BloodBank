<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	
	Name <input type="text" name="Name" value=""><br><br>
	Email <input type="text" name="Email" value=""><br><br>
	Phone No. <input type="text" name="Phone_no" value=""><br><br>
	DateOfBirth <input type="text" name="DOB" value=""><br><br>
	Blood Group <input type="text" name="blood_gp" value=""><br><br>
	<input type="submit" name="submit" value="Submit">
	<input type="submit" name="send_data" value="Send">
</form>
<?php
if($_GET['submit'])
{
// getting data through global array
$name=$_GET['Name'];
$email=$_GET['Email'];
$phno=$_GET['Phone_no'];
$bg=$_GET['blood_gp'];
$DB=$_GET['DOB'];
$city='Lahore';

//echo "$name";  //displaying data on page

//check that form fields are not empty
if($name !="" && $email !="" && $phno !="" && $bg !="")
	{
// Now inserting data into database
$query = "INSERT INTO donors(Name, Email, Phone_no, DOB, Blood_gp, City) VALUES ('$name','$email','$phno','$DB','$bg','$city')";
$data = mysqli_query($conn, $query); 

if($data )
		{
		echo "<font color='green'>Data inserted successfully";

		}
	}
else
{
	echo "All fields are required";
}
}


?>
</body>
</html>