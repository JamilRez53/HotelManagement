<?php
        $username = $_POST['username'];
        $Password = $_POST['Password'];
        $Cin =$_POST['Cin'];
        $Cout = $_POST['Cout'];
    if (!empty($username) || !empty($Password)|| !empty($Cid) || !empty($Cout) ) {
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
        
           $sql="INSERT INTO `form`(`username`,`Password`,`Cin`,`Cout`) VALUES('$username','$Password','$Cin','$Cout')";
           if($conn->query($sql)){         
           echo"Successfully registered";
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