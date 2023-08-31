<?php
        $username = $_POST['username'];
        $Password = $_POST['Password'];
    if (!empty($username) || !empty($password) ) {
        $host = 'localhost:3307';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbname = 'h';
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error($conn)) {
         die('Connect Error('. mysqli_connect_errno($conn).')'. mysqli_connect_error($conn));
        } else { 

            //echo "Connection to dbms succesful"; 
        

        $sql="select * FROM form WHERE username='$username' AND Password='$Password'";
         $result=mysqli_query($conn,$sql);
    
         $row = mysqli_fetch_array($result);
         
         if ($row['username']==$username && $row['Password']==$Password) {
        
          echo "Welcome";
          header('Location:http://localhost/hotel/bms.html');

         } 
         else {echo "Invalid user id or password";
            header('Location:http://localhost/hotel/r1.html');
         }
        $conn->close();
        }
    } 
    else {
     echo "All field are required";
     die();
     
    }

    ?>