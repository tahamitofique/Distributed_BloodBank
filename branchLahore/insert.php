<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Insert</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
</head>
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title center bold">Here</h2>
                    <form class="insert" action="" method="GET">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="Name" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="Email" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="Phone_no" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <input class="input--style-4" type="text" name="DOB" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Blood Group</label>
                                    <input class="input--style-4" type="text" name="blood_gp" />
                                </div>
                            </div>
                        </div>

                        <div class="p-t-15 center">
                        <input class="btn btn--radius-2 btn--blue" type="submit" name="submit" value="Submit">
	<input class="btn btn--radius-2 btn--blue" type="submit" name="send_data" value="Send">
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
if($_GET['submit']){{
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
  <!-- Jquery JS-->
	<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/app.js"></script>
</html>