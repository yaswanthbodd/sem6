<?php
include("db.php");
include("links.html");
$rno=$_POST["regno"];
$sql="SELECT * FROM stud_info WHERE regno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>Student Information</h1>

<form action="del.php" name="updt" method="post">
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
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><input type="submit" value="Delete" name="delete" /></td>
</tr>
<?php
}
?>
</table>
</form>
</center>
