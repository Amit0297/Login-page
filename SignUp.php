<?php
if(isset($_POST['uname'],$_POST['fname'],$_POST['pwd1'],$_POST['pwd2']))
{
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
    if(empty($fname)|| empty($uname)|| empty($pwd1)|| empty($pwd2))
    {
        die("Don't leave any field blank");
    }
    else
    {
        if(strlen($pwd1)>4)
        {
            if($pwd1===$pwd2)
            {
                $uname=strtolower($uname);
                $pwd1=md5($pwd1);
                
                require "Sdatabase.php";
                echo"You did it!!";
            }
            else{
                die("password do not match");
            }
        }
        else
        {die("Lenghth of password must be atleast 5 characters");
             }
    }
    



}