<style type="text/css">
td{
	padding: 10px;
}
	
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM donors";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
// database coloum names are provided above
//echo $total; // total number of records
if($total != 0)
{	//echo "Table contains data";
	// in next line, closing php tag here as we cannot use html tags inside phpcode
	?> 
	<table>
		<tr>
			<th>S.no	</th>
			<th>Name	</th>
			<th>Email	</th>
			<th>Phone no.	</th>
			<th>Blood Group	</th>
			<th>City	</th>
			<th colspan="2">Options</th>
		</tr>
	<?php
	while ($result = mysqli_fetch_assoc($data)) {
		/*	echo $result['rollno']." ".$result['name']." ".$result['class']."<br/>";	*/
	// for formatting purpose we drag the closing table tag to last
	echo "<tr>
			<td>". $result['Sno'] ."	</td>
			<td>". $result['Name'] ."	</td>
			<td>". $result['Email'] ."</td>
			<td>". $result['Phone_no'] ."</td>
			<td>". $result['Blood_gp'] ."</td>
			<td>". $result['City'] ."</td>
			<td><a href='update.php?Name=$result[Name]&Email=$result[Email]&Phone_no=$result[Phone_no]&Blood_gp=$result[Blood_gp]&City=$result[City]&Sno=$result[Sno]'>Edit </a></td>
			<td><a href='delete.php?Sno=$result[Sno]'>Delete</a></td>
		</tr>";								}
}else{	//echo" No data found in table"; 
	}
?>
</table>