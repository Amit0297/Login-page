
<?php
if(isset($_POST['name'],$_POST['pwd']))
{
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    
    if(empty($name)||empty($pwd))
    {
       echo"<h3>Enter proper values</h3>";
        die();
    }
    
    if(length($pwd))
    {
        $name=strtolower($name);
        $pwd=md5($pwd);
        require"database.php";
        
        echo" <h3>You have signed up successfuly</h3>";
        timen();
		//header("Location:index.html");
    }

}

function length($len)
{
 if(strlen($len)>4)
 {
     
     return 1;
     
 }
    else
        die("Minimum length of password should be 5");
    
}
function timen()
{
    $current=date("h:i:s @ d/m/y",time());
    echo $current;
}
    
?>

