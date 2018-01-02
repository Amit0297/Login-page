<?php

if((isset($_GET['pwd']))&&(!empty($_GET['pwd'])))
{
	$str=$_GET['pwd'];
	echo "You typed ".$str;
	$val= md5($str);
	echo"<br>".$val;
}
else
{
echo "please enter a valid password";
}	
	
?>
