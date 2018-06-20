
<?php
ob_start();
   session_start();
 $con=mysqli_connect('localhost','root','','Easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$user_name=$_POST['uname'];
$passwd=$_POST['pass'];
 

$v=0;
$valid=0;
$valid=0;
$tempuser="";
$temppass="";


$result = mysqli_query($con,"SELECT * From  admin where Admin_id='$user_name' and Admin_pass='$passwd'");

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
 {	
	$tempuser = $row['Admin_id'];
	
	
	$temppass = $row['Admin_pass'];
	}
	
	
if(($user_name==$tempuser)&&($passwd==$temppass))
	 {
	 echo "<script>alert('Login Sccuess')</script>";
 }else
	 {
		 $valid=1;
		header("location:services.php?err=".$valid);
		exit;
    
	 }
	 
mysqli_close($con);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Administration</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<style>

table {background-color:DarkOrange;} 
</style>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
<h1><a href="index.html"><span>Fees</span>Verification System<small>Pay . Safe . Verify</small></a></h1>      </div>
     
      <div class="clr"></div>
      <div class="menu">
        <ul>
          <li><a href="index.html"><span>Home</span></a></li>
          <li><a href="services.php" class="active"><span>Administration</span></a></li>
          <li><a href="about.html"><span> Student</span></a></li>
		  <li><a href="Billing.html"><span> Billing</span></a></li>
          <li><a href="contact.html"><span> Help</span></a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="headert_text_resize">
      <div class="textarea">
       <center><h2>Fees Management System </h2></center>
		<center><h2><span> Administration</span></h2></center>
        <p><a href="#"></a></p>
      </div>
      <img src="images/img_1.jpg" alt="" width="130" height="128" />
      <div class="clr"></div>
    </div>
  </div>
  <center> <iframe src="welcome.html" width="800" height="150"></iframe></center>

 <div>
  <center><h1>Administration Entry's</h1></center>
 <br/>
<center><table style="width:60%"><br/>
<tr> 
 <th>Student Fee's Entry </th>
</tr>
 <tr>
<th><p><a class="butn1" href="FeesEntry.html" target=f3 title="click here"  >Entry</a></p><br/></th>
</tr>
<tr> 
 <th>Student Fee's verification</th>
 </tr>
 <tr>
<th><p><a class="butn2" href="AdminVerify.html" target=f3 title="click here">Verify</a></p></br></th>
</tr>
<tr>
<th>Department wise  Fee's Details</th>
</tr>
<tr>
<th><p><a class="butn3" href="Department.html" target=f3 title="click here">Department Wise</a></p></br></th>
</tr>
 <tr>
 <th>Verify All  Fee's Details</th>
 <tr>
 </tr>
<th><p><a class="butn4" href="Showall.php" target=f3 title="click here">Show All</a></p></br></th>
</tr> 
<tr>
 <th>Administration Login Update</th>
 <tr>
 </tr>
<th><p><a class="butn4" href="update1.php" target=f3 title="click here">Change</a></p></br></th>
</tr> 
 </table></center>
 </div>
  </br>
  </br>
  </br>
  </br>
 </div>
    <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<div align=center>Designed By <a href="#">Madhanjith</a></div></body>
</html>
