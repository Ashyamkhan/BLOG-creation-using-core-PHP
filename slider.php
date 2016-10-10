<html>
<head>
<title>Sliders</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
Enter Blog Title <input type="text" name="title" id="title"/><br/><br/>
Enter Description <textarea area  name="desc" /></textarea><br/><br/>
Select Image&nbsp;&nbsp;&nbsp;<input type="file" name="file" id="fl"><br/><br/>
<input type="submit" value="Insert" name="insert">
</form>
</body>
</html>
<?php
error_reporting(1);
if(isset($_POST['insert']))
{
$title=$_POST['title'];
$desc=$_POST['desc'];
$image=$_FILES['file']['name'];
$type=$_FILES['file']['type'];
//	echo "eroro in copying";
$random=mt_rand();
if(!(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$random)))
	echo "not uploaded";
rename($image,$random);
$img="images/".$random;
$con=mysqli_connect("localhost","root","","online_examination");
$sql="insert into image(title,description,name)values('$title','$desc','$img')";
$run=mysqli_query($con,$sql);
if(!$run){
echo mysqli_error($con);
}
else
{
echo "<script>alert('Blog Successfully Inserted in the database');</script>";
echo "<script>window.open('slider.php','_self')</script>";
}
}

?>