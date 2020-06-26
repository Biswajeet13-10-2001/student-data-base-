<?php


include('../dbcon.php');

$rollno = $_POST['rollno'];
$name= $_POST['name'];
$city= $_POST['city'];
$contact= $_POST['contact'];
$std = $_POST['std'];
$id = $_POST['sid'];
$imagename = $_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimg/$imagename");


$qry = "UPDATE `students` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `contact` = '$contact', `standard` = '$std', `image` = '$imagename' WHERE  `id` = '$id'";


$run = mysqli_query($con,$qry);

if($run == true)
{

?>

<script>
alert('data collected successfully');
window.open('updateform.php?sid=<?php echo $id;?>','_self');

</script>

<?php


}








?>






