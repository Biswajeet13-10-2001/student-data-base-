
<?php

session_start();

if($_SESSION['uid'])
{
echo" ";

}else{
header('location:../login.php');


}

?>
<html>
<head>
<style>

.admin{
background-color:red;
margin-top:30px;
height:150px;
font-size:25px;
padding:10px;
width:90%;


}

.student td{
text-align:center;
font-size:25px;

}
.student{ font-size:25px; }

body{ background-color:green;}

.student table{ height:30%; background-color:pink; padding:30px;   }

</style>
</head>
<body>

<div class="admin">

<h1 align="center" > welcome to adminpanel </h1>
<h4>
<a href="admindashboard.php" style="float:left; margin-right:30px"> Back to adminpanel </a>
<a href="logout.php" style="float:right; margin-right:30px" > logout</a></h4>

</div>

<form action="addstudent.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" style="width:50%; margin-top:40px; height:400px; border-color:red; font-size:25px;">

<tr>
<th> roll no</th>
<td><input type="text" name="rollno" placeholder="enter rollno" required> </td>
</tr>
<tr>
<th> full name</th>
<td><input type="text" name="name" placeholder="enter full name" required> </td>
</tr>
<tr>
<th> city</th>
<td><input type="text" name="city" placeholder="enter city" required> </td>
</tr>
<tr>
<th> parent contact no</th>
<td><input type="text" name="contact" placeholder=" parent contact no." required> </td>
</tr>
<tr>
<th> standard</th>
<td><input type="text" name="std" placeholder="enter standard" required> </td>
</tr>
<tr>
<th> image</th>
<td><input type="file" name="simg"  required > </td>
</tr>
<tr>

<td colspan="2" align="center"><input type="submit" name="submit" > </td>
</tr>


</table>
</form>




</body>
</html>



<?php

if(isset($_POST['submit']))
{

include('../dbcon.php');

$rollno = $_POST['rollno'];
$name= $_POST['name'];
$city= $_POST['city'];
$contact= $_POST['contact'];
$std = $_POST['std'];
$imagename = $_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimg/$imagename");


$qry = "INSERT INTO `students`( `rollno`, `name`, `city`, `contact`, `standard`,`image`) VALUES ('$rollno','$name','$city','$contact','$std','$imagename ')";


$run = mysqli_query($con,$qry);

if($run == true)
{

?>

<script>
alert('data inserted successfully');

</script>

<?php


}




}



?>





















