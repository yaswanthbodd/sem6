<?php
include("db.php");
include("links.html");
$rno=$_POST["rtf"];
$sql="DELETE FROM stud_info WHERE regno='$rno'";
if(mysqli_query($conn,$sql)){
	echo "<h1>".$rno." Deleted Successfully...... </h1>";
}else{
	echo "<h1>".$rno." Deleted UnSuccessfully...... </h1>";
}
?>

