<?php
$connect=mysqli_connect("localhost", "root", "", "csi")or die("couldn't find server");
echo "connected";

$wn=$_POST["wname"];
$d=$_POST["date"];
$tf=$_POST["time"];
$tt=$_POST["time2"];

$v=$_POST["VOW"];
$scn=$_POST["no"];
$sem=$_POST["email"];

$write=mysqli_query($connect,"INSERT INTO workshopdet values('$wn','$d','$tf','$tt','$v','$scn','$sem')")or die("<br>error cannot write data into database");
  echo "<br>succesfully added into database";
?>	
