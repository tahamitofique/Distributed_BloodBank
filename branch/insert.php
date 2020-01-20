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

$query = "INSERT INTO temp(Name, Email, Phone_no, DOB, Blood_gp, City) VALUES ('$name','$email','$phno','$DB','$bg','$city')";
$temp_data = mysqli_query($conn, $query); 
if($data && $temp_data)
		{
		echo "<font color='green'>Data inserted successfully";

		}
	}
else
{
	echo "All fields are required";
}
}
	$db=mysqli_connect('192.168.43.172',"tahami","tahami123","bloodbank");
	$query = "SELECT * from temp";
$data = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($data)){
$d_id=$row['DonorID'];
$name=$row['Name'];
$email=$row['Email'];
$phno=$row['Phone_no'];
$bg=$row['Blood_gp'];
$DoB=$_row['DOB'];

    $data_send = "INSERT INTO donors(Name, Email, Phone_no, DOB, Blood_gp, City, ref) VALUES ('$name','$email','$phno','$DoB','$bg','Lahore','$d_id')";
	$data1 = mysqli_query($db, $data_send);
}
$emp = "TRUNCATE Table temp";
$data = mysqli_query($conn, $emp);
}

{
$queryy = "SELECT * from temp_b";
$data_b = mysqli_query($conn, $queryy);

while($roww = mysqli_fetch_array($data_b)){
$d_id=$roww['Donor_id'];
$date=$roww['Date'];
$quantity=$roww['Quantity'];

    $data_sendd = "INSERT INTO donations( `Quantity`, `Donor_id`,`ref`) VALUES ('$quantity','$d_id','$date')";
	$data11 = mysqli_query($db, $data_sendd);
}

$empp = "TRUNCATE Table temp_b";
$dataa = mysqli_query($conn, $empp); 
}
}
?>
</body>
</html>