<?php

function showdetails($standard,$rollno)

{

include('dbcon.php');

$sql="SELECT * FROM `students` WHERE `rollno`='$rollno' AND`standard`='$standard'";

$run=mysqli_query($con,$sql);

if(mysqli_num_rows($run)>0)

{

$data=mysqli_fetch_assoc($run);

?>
<table border="1" align="center" style="margin-top:30px; width:60%">
<tr>
<th colspan="2"> students details</th>
</tr>
<tr>
<td rowspan="5"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-width:150px; max-height:120px"></td>
<th> rollno</th>
<td><?php echo $data['rollno']; ?></td>
</tr>

<tr>

<th> name</th>
<td><?php echo $data['name']; ?></td>
</tr>

<tr>

<th> contact</th>
<td><?php echo $data['contact']; ?></td>
</tr>

<tr>

<th> city</th>
<td><?php echo $data['city']; ?></td>
</tr>

<tr>

<th> standard</th>
<td><?php echo $data['standard']; ?></td>
</tr>

</table>





<?php

}else{


echo"<script> alert('record not found') </script>";





}










}












?>