<?php
$con=mysqli_connect("localhost","root","","online_examination");
$sql="select * from image order by posted_date DESC";
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	$id=$row['id'];
	$date=$row['posted_date'];
	$title=$row['title'];
	$image=$row['name'];
	$desc=substr($row['description'],0,20);
 
//	$i=$image.".jpg";
//echo $i;
	echo "$date<br/><b>$title</b><br/><img src='$image'><br/><p>$desc<a href='blog.php?blog_id=$id'>Read More</a></p>";
}
mysqli_close($con);
?>