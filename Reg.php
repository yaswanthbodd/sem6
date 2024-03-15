<?php

#include the other page information
include("db.php");

$regno=$_POST["regno"];
$sname=$_POST["sname"];
$pass=$_POST["pwd"];
$gen=$_POST["gender"];
$dob=$_POST["dob"];
$cor=$_POST["course"];

echo "<center style='font-size:20px;'>";
echo "<h1 style='color:red;'>Student Details</h1>";
echo "</br>Student Reg.No: ".$regno;
echo "</br>Student Name: ".$sname;
echo "</br>Password: ".$pass;
echo "</br>Student Gender: ".$gen;
echo "</br>Date of Birth: ".$dob;
echo "</br>Student Course: ".$cor;
echo "</center>";

$sql="INSERT INTO stud_info VALUES('$regno','$sname','$pass','$gen','$dob','$cor')";

if(mysqli_query($conn,$sql)){
	echo "<h1> One Record inserted";
}else{
	echo "<h1> Not inserted";
}
?>