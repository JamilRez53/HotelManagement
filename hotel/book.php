<?php
include('connection.php');
function reg_in()
{ 
if(isset($_POST['Submit']))
{
	$username = $_POST['username'];
        $Password = $_POST['Password'];
        $Cin = $_POST['Cin'];
		$Cout = $_POST['Cout'];
	if(mysqli_query($link,"INSERT INTO `form` (`username`,`Password`,`Cin`,`Cout`) VALUES ('$username','$Password',$Cin','$Cout')"))
	{
		header('Location:D:\Xampp\htdocs\Hotel');
	}
	else
	echo mysqli_connect_error($link);
}
	
}
if(isset($_POST['Submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not book';
?>