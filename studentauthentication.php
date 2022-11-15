<?php      
    include('connect.php'); 

    $studentid = $_POST['studentId']; 
    $studentname = $_POST['studentname'];  
    $studentpassword = $_POST['password'];  
      
        //to prevent from mysqli injection
        $studentid = stripcslashes($studentid);  
        $studentname = stripcslashes($studentname);  
        $studentpassword = stripcslashes( $studentpassword); 
        $studentid = mysqli_real_escape_string($conn, $studentid); 
        $studentname = mysqli_real_escape_string($conn, $studentname);  
        $studentpassword = mysqli_real_escape_string($conn, $studentpassword);  
      
        $sql = "SELECT * FROM student WHERE usn = '$studentid' and sname = '$studentname' and spassword ='$studentpassword'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
              header("Location:libstdsearch.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
           
?>  