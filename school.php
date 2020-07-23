<html>
<head>
   <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
	<title>School Info</title>
	<style type="text/css">
		body{
			background-color: #FF5722;

		}
	</style>
</head>
<body>
		<?php
$host="localhost";
$db="Unifeed";
$username="blackdante";
$pass="";
$con = new mysqli($host,$username,$pass,$db);
$id=$_GET['id'];

$sql="SELECT * FROM schools WHERE id='$id'";
$result=$con->query($sql);
if($result->num_rows ==1) {
	
	while ($row=$result->fetch_assoc()) {
		

echo '
<div class="container my-3 py-1 ">
<table class="table bg-white table-bordered table-striped">
	<tbody>
	<tr><td colspan="3"><center><img src='.$row['logo'].' width="200" height="200" /><br><br><p>School Logo</p></center></td></tr>
	<tr>
		<td colspan="1"><b>School Name :</b></td>
		<td>'.$row['schName'].'</td>
	</tr>
	<tr>
		<td><b>Location :</b></td>
		<td> '.$row['location'].'</td>
	</tr>
	<tr>
		<td><b>Year Built :</b></td>
		<td> '.$row['yearBuilt'].'</td>
	</tr>
	<tr>
		<td><b>Courses :</b></td>
		<td> '.$row['courses'].'</td>
	</tr>
	<tr>
		<td><b>History :</b></td>
		<td>'.$row['schHistory'].' </td>
	</tr>
	<tr>
		<td><b>Website :</b></td>
		<td><a target="_blank" href='.$row['schWebsite'].'>'.$row['schWebsite'].' </a></td>
	</tr>
	</tbody>
</table>';
}
}
?>
</div>
</body>
</html>


