<?php
 $con=mysqli_connect('localhost','root','','easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$ad_name=$_POST['aname'];
$new_pass=$_POST['npwd'];
$admin_new=$_POST['nadm'];


$result = mysqli_query($con,"UPDATE admin set Admin_pass='$new_pass',Admin_id='$admin_new'where Admin_id='$ad_name'");
echo "<script>alert('Your Password is Success Changed')</script>";
 
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
form {background-color:Azure;} 
</style>
<?php
$err="";
if(isset($_GET['err']) && $_GET['err']!='') {
	$err=$_GET['err'];
}
if($err==1){
	echo "<script>alert('Please Enter Your Correct Name and Password');</script>";
}
?>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
<h1><a href="index.html"><span>Fees</span>Verification System<small>Pay . Safe . Verify</small></a></h1>      </div>
      <div class="search">
        <form id="form1" name="form1" method="post" action="#">
          <span>
          <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
          </span>
        </form>
      </div>
      <div class="clr"></div>
      <div class="menu">
        <ul>
          <li><a href="index.html"><span>Home</span></a></li>
          <li><a href="services.html" class="active"><span>Administration</span></a></li>
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
       <center> <h2>Fees Management System </h2></center>
		<center><h2><span> Administration</span></h2></center>
		<center><h2><span> Login Page</span></h2></center>
        <p><a href="#"></a></p>
      </div>
      <img src="images/img_1.jpg" alt="" width="130" height="128" />
      <div class="clr"></div>
    </div>
 <div class="bg"></div>
		  <p></p>
        </div>
		<div class="body">
    <div class="body_resize">
      <div class="left">
       <center> <h2><a href="services.html" class="active">Login</a></h2></center>
 <center> <form action="Administration.php" method="post">
</br>
</br>
<center><table>
<tr>
<th>Admin-Name</th>
<td><input type="text" class="form-controls"  required="required" name="uname"></td>
</tr>
</br>
<tr>
<th>Admin-Password</th>
<td><input type="password" class="form-controls" required="required" name="pass"></td>
</tr>

<tr>
<td><center><input type="Submit" value="Login"></center></td>

</tr>
</table></center>
</br>
</br>
</br>
<center><p> Enter Your AdministrationName and Password for login into our Administration Page.</p></center>
<center><p> Only Using Administration Only .</p></center>
</br>
</form></center>
 <div class="bg"></div>
		  <p></p>
        </div>
        
        <div class="right">
          <h2>Sidebar Menu</h2>
          <ul>
            <li><a href="index.html">Home</a></li>
			<li><a href="services.php">Billing</a></li>
             <li><a href="about.html">Student</a></li>
            <li><a href="contact.html">Help</a></li>
           
          </ul>
        </div>
        <div class="clr"></div>
    
</br>
</br>
</br>
</br>
</br>
</br>

      <h3><span>Posted by Owner </span></h3>
      <div class="clr"></div>
    </div>
  </div>
  <div class="FBG">
    <div class="FBG_resize">
      <div class="blok">
        <h2>About</h2>
        <img src="images/img_4.jpg" alt="" width="78" height="79" />
       
        </p>
      </div>
      
        <div class="blok">
        <h2>Fee's Management System</h2>
        <p><strong>Fee's Management is Mainly Used For Storing our Student Fee's Detail's.</strong>FMS Having Two Modules are Administration and Student . <br />
         Billing is used for take student fee's detail's as Bill Structure.</p>
        <ul>
          <li><a href="http://www.Gmail.com/">•Gmail.</a></li>
          <li><a href="http://www.Facebook.com/">• FaceBook.</a></li>
          <li><a href="http://www.Twitter.com/">• Twitter.</a></li>
          <li><a href="http://www.Googlepluse.com/">• Google+.</a></li>
        </ul>
      
       </div>
      <div class="blok">
        <h2>Image Gallery</h2>
        <img src="images/sample1.jpg" alt="" width="68" height="68" /><img src="images/sample2.jpg" alt="" width="68" height="68" /><img src="images/sample3.jpg" alt="" width="68" height="68" /><img src="images/sample4.jpg" alt="" width="68" height="68" /><img src="images/sample5.jpg" alt="" width="68" height="68" /><img src="images/sample6.jpg" alt="" width="68" height="68" />
<div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Layout by Hot <a href="http://www.hotwebsitetemplates.net/">Monster.com</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<div align=center>Designed By <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>

 