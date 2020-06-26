
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
<h4><a href="logout.php" style="float:right; margin-right:30px"> logout</a></h4>

</div>
<br><br>

<div class="student">
<table align="center" style="width:30%" margin:"30px ">

<tr>
<td align="center"><a href="addstudent.php">add student details </a></td>
</tr>

<tr>
<td><a href="deletestudent.php">delete student details </a></td>
</tr>

<tr>
<td><a href="updatestudent.php">update student details </a></td>
</tr>


</table>
</div>

</body>

</html>