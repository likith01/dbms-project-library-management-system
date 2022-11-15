<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

        <style>
            
            body{
                     margin: 0px;
                    padding: 0px;
            }

        .img{
  
                background-image: url("https://cdn.pixabay.com/photo/2017/08/06/22/01/books-2596809_960_720.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                height:100vh;
           }   
        .jumbotron{
                border: 1px solid rgba(0,0,0,0.60);;
                color:rgba(255, 255, 255, 0.5);
                background-color:rgba(0,0,0,0.60);
                padding:  10px 0px 10px  0px;
        }

        .jumbotron #h1{
                font-size: 60px;
                letter-spacing: 2px;
                font-family: 'Patua One', cursive;
                letter-spacing: 4px;
                text-align: center;
        }

   .logsec{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
  }

  .logsec{
    margin-top: 40px;
    height: 400px;
    width: 300px;
    border-radius: 10px;
    display:flex;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 12px rgba(0,0,0,0.75);
    color:black;
    font-weight: 60px;
  }
   
  .main-heading{
   padding-top: 10px;
   padding-bottom: 10px;
  }

  .heading{
        letter-spacing: 1.5px;
        color: black;
      padding-top: 40px;
      
  }

  button{
      width: 100px;
      height: 40px;
      background-color: rgba(0,0,0,0.75);
      color: white;
      border: solid rgba(0,0,0,0.75) ;
      border-radius: 4px;
      box-shadow: 0 0 7px rgba(0,0,0,1);
  }

  button:hover{
    border: 1px solid black;
    box-shadow: 0 0 4px 0 white;
  }

</style>
    </head>
<body>
    <div class="img">
        <div class="container">
            <div class="jumbotron">
            <h1 id="h1" ><b>Embrace the Pioneer Atheneum</b></h1>
            </div>
        </div>
   <center>
    <div class="container">
        <div class="logsec">
            <div class="main-heading"><h1><strong>LOGIN PAGE</strong> </h1></div>
                <div class="admin">
                         <div class="heading"><h2>ADMIN</h2></div>
                        <form action="libuserlogin.php" method="#">
                            <button type="submit">Login</button>
                        </form>
                 </div>
                <div class="student">
                        <div class="heading"><h2>STUDENT</h2></div>
                        <form action="libstdlogin.php" method="#">
                        <button type="submit">Login</button>
                        </form>
                </div>
                <div class="student">
                        <div class="heading"><h2>college</h2></div>
                        <form action="libstdsearch.php" method="#">
                        <button type="submit">login</button>
                        </form>
                </div>
        </div>
    </div>
   
    </center>
     </div>
    </body>
</html>