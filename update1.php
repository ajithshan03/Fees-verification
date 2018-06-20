<html>
 <head>
 <title>Admin-Update's</title>
 <style>
table {background-color:Lavender     ;}
th {color:red  ;}
body{background-color:white; }
h2 {color:red;}
 </style>
 </head>
 <body>
 <center><h2>Admin-Update's</h2></center>
 <form action="update.php" method="post">
 <center><table>
 <tr>
 <th>Enter The Current Admin Name </th>
 <td><input type="text" class="form-control" required="required" name="aname" </td>
 </tr>
 </br>
 <tr>
 <th>Enter New Admin Name</th>
 <td><input type="text" class="form-control" required="required" name="nadm"></td>
 </tr>
  <tr>
 <tr>
 <th>Enter The Current Password</th>
 <td><input type="password" class="form-control" required="required" name="pwd"</td>
 </tr>
 <tr>
 <th>Enter New  Password</th>
 <td><input type="password" class="form-control" required="required" name="npwd"></td>
 </tr>
  <tr>
 <center><td><input type="submit" value="Change" </td>
 </tr>
 </form>
 </table></center>
 </body>
 </html>