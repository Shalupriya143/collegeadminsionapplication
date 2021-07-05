<?php 
session_start();
(include_once('dbconfig.php')); 
$checkbox1=$_POST['techno'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk = $chk1; 
      $phonenumber=$_SESSION['phonenumber'];
	  $query="SELECT id from studentdetails WHERE phonenumber='$phonenumber'";
      $result = mysqli_query($conn,$query); 
      while($res=mysqli_fetch_assoc($result))
      {
	     $studentid=$res['id'];
      }
      $selectcoursename="SELECT coursesname FROM courses WHERE coursesid='$chk'";
      $resultcoursename=mysqli_query($conn,$selectcoursename);
      while($row=mysqli_fetch_assoc($resultcoursename))
      {
	     $coursesname=$row['coursesname'];
      } 
      $query="INSERT INTO displaycoursedetails(studentid,courseid,coursename)VALUES('$studentid','$chk','$coursesname')";
      $in_ch=mysqli_query($conn,$query); 
   } 
if($in_ch)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }   
?>