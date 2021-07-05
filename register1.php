<?php
session_start();
 include_once('dbconfig.php');?>
<html>
<head>
  <meta charset="UTF-8">
  <title>application</title>
    <link rel="stylesheet" type="text/css" href="css/reg1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<form id="msform" action="" method="post" enctype="multipart/form-data">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Personal Information</li>
		<li>Education Details</li>
		<li>Other Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<center><h2 class="fs-title">Personal Information</h2>
		</center>
		<label for="firstimg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="../application/img/profile1.png" align="right" style="font-size:25px;border:1px solid black; padding:5px; cursor:pointer;" />
        </label>
            <input type="file" name="file" id="firstimg" style="display:none; visibility: none;" onchange="getIamge(this.value);">
        <div id="display-image"></div>
		<input type="text" name="name" placeholder="User Name" required> 
		<input type="text" name="gender" placeholder="Gender" required />
		<input type="date" name="dateofbirth" placeholder="Date Of Birth" required />
		<input type="text" name="age" placeholder="Age" required />
		<input type="text" name="aadharcardnumber" placeholder="Aadhar Card Number" required />
		<input type="email" name="email" placeholder="Email" required />
		<input type="text" name="phonenumber" placeholder="Phone Number" required />
		<input type="text" name="fathername" placeholder="Father Name" required />
		<input type="text" name="fatherqualification" placeholder="Father Qualification" required />
		<input type="text" name="fatheroccupation" placeholder="Father Occupation" required />
		<input type="text" name="mothername" placeholder="Mother Name" required />
		<input type="text" name="motherqualification" placeholder="Mother Qualification" required />
		<input type="text" name="motheroccupation" placeholder="Mother Occupation" required />
		<input type="text" name="nationality" placeholder="Nationality" required />
		<textarea id="text" name="address" rows="4" cols="50" placeholder="Address" required /></textarea>
		<input type="text" name="pincode" placeholder="PinCode" required />
		<input type="text" name="state" placeholder="State" required />
		<input type="text" name="caste" placeholder="Caste" required />
		<input type="text" name="religion" placeholder="Religion" required />
		<input type="text" name="category" placeholder="Category" required />
 		<button type="submit" name="next" class="next action-button" value="Next" />Next
	</fieldset>
	<fieldset>
		<center><h2 class="fs-title">Education Details</h2></center>
		<input type="text" name="mark" placeholder="Mark Scored In 12th" required /><br><br>
		<table  border="1" style="width: 100%;height:110px;border-color:#eee;">
		<tbody>
		<tr height="50%">
<td><center>Subject</center></td>
<td><center>Maximum Mark</center></td>
<td><center>Scored Mark</center></td>
</tr>
<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="tamil" placeholder="Enter your mark" /></center></td>
</tr>

<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="english" placeholder="Enter your mark" /></center></td>
</tr>
<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="maths" placeholder="Enter your mark" /></center></td>
</tr>
<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="physics" placeholder="Enter your mark" /></center></td>
</tr>
<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="chemistry" placeholder="Enter your mark" /></center></td>
</tr>
<tr height="50%">
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" placeholder="Enter Subject Name" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" value="100" /></center></td>
<td><center><input type='text' style="border-bottom-style:none;outline:none;background-color:transparent;" height="50px" name="csorbio" placeholder="Enter your mark" /></center></td>
</tr>
</tbody>
</table>
<br>
		<input type="text" name="nameofschool" placeholder="Name Of The School" required />
		<input type="text" name="schoolboard" placeholder="School Board" required />
		<input type="text" name="districtofschool" placeholder="District Of The School" required />
		<textarea id="text" name="address1" rows="4" cols="50" placeholder="Address Of The School With Pincode" required /></textarea>
		<button type="submit" name="previous" class="previous action-button" value="Previous" />Previous
		<button type="submit" name="next" class="next action-button" value="Next" />Next
	</fieldset>
	<fieldset>
		<center>
			<h2 class="fs-title">Other Details</h2>
		</center>
   <div class="msform">
  	   <form>
  	   <label for="sports">Sports Category</label>
       <label class="radio-inline">
       <input type="radio" name="tab" onclick="show1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES
       </label>
       <label class="radio-inline">
       <input type="radio" name="tab" value="no" onclick="show2();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO
       </label>
       </form> 
       <div id="div1" style="display:none;">
            <input type="file"  name="one" />
            <input type="file" name="two" />
            <input type="file" name="three" />
            <input type="file" name="four" />
            <input type="file" name="five" />
        </div>
   </div>
        <br>
   <div class="msform">
  	   <form>
  	   <label for="serviceman">Ex- Service Man</label>
       <label class="radio-inline">
       <input type="radio" name="tab1" onclick="display1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES
       </label>
       <label class="radio-inline">
       <input type="radio" name="tab1" value="no" onclick="display2();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO
       </label>
       </form> 
       <div id="div2"  style="display:none;">
            <input type="file"  name="six" />
        </div>
   </div>
   <div class="msform">
  	   <form>
  	   <label for="physical">PhysicalDisable</label>
       <label class="radio-inline">
       <input type="radio" name="tab2" onclick="see1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES
       </label>
       <label class="radio-inline">
       <input type="radio" name="tab2" value="no" onclick="see2();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO
       </label>
       </form> 
       <div id="div3"  style="display:none;">
            <input type="file"  name="seven" />
        </div>
   </div>
   		<label for="bankdetails">BANK ACCOUNT<BR>INFORMATION</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="branchname" placeholder="Branch Name" style="width:75%" "height:75%;" "font-style:15%;" "text-align:right;" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="accountnumber" placeholder="Account Number" style="width:75%" "height:75%;" "font-style:15%;" "text-align:right;" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="ifsc" placeholder="IFSC Code" style="width:75%" "height:75%;" "font-style:15%;" "text-align:right;" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="micrnumber" placeholder="MICR Number" style="width:75%" "height:75%;" "font-style:15%;" "text-align:right;" required />
		<button type="button" name="previous" class="previous action-button" value="Previous" />Previous
		<button type="submit" name="submit"  value="Submit" />Submit</button>
	</fieldset>
