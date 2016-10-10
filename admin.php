<?php
$con=mysqli_connect("localhost","root","","online_examination");
$sql="select * from image";
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	$id=$row['id'];
	$name=$row['title'];
	echo "$name<a href='edit.php?id=$id'>Edit</a><br/>";

}
?>