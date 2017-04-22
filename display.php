<?php 
$connect=mysqli_connect("localhost", "root", "", "csi")or die("couldn't find server");
echo "connected";

$sql = "SELECT fname,lname, cno, em, dept, year,mem FROM Registration";
$result = $connect->query($sql);

if ($result->num_rows > 0)
	{

while($row = $result->fetch_assoc()) {
}
}
else{
echo "0 results found";}
?>

<!DOCTYPE html>

<html>
<head>

	<title>List</title>
	<style>

	
	fieldset
	{
    	display: block;
    	width: 50%;
		text-align:center;
		margin-left: 10%;
    	margin-right: 20%;
    	border-width: 2px;
    	border-color: black;
			
    }
			
	#grad1{
	 background: -moz-linear-gradient(bottom right, rgb(219, 183, 187), rgb(219, 230, 187));
	background: linear-gradient(to bottom right, rgb(219, 183, 187),rgb(219, 230, 187));
	}

	h2 {
    text-shadow: 1px 1px;
    }

	pre {
    	font-family: verdana;
    	font-size: 15px;
	text-align:center;
	text-color: blue;
	}
	
	

	table{
	border: 2px;
	display: table;
    border-collapse: collapse;
    border-spacing: 0px;
    border-color: black;
    width: 100%;
	}
	
	th,td{
	padding: 5px;
	}
	
	
.center {
    margin: auto;
    width: 60%;
    border: 1px solid rgb(160,160,160);
    padding: 40px;
	}

.button {
    background-color: 	rgb(155,155,155);
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
	
	.back{
	background-image: url("index.jpeg");
	background-repeat: no-repeat;
	background-size: 100% 100%
	}
	</style>



</head>
<body style="background-color:rgb(230, 255, 255)" >

<table  border="1"  id="grad1" class="center">
<tr>
<td>

<center >
<table class="back">
<tr>
	<td><img src="DBIT_logo.png" alt="DBIT LOGO" style="width: 75px;height: 75px;"></td>
	<td><font size="6" font color="white">DON BOSCO INSTITUTE OF TECHNOLOGY</font><br>
	<center><font size="4" color="white">CSI</font></center></td>
	<td><img src="csi-logo.png" alt="CSI LOGO" style="width: 75px;height: 75px;"></td>
</tr>
</table >
<hr>

<center><h2>LIST OF STUDENTS REGISTERED</h2></center>
</center>

<fieldset>
<legend>List of students</legend>
<br>
<table border=1	 align="center">
<tr>
	<th>STUDENT NAME</th>
	<th>CONTACT NO</th>
	<th>EMAIL ID</th>
	<th>DEPARTMENT</th>
	<th>YEAR</th>
	<th>CSI MEMBER</th>
<tr>

<tr>
	<td><?php $row["fname"]?></td>
	<td><?php $row["cno"] ?></td>
	<td><?php $row["em"] ?></td>
	<td><?php $row["dept"] ?></td>
	<td><?php $row["year"] ?></td>
	<td><?php $row["mem"] ?></td>
</tr>
</table>
</form>
</body>
</html>
