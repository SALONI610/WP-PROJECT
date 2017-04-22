<?php
$connect=mysqli_connect("localhost", "root", "", "csi")or die("couldn't find server");
echo "connected";

$d=$_POST["DOW"];
$t=$_POST["TOW"];
$v=$_POST["VOW"];
$s=$_POST["sname"];

$f=$_POST["fname"];
$l=$_POST["lname"];
$a=$_POST["address"];
$c=$_POST["cno"];

$email=$_POST["em"];
$de=$_POST["dept"];
$y=$_POST["year"];
$m=$_POST["mem"];


$write=mysqli_query($connect,"INSERT INTO mem values('$d','$t','$v','$s','$f','$l','$a','$c','$email','$de','$y','$m')")or die("<br>error cannot write data into database");
  echo "<br>succesfully added into database";
?>	
