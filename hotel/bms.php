<?php
        $RoomNo = $_POST['RoomNo'];
        $RoomType = $_POST['RoomType'];
    if (!empty($RoomNo) || !empty($RoomType) ) {
        $host = 'localhost:3307';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbname = 'h';
        //create connection
        $conn = mysqli_connect($host, $dbUsername, $dbPassword);
        @mysqli_select_db($conn,$dbname);
        if (mysqli_connect_error($conn)) {
         die('Connect Error('. mysqli_connect_errno($conn).')'. mysqli_connect_error($conn));
        } else { 

            //echo "Connection to dbms succesful"; 
        
           $sql="INSERT INTO `rooms`(`RoomNo`,`RoomType`) VALUES('$RoomNo','$RoomType')";
           if($conn->query($sql)){
            echo "New record Inserted Successfully";
           }
        
         	
         
         else
         {
             echo "Error";
         }

          
        $conn->close();
        }
    } 
    else {
     echo "All field are required";
    }
     die();
     
    

    ?>