</form>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="js/index.js"></script>
  <script src="js/reg1.js"></script>
  <script type="text/javascript" src="js/reg2.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $fileName8 = $_FILES["file"]["name"];
    $file_temp_loc = $_FILES["file"]["tmp_name"];
    $targetFilePath8 = "../collegeadminisionapplication/upload/$fileName8";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath8);  
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $age=$_POST['age'];
    $aadharcardnumber=$_POST['aadharcardnumber'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $fathername=$_POST['fathername'];
    $fatherqualification=$_POST['fatherqualification'];
    $fatheroccupation=$_POST['fatheroccupation'];
    $mothername=$_POST['mothername'];
    $motherqualification=$_POST['motherqualification'];
    $motheroccupation=$_POST['motheroccupation'];
    $nationality=$_POST['nationality'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];
    $caste=$_POST['caste'];
    $religion=$_POST['religion'];
    $category=$_POST['category'];
    $mark=$_POST['mark'];
    $tamil=$_POST['tamil'];
    $english=$_POST['english'];
    $maths=$_POST['maths'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $csorbio=$_POST['csorbio'];
    $nameofschool=$_POST['nameofschool'];
    $schoolboard=$_POST['schoolboard'];
    $districtofschool=$_POST['districtofschool'];
    $address1=$_POST['address1'];
    $fileName1 = $_FILES["one"]["name"];
    $file_temp_loc = $_FILES["one"]["tmp_name"];
    $targetFilePath1 = "../collegeadminisionapplication/upload/$fileName1";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath1);
    $fileName2 = $_FILES["two"]["name"];
    $file_temp_loc = $_FILES["two"]["tmp_name"];
    $targetFilePath2 = "../collegeadminisionapplication/upload/$fileName2";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath2);
    $fileName3 = $_FILES["three"]["name"];
    $file_temp_loc = $_FILES["three"]["tmp_name"];
    $targetFilePath3 = "../collegeadminisionapplication/upload/$fileName3";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath3);
    $fileName4 = $_FILES["four"]["name"];
    $file_temp_loc = $_FILES["four"]["tmp_name"];
    $targetFilePath4 = "../collegeadminisionapplication/upload/$fileName4";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath4);
    $fileName5 = $_FILES["five"]["name"];
    $file_temp_loc = $_FILES["five"]["tmp_name"];
    $targetFilePath5 = "../collegeadminisionapplication/upload/$fileName5";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath5);
    $fileName6 = $_FILES["six"]["name"];
    $file_temp_loc = $_FILES["six"]["tmp_name"];
    $targetFilePath6 = "../collegeadminisionapplication/upload/$fileName6";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath6);
    $fileName7 = $_FILES["seven"]["name"];
    $file_temp_loc = $_FILES["seven"]["tmp_name"];
    $targetFilePath7 = "../collegeadminisionapplication/upload/$fileName7";
    $upload  = move_uploaded_file($file_temp_loc,$targetFilePath7);
    $branchname=$_POST['branchname'];
    $accountnumber=$_POST['accountnumber'];
    $ifsc=$_POST['ifsc'];
    $micrnumber=$_POST['micrnumber'];
  $sql="INSERT INTO 
  studentdetails(image,name,gender,dateofbirth,age,aadharcardnumber,email,phonenumber,fathername,fatherqualification,fatheroccupation,mothername,motherqualification,motheroccupation,nationality,address,pincode,state,caste,religion,category,mark,tamil,english,maths,physics,chemistry,csorbio,nameofschool,schoolboard,districtofschool,address1,sportone,sporttwo,sportthree,sportfour,sportfive,serviceman,physicaldisable,branchname,accountnumber,ifsc,micrnumber)
   VALUES('$targetFilePath8','$name','$gender','$dateofbirth','$age','$aadharcardnumber','$email','$phonenumber','$fathername','$fatherqualification','$fatheroccupation','$mothername','$motherqualification','$motheroccupation','$nationality','$address','$pincode','$state','$caste','$religion','$category','$mark','$tamil','$english','$maths','$physics','$chemistry','$csorbio','$nameofschool','$schoolboard','$districtofschool','$address1','$targetFilePath1','$targetFilePath2','$targetFilePath3','$targetFilePath4','$targetFilePath5','$targetFilePath6','$targetFilePath7','$branchname','$accountnumber','$ifsc','$micrnumber')";
  $sim=mysqli_query($conn,$sql);
  if($sim)
  {
    echo"insert";
  }
  else
  {
    echo"not insert";
  }
  }
?>