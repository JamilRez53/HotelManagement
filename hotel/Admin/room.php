<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/1.jpg" type="img/icon" rel="icon">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/8.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">ROOMS PLEASE!</font></h1>
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
	<center>
	<div>
		<b>
		<table style="color:aqua">
		<br><br><br><br><br><br><br><br><br><br><br><br>
			<tr>
				<th width="20%" height="50px">RoomNo</th>
				<th width="20%" height="50px">RoomType</th>
				<th width="20%" height="50px">status</th>
				<th width="20%" height="50px">price</th>

			</tr>
			<?php
	$sql="select * from `rooms`";
	$result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_array($result))
    {
        $RoomNo = $row['RoomNo'];
		$RoomType = $row['RoomType'];
		$status= $row['status'];
		$price= $row['price'];
		?>
		<font color="aqua">
		<tr>
		<td width="20%" height="50px"><center><?php echo $RoomNo ?><center></td>
		<td width="20%" height="50px"><center><?php echo $RoomType ?><center></td>
		<td width="20%" height="50px"><center><?php echo $status ?><center></td>
		<td width="20%" height="50px"><center><?php echo $price ?><center></td>
	</tr>
	</font>
	<?php
	}
    ?>
		</table>
</b>

	
	</div>
	</center>
	</div>
  </div>
</body>
</html>