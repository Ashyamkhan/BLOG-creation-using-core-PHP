<?php
$con=mysqli_connect("localhost","root","","online_examination");
$sql="select * from image order by posted_date DESC";
$run=mysqli_query($con,$sql);
echo "<center><h2>All Blogs</h2></center>";
while($row=mysqli_fetch_array($run))
{
	$id=$row['id'];
	$date=$row['posted_date'];
	$title=$row['title'];
	$image=$row['name'];
	$desc=substr($row['description'],0,20);
 
//	$i=$image.".jpg";
//echo $i;
	echo "<br/><span style='padding:130px;'><b><a href='blog.php?blog_id=$id'>$title</a></b><br/></span><span style='font-size:13px;'>Posted Date:&nbsp;$date</span><br/><br/><img src='$image'><br/><p>$desc&nbsp;&nbsp;&nbsp;<a href='blog.php?blog_id=$id'>Read More</a></p>";
}
mysqli_close($con);
?>