<!DOCTYPE html>
<html>
<head>
<title>Student login</title>


<!-- <link rel="stylesheet" href="libuserlogincss.css"> -->

<!--fonts cdn-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@300&display=swap" rel="stylesheet">

</head>

<style>
    .img{
         background-image: url("https://cdn.pixabay.com/photo/2014/09/05/18/33/book-436507_960_720.jpg");
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

  h1{
    margin: 0px;
    padding :0px ;
  }

  p{
    font-size: 20px;
    padding-top: 10px;
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
  

  .jumbotron{
        text-align: center;
        background: transparent;
        font-family: 'Source Serif 4', sans-serif;
        font-size: 100px;
  }

</style>


<body>
<div class="img">   
<div class="container">
    
    <div class="jumbotron"> <b>Student Login</b></div>                 
</div> 
<div class="login_form">
    <center>
    <h1><b>login form</b></h1>
    <form name="f1" action = "studentauthentication.php" onsubmit = "return validation()" method = "POST">
        <p><b>Studet Id</b></p>
        <input type="text" name="studentId" placeholder="student Id" required>
        <p><b>Studet Name</b></p>
        <input type="text" name="studentname" placeholder="student name" required>
        <p><b>password</b></p>
        <input type="password" name="password" id="myInput" placeholder="password" required><br>
        <button type="submit" class="btn-btn-default" value="login">Login</button><br>
    </form>
    </center>
</div>
</div>


<script>  
            function validation()  
            {  
                var id=document.f1.studentId.value;  
                var sn=document.f1.studentname.value;
                var sps=document.f1.password.value;  
                if(id.length=="" && sps.length=="" && sn.length =="") {  
                    alert("All fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("student id is empty");  
                        return false;  
                    }   
                    if (sn.length=="") {  
                    alert("student name field is empty");  
                    return false;  
                    } 
                    if (sps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    } 
                }                             
            }  
        </script>

</body>

</html>