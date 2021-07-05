<?php 
session_start();
include_once('dbconfig.php');
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  <body> 
<div class="container" id="container">
  <div class="form-container sign-in-container">
    <form action="" method="post">
      <h1>Sign in</h1>
      <input type="text" name="phonenumber" placeholder="Phone Number" />
      <input type="date" name="dateofbirth" />
      <a href="#" class="forgot-password">Forget Password?</a>
      <a href="register1.php" class="register">Register Here</a>
      <button type="submit" name="submit">Sign In</button><br>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  $phonenumber=$_POST['phonenumber'];
  $dateofbirth=$_POST['dateofbirth'];
  $sql="SELECT phonenumber,dateofbirth FROM studentdetails WHERE phonenumber='$phonenumber' AND dateofbirth='$dateofbirth'";
  $result = mysqli_query($conn,$sql);  
  if($result->num_rows > 0)
  {
    $_SESSION['phonenumber']=$phonenumber;
    header("Location:courses_details.php");
  }
  else
  {
    echo "not user";
  }
}
?>
<script src="js/index.js" type="text/javascript"></script>