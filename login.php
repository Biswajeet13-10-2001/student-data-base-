<?php

session_start();

if($_SESSION['uid'])

{

header('location:admin/admindashboard.php');


}





?>



<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
<h1 align="center" style="font-color:red"> Admin login</h1>

</body>
<section>
<div class="w-50 m-auto">
<form action="login.php" method="post">

<div class="form -group">
<label>username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="form -group">
<label>password</label>
<input type="text" name="password" class="form-control">
</div><br>


<button type="submit" class="btn btn-primary" name="login">login</button>


</form>
</div>

</section>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{

$username = $_POST['username'];

$password= $_POST['password'];

$qry = "SELECT * FROM `admin` WHERE `username`= '$username'AND `password` = '$password' ";

$result = mysqli_query($con, $qry);

$row = mysqli_num_rows($result);

if($row !=1){

?>
<script>
alert('username or password not match!!') ;
window.open('login.php');
</script>
<?php

}


else{
$qy = mysqli_fetch_assoc($result);

$id=$qy['id'];



$_SESSION['uid']=$id;

header('location:admin/admindashboard.php');


}
}
?>















