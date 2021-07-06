<?php 
session_start();
include_once('dbconfig.php');
$phonenumber=$_SESSION['phonenumber'];
$query="SELECT id FROM studentdetails WHERE phonenumber='$phonenumber'";
$selectresult=mysqli_query($conn,$query);
while($res=mysqli_fetch_assoc($selectresult))
{
	$studentid=$res['id'];
}
?>
<html>
<body>
	<form action="selectcoursesinsert.php" method="post">
<?php
	$sql="SELECT * FROM courses WHERE coursesid NOT IN (SELECT courseid FROM displaycoursedetails WHERE studentid='$studentid')";
	$printresult=mysqli_query($conn,$sql);
	while($res=mysqli_fetch_assoc($printresult))
	{
?>
<input type="checkbox" name="techno[]" value="<?php echo $res['coursesid'];?>">
<?php echo $res['coursesname'];?>
<br>
<?php
}
?><br>
		<button type="submit" name="submit">Submit</button>	
</form>
</body>
</html>

