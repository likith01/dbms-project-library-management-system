<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@300&display=swap" rel="stylesheet">

<style>

    .img{
         background-image: url("https://cdn.pixabay.com/photo/2014/12/27/15/40/office-581131_960_720.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height:100vh;
    }

        .login_form{
        position:absolute;
        top:60%;
        left:50%;
        transform:translate(-50%,-50%);
  }

   .login_form{
    width: 500px; height: auto;
    border-radius: 10px;
    display:flex;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.45);
    box-shadow: 0 0 12px rgba(0,0,0,0.75);
    color:black;
    padding-top:60px;
    font-weight: 60px;
  }

  input{
    width: 200px;
    height: 45px;
    border:  1px solid black;
    display: block;
  }
 
  input:hover{
    border: 1px solid black;
    box-shadow: 0 0 3px 0 black; 
  }

  .btn-btn-default{
      padding: 6px;
      width: 130px;
      height: 40px;
      background-color: rgba(0,0,0,0.75);
      color: white;
      border: none;
      border-radius: 3px;
      box-shadow: 0 0 7px rgba(0,0,0,1);
  }

  .btn-btn-default:hover{
    border: 1px solid black;
    box-shadow: 0 0 3px 0 white;
  }  

   h1{
    margin: 0px;
    padding :0px ;
  }

  p{
    font-size: 20px;
    padding-top: 10px;
  }

  .jumbotron{
    color: white;
        text-align: center;
        background: transparent;
        font-family: 'Source Serif 4', sans-serif;
        font-size: 100px;
  }


</style>
</head>

<body>
<div class="img">
    
    <div class="jumbotron"><b>Admin Login</b></div>                 
</div> 

<div class="container">
    <center>
  <div class="login_form">
    <h1><b>Login form</b></h1>
    <form name="f1" action = "adminauthentication.php" onsubmit = "return validation()" method = "POST">
        <p><b>UserId</b></p>
        <input type="text" name="UserId" placeholder="User Id" required>
        <p><b>User name</b></p>
        <input type="text" name="Username" placeholder="User name" required>
        <p><b>password</b></p>
        <input type="password" name="password" id="myInput" placeholder="password" required><br>
        <!--<label for="usercheck">show password :</label>
        <input type="checkbox" onclick="myFunction()">-->
        <button type="submit" class="btn-btn-default" value="Login">Login</button>
        <br>
    </form>
    </center>
</div>
</div>
<!--<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>-->

 <script>  
            function validation()  
            {  
                var id=document.f1.UserId.value;  
                var un=document.f1.Username.value;
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="" && un.length =="") {  
                    alert("All fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (un.length=="") {  
                    alert("username field is empty");  
                    return false;  
                    } 
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    } 
                }                             
            }  
        </script>  


</body>

</html>