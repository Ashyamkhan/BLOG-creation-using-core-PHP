<?php
	$con=mysqli_connect("localhost","root","","online_examination");
$id=$_GET['id'];
$sql1="select * from image where id='$id'";
$run1=mysqli_query($con,$sql1);

while($ruow=mysqli_fetch_array($run1))
{
		$t=$ruow['title'];
$d=$ruow['description'];
$i=$ruow['name'];
echo "<form method='post' action='' enctype='multipart/form-data'>";
echo "Enter Blog Title:<input type='text' name='title' value='$t'><br/>";
echo "Enter Blog Desc:<textarea name='desc' >$d</textarea><br/>";
echo "<div style='background-color:gray;height:200px;width:900px;color:white;'>Selec Image:<input type='file' name='file' ><br/><img src='$i' height=50 width=50 style='padding-left:300px;'><br/></div>";
echo "<input type='submit' name='update'><br/>";
}
if(isset($_POST['update']))
{
	$title=$_POST['title'];
$desc=$_POST['desc'];
$image=$_FILES['file']['name'];
$random=mt_rand();
if(!(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$random)))
	echo "not uploaded";
rename($image,$random);
$img="images/".$random;
$dt=date("y/m/d h:i:sa");

	$sql="update image set title='$title',description='$desc',name='$img',posted_date='$dt' where id='$id'";
$run=mysqli_query($con,$sql);
if(!$run){
echo mysqli_error($con);
}
else
{
echo "<script>alert('Blog Successfully Updated in the database');</script>";
echo "<script>window.open('slider.php','_self')</script>";
}
}
?>
