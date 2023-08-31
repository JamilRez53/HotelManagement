<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Update</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/1.jpg" type="img/icon" rel="icon">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/13.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">ROOM UPDATE</font></h1>
			</div>
			<div id="header">
				<ul>
				<li><a href ="index.html"><tr>
							<td><input style = "width: 80px; height: 30px; border-style: solid; border-color: inherit; border-radius: 50px;" type="button" name="Home" value="Home"></td>
						</tr></a></li>
				<li><a href ="bms.html">
				<tr>
							<td><input style = "width: 100px; height: 30px; border-style: solid; border-color: inherit; border-radius: 50px;" type="button" name="BMS" value="BMS"></td></tr></a></li>
				<li><a href ="login.php">
				<tr>
							<td><input style = "width: 100px; height: 30px; border-style: solid; border-color: inherit; border-radius: 50px; " type="button" name="Login" value="Login"></td></tr></a></li>
				<li><a href ="#">
					<td><input style = "width: 100px; height: 30px; border-style: solid; border-color: inherit; border-radius: 50px; " type="button" name="Our Hotel" value="Our Hotel"></td></tr></a></li>
				</ul>
				</div>
		</div>
		<div id="banner">
	<div id="form">
        <center>
    <form method="post" action="update.php">
		<b>
        <table style="color:orange">
        <br><br><br><br><br><br>
			<tr>
                <td>RoomNo</td>
            <td><input style="margin-left: 100px "type="text" name="RoomNo" placeholder="RoomNo" title="RoomNo">
                        </td> 
</tr>
<tr>
                        <td>RoomType</td>
            <td><input style="margin-left: 100px "type="text" name="RoomType" placeholder="RoomType" title="RoomType">
                        </td>
</tr>
<tr>
                        <td>price</td>
            <td><input style="margin-left: 100px "type="text" name="price" placeholder="price" title="price">
                        </td>  

            </tr>
            <tr>
            <td><input style = "width: 80px; height: 30px;" type="submit" name="submit" value="submit"></td>
                        
            </tr>
	
		</table>
</b>

	<form>
        <?php
        if(isset($_POST['submit']))
        {
            $RoomNo=$_POST['RoomNo'];
            $RoomType=$_POST['RoomType'];
            $price=$_POST['price'];
            if(!empty($RoomNo)||!empty($RoomType)||!empty($price))
            {
            $sql="INSERT INTO `rooms`(`RoomNo`,`RoomType`,`price`) VALUES('$RoomNo','$RoomType','$price')";
            if(mysqli_query($link,$sql))
            {
                echo"New record inserted Successfully";
                header('Location:http://localhost/hotel/admin/room.php');
            }
            else
            {
                echo"No data inserted";
            }

        }
        else
        {
            echo "All fields required";
        }
    }
        ?>
        </center>
	</div>
	</div>
  </div>
</body>
</html>