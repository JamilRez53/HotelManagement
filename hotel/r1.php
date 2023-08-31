<!DOCTYPE html>
<html>
<head>
    <title>Room Booking</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="img/icon" href="img/1.jpg">
</head>
<body>
    <div id="full">
        <div id="bg" style="background-image: url('img/4.jpg'); height: 720px;">
        <div id="header">
            <div id="logo">
                <h1><font color="black">Room Booking</font></h1>
            </div>
            <div id="nav">
            <ul>
            <li><a href ="index.html">Home</a></li>
            <li><a href ="bms.html">Book My Stay</a></li>
            <li><a href ="#">Contact Us</a></li>
            <li><a href ="#">Help</a></li> 
            </ul>
            </div>
            <div id="banner">
                <form action="book.php" method="post">
                <table style="color: white">
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="Status" placeholder="Status" title="Status">
                        </td> 
                    </tr>
                    <tr>
                        
                        <td>Name</td>
                        <td><input type="text" name="username" placholder="Enter Name" title="Name" required></td>
                        <td>Id-No.</td>
                        <td><input type="text" name="Id-No" placholder="Enter ID" title="ID" required></td>

                    </tr>
                    <tr>
                        <td>Cin</td>
                        <td><input type="text" name="Cin" placholder="Enter Date" title="Check In Date" required></td>

                    </tr>
                    <tr>
                        <td>Cout</td>
                        <td><input type="text" name="Cout" placholder="Enter Date" title="Check Out Date" required></td>

                    </tr>
                    <tr>
                        <td><input style = "width: 80px; height: 30px;" type="Submit" name="Submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
        </div>
        </div>


    </body>
    </html>