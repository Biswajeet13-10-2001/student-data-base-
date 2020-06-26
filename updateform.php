
<?php

session_start();

if($_SESSION['uid'])
{
echo" ";

}else{
header('location:../login.php');





}

?>
<?php

include('../dbcon.php');

$sid = $_GET['sid'];

$sql= " SELECT * FROM `students` WHERE `id`='$sid'";

$run = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);



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

<form action="updatedata.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" style="width:50%; margin-top:40px; height:400px; border-color:red; font-size:25px;">

<tr>
<th align="center"> roll no</th>
<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?>> </td>
</tr>
<tr>
<th align="center"> full name</th>
<td><input type="text" name="name" value=<?php echo $data['name']; ?>> </td>
</tr>
<tr>
<th align="center"> city</th>
<td><input type="text" name="city" value = <?php echo $data['city']; ?>> </td>
</tr>
<tr>
<th align="center"> parent contact no</th>
<td><input type="text" name="contact" value=<?php echo $data['contact']; ?>> </td>
</tr>
<tr>
<th align="center"> standard</th>
<td><input type="text" name="std" value=<?php echo $data['standard']; ?>> </td>
</tr>
<tr>
<th align="cneter"> image</th>
<td><input type="file" name="simg" value="simg" > </td>
</tr>
<tr>

<td colspan="2" align="center"> 
<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" >

<input type="submit" name="submit" > </td>
</tr>


</table>
</form>








</body>
</html>