<?php
$conn=mysqli_connect('localhost','root','','details');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql_check="SELECT `Full_name` FROM `sign_up` WHERE `User_Name`='".mysqli_real_escape_String($conn,$name)."'AND `password`='".mysqli_real_escape_String($conn,$pwd)."'" ;
    
$result=mysqli_query($conn,$sql_check);

if (mysqli_num_rows($result)) {
    while($row=mysqli_fetch_assoc($result))
	{
	echo"Name is: ".$row['Full_name'];
		
	}
	
	
} else {mysqli_free_result($result);
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_free_result($result);
mysqli_close($conn);
?>