<?php 
session_start();
(include_once('dbconfig.php'));
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn,$sql);
?>
<html>
<body>
	<form action="selectcoursesinsert.php" method="post">
<?php
while($res=mysqli_fetch_assoc($result))
{ 
	$id=$res['coursesid'];?>
<input type="checkbox" name="techno[]" value="<?php echo $id;?>">
<?php echo $res['coursesname'];?>
	<br>
	<?php
}?>
		<button type="submit" name="submit">Submit</button>
		<a href="usercoursedetailsview.php">View</a>	
	</form>
</body>
</html>
