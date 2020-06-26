<!doctype html>
<html>
<head>


</head>
<body>
<h3 align="right" margin-right="30px"><a href="login.php"> admin login</a></h3>
<h1 align="center"> welcome to students database management system </h1>

<form action="index1.php" method="post">
<table style="width:40% " align="center" border="1">
<tr >
<td colspan="2" align="center"> students information</td>
</tr>
<tr>
<td align="left"> choose standard</td>

<td>
<select name="std" required>

<option name="1">1st</option>

<option name="2">2nd</option>

<option name="3">3rd</option>

<option name="4">4th</option>


<option name="5">5th</option>

<option name="6">6th</option>

</select>
<td>
</tr>
<tr>
<td align="left">
enter rollno</td>
<td><input type="text" name="rollno"> </td>
</tr>
<tr>
<td colspan="2" align="center "><input type="submit" name="submit" value="student_info"> </td>
</tr>
</table>




</form>
</body>
</html>

<?php


if(isset($_POST['submit']))


{
 


$standard=$_POST['std'];

$rollno=$_POST['rollno'];

include('dbcon.php');

include('function.php');

showdetails($standard,$rollno);







}



?>





