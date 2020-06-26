
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
<br><br>

<table align="center">
<form action="updatestudent.php" method="post">

<tr>
<th> standard</th>
<td><input type ="number" name="standard" placeholder="standard" required></td>

<th> enter name</th>

<td><input type="text" name="name" placeholder="name" required> </td>

 <td colspan="2"><input type="submit" name="submit" value="search" ></td>

</tr>




</form>
</table>

</body>
</html>

<table align="center" border="1" style="margin-top:20px;" width="80%">
<tr>


<th>no</th>
<th>image</th>
<th>name</th>
<th>rollno</th>
<th>edit</th>
</tr>
<?php

if(isset($_POST['submit']));

{

include('../dbcon.php');

$standard = $_POST['standard'];

$name = $_POST['name'];

$sql= "SELECT * FROM `students` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";

$run =mysqli_query($con,$sql);

if(mysqli_num_rows($run)<1)
{

?>
<script>
alert("no record found");
</script>
<?php

}
else{

$count=0;

while($data=mysqli_fetch_assoc($run))

{

$count++;

?>

<tr>
<td><?php echo $count; ?></td>


<td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;" /></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['rollno']; ?></td>
<td><a href="updateform.php?sid=<?php echo $data['id'];?>"> edit </a></td>
</tr>

<?php




}



}



}

?>

</table>















