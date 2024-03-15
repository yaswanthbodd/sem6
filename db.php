<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";

#connection Establishment
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	#echo "<h1>Connection not Establish...</h1>";
	die("Connection failed:".mysqli_connect_error());
}
	echo "<h1>Connection Estblished with ...</h1>".$dbname;



?>