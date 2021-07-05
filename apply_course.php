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
$sql="SELECT courseid FROM displaycoursedetails WHERE studentid='$studentid'";
$result=mysqli_query($conn,$sql);
while($res=mysqli_fetch_assoc($result))
{
	$courseid=$res['courseid'];
	$print="SELECT * FROM courses WHERE coursesid != '$courseid'";
	$printresult=array(mysqli_query($conn,$print));
}
	foreach($printresult as $res){
?>
<input type="checkbox" name="techno[]" value="<?php echo $res['coursesid'];?>">
<?php echo $res['coursesname'];
}
?><br>
		<button type="submit" name="submit">Submit</button>
		<a href="usercoursedetailsview.php">View</a>	
</form>
</body>
</html>

