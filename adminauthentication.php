<?php      
    include('connect.php'); 

    $userid = $_POST['UserId']; 
    $username = $_POST['Username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection
        $userid = stripcslashes($userid);  
        $username = stripcslashes($username);  
        $password = stripcslashes($password); 
        $userid = mysqli_real_escape_string($conn, $userid); 
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM admin WHERE admin_id = '$userid' and admin_name = '$username' and admin_password ='$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
              header("Location:libuseradd.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
           
?>  