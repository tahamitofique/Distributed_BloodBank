
<?php
include("connection.php");
error_reporting(0);
$Sno=$_GET['Sno'];
$name=$_GET['Name'];
$email=$_GET['Email'];
$phno=$_GET['Phone_no'];
$bg=$_GET['Blood_gp'];
$city=$_GET['City'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	
	Name <input type="text" name="Name" value="<?php echo ($name);?>"><br><br>
	Email <input type="text" name="email" value="<?php echo ($email);?>"><br><br>
	Phone no. <input type="text" name="phno" value="<?php echo ($phno);?>"><br><br>
	blood Group <input type="text" name="blood_gp" value="<?php echo ($bg);?>"><br><br>
	City <input type="text" name="city" value="<?php echo ($city);?>"><br><br>
	<input type="submit" name="submit" value="Update">
</form>
<?php
if($_GET['submit'])
{
	//AFTER UPDATE,SNO DONT EXIST
$name=$_GET['Name'];
$email=$_GET['email'];
$phno=$_GET['phno'];
$bg=$_GET['blood_gp'];
$city=$_GET['city'];
echo "Button Pressed";
$query = "UPDATE donors SET Name='$name',Email='$email',Phone_no='$phno',Blood_gp='$bg',City='$city' WHERE Sno=$Sno";
$data =mysqli_query($conn,$query);
if ($data) {
		echo "<font color='green'>Record Updated Successfully. <a href='display.php'> View Updated Records</a>";
		# code...
	}
else
	{
		echo "<font color='red'>Sorry! record updation failed.<a href='display.php'> View Records</a>";
	}
}
else
	echo "<font color='blue'>Press Update button to save the changes";
?>
</body>
</html>