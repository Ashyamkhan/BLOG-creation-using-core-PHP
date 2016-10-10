<?php
$con=mysqli_connect("localhost","root","","online_examination");
$id=$_GET['blog_id'];
$sql="select * from image where id='$id'";
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	$date=$row['posted_date'];
	$title=$row['title'];
	$image=$row['name'];
	$desc=$row['description'];
 
//	$i=$image.".jpg";
//echo $i;
	echo "$date<br/><b>$title</b><br/><img src='$image'><br/><p style='margin-left:10px;margin-right:300px;'>$desc</a></p>";
}
?>