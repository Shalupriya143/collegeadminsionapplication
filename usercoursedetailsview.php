<?php 
session_start();
include('dbconfig.php');
$phonenumber=$_SESSION['phonenumber'];
$query="SELECT id FROM studentdetails WHERE phonenumber='$phonenumber'";
$selectresult=mysqli_query($conn,$query);
while($res=mysqli_fetch_assoc($selectresult))
{
	$studentid=$res['id'];
}
$sql="SELECT coursename FROM displaycoursedetails WHERE studentid='$studentid'";
$result = mysqli_query($conn,$sql);
?>
<html>
<body>
	<form action="apply_course.php" method="post">
	<p align="center">
		<button type="submit" name="submit" value="Apply">Apply New</button>
	</p>
</form>
<body>
<center><table border="2">
	<tr>
		<th>Course Name</th>
	</tr>
	
	<?php
	while($res=mysqli_fetch_assoc($result))
	{?>
		<tr>
		<td><?php echo $res['coursename'];?></td>
		</tr>
	<?php
}?>

</table>
</center>
</body>
</html>