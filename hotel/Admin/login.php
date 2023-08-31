<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel management</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="img/icon" href="img/1.jpg">
</head>
<body>
<div id="full">
        <div id="bg" style="background-image: url('img/12.jpg'); background-size: cover; background-repeat: none;  height: 720px;">
        <div id="header">
            <div id="logo">
                <br><br><br><br>
                <h1><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book Room</font></h1>
            </div>
            <div id="banner">
                <div id="form">
                    <b>
                    <form method="post" action="login.php">
                <table style="color:white; font-style: bold">
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username</td>
                        <td><input style="margin-left: 100px "type="text" name="username" placeholder="Enter Name" title="Enter Name">
                        </td> 
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</td>
                        <td><input style="margin-left: 100px "type="text" name="Password" placeholder="Enter ID" title="Enter Password">
                        </td> 
                    </tr>
                    <tr>
                        
              <td><input style = "width: 80px; height: 30px; border-style: solid; border-color: inherit; border-radius: 40px; margin-left:750px" type="submit" name="submit" value="submit"></td>
                    </tr>
                    
                </table>
                </form>
                <?php
                 if(isset($_POST['submit']))
                 {
                     $username=$_POST['username'];
                     $Password=$_POST['Password'];
                     if(!empty($username)&&!empty($Password))
                     {$sql="select * FROM Admin WHERE username='$username' and Password='$Password'";
                     $result=mysqli_query($link,$sql);
                     $row=mysqli_fetch_array($result);
                     if($row['username']==$username && $row['Password']==$Password)
                     {
                         echo "Successful login";
                         header('Location:http://localhost/hotel/admin/index.html');
                     }
                     else
                     {
                         echo "Invalid user ID or Password";
                     }
                    }
                    else
                    echo"All fields required";
                 }
                ?>
                </b>
            </div>
        </div>
    </div>


    </body>
    </html>