<?php
include("db.php");
$rno=$_POST["regno"];
$sql="SELECT * FROM stud_info WHERE regno='$rno'";
$result=mysqli_query($conn,$sql);
?>
<center>
<h1>Student Information</h1>
<table border="5">
<tr>
<th>Register.No</th>
<th>Name Of the Student</th>
<th>Gender</th>
<th>DOB</th>
<th>Course</th>
</tr>

<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['regno']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['course']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
