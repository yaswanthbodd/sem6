<?php
include("db.php");
include("links.html");
$rno=$_POST["regno"];
$sql="SELECT * FROM stud_info WHERE regno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>Student Information</h1>

<form action="updt.php" name="updt" method="post">
<table border="5">
<tr>
<th>Register.No</th>
<th>Name Of the Student</th>
<th>Gender</th>
<th>DOB</th>
<th>Course</th>
<th>Operation</th>
</tr>

<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><input type="text" value=<?php echo $row['regno']; ?> name="rtf" readonly/></td>
<td><input type="text" value=<?php echo $row['sname']; ?> name="ntf"/></td>
<td><input tyep="text" value=<?php echo $row['gender']; ?> name="gtf" /></td>
<td><input type="date" value=<?php echo $row['dob']; ?> name="dtf" /></td>
<td><input type="text" value=<?php echo $row['course']; ?> name="ctf" /></td>
<td><input type="submit" value="Update" name="update" /></td>
</tr>
<?php
}
?>
</table>
</form>
</center>
