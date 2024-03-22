<?php
include("links.html");
include("db.php");
$rn=$_POST["rtf"];
$un=$_POST["ntf"];
$ug=$_POST["gtf"];
$ud=$_POST["dtf"];
$uc=$_POST["ctf"];

$sql="UPDATE stud_info SET sname='$un',gender='$ug',dob='$ud',course='$uc' where regno='$rn'";

if(mysqli_query($conn,$sql)){
	echo "<h1>".$rn." Updated Successfully</h1>";
}else{
	echo "<h1>".$rn." Not Updated </h1>";
}

?>