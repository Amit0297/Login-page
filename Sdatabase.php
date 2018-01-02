<?php
$con=mysqli_connect('localhost','root','','details');
if(!$con)
{
die("connection failed");
}
$sql="INSERT INTO `sign_up` VALUES('','$fname','$uname','$pwd1')";
if(mysqli_query($con,$sql))
{
echo "done";
}
else
{echo"check again ".mysqli_error($con);
die();
}
mysqli_close($con);
?>