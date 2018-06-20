
<?php
 $con=mysqli_connect('localhost','root','','Easyfee');
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
$D_name = $_POST['deptname'];
$D_year = $_POST['deptyear'];
$D_clg = $_POST['clgnname'];
$result = mysqli_query($con,"SELECT * From student where BranchSection='$D_name'and Year='$D_year' and CollegeName ='$D_clg' ");
echo "<center><h1>Fee's Details </h1></center>";
echo "<center><table border=1>
<tr>
<th>StudentName</th>
<th>RollNumber</th>
<th>CollegeName</th>
<th>Branch/Section</th>
<th>year</th>
<th>FeeName</th>
<th>Totalamount</th>
<th>payedAmount</th>
<th>PayedDate</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['StudentName'] . "</td>";
  echo "<td>" . $row['Rollnumber'] . "</td>";
   echo "<td>" . $row['CollegeName'] . "</td>";
   echo "<td>" . $row['BranchSection'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
  echo "<td>" . $row['FeesName'] . "</td>";
   echo "<td>" . $row['TotalAmount'] . "</td>";
  echo "<td>" . $row['payedAmount'] . "</td>";
 echo "<td>" . $row['PayedDate'] . "</td>";
 echo "</tr>";
}
echo "</table></center>";

 
mysqli_close($con);
 ?>
 <style>
 table {backGround-color:DeepSkyBlue ;}
 th{ backGround-color:DarkOliveGreen  ;}
  tr{ backGround-color:DarkSalmon   ;}
 </style>