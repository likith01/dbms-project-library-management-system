<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>library management</title>
    <!--DNS connection-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--css link-->
    <!-- <link rel="stylesheet" href="libuserlendcss.css"> -->
    <!--fonts dns-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <script>
        function validation()  
            {  
                 var x = document.getElementById("bid").value;
                 var y = document.getElementById("sid").value;
                 //var z = document.getElementById("nc").value;
                if (x <= 0  || y <= 0) {
                    alert("Input not ok");
                    return false;
                 }else {
                    alert("Input  ok");
                    return true;
                 }
             } 
    </script>


       <style>


        body{
             background-image: url('https://ak5.picdn.net/shutterstock/videos/20376337/thumb/1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            opacity: 85%;
   }

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: #ffffff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    padding:20px;
    font-size: 20px;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  .active {
    background-color: #fc1414;
  }

       body, div, form, input, textarea{ 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 18px;
      letter-spacing: 0.89px;
      line-height: 22px;
      }
        
       form  {
      width: 50%;
      padding: 40px;
      }

      input, textarea {
      margin-bottom: 12px;
      background:rgba(255, 255,255,1);
      border:0px 0px, 10px, 0px;
      border-radius: 5px
      }

      input {
      width: calc(100% - 8px);
      padding: 8px;
      }
       
      textarea {
      width: calc(100% - 11px);
      padding: 5px;
      }

      .lendbks input:hover, textarea:hover {
      border: 1px solid ;
      box-shadow: 0 0 3px 0 ;
      }

      .lendbks {
      position: relative;
      margin: 10px 100px;
      }

      .lendbks h1{
        color: black; font-size: 50px;
      }
      .lendbks p{
            color: white;
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
    background: rgba(255,255,255,0.20);
    border:3px solid black ;
    box-shadow: 0 0 10px 0 black;
    color: white;
}
#cw{
    padding-left: 80px;
    font-family: 'Kanit', sans-serif;
    letter-spacing: 4px;
}
#wc{
    font-family: 'Kanit', sans-serif;
    letter-spacing: 5px;
}

        

    </style>


</head>
<body>
        <div class="container">
            <div class="jumbotron">
            <h1 id="wc">Explore</h1>
            <h3 id="cw"><b>your online library.</b></h3>
            </div>
        </div>

            <!--nav bar-->
  
<div class="container">  
    <nav>
        <ul>
            <li><a href="libuseradd.php">Add books </a></li>
            <li><a href="libusersearch.php">Book Search </a></li>
            <li><a href="libuserupdate.php">Book Update </a></li>
            <li><a href="libuserorders.php">View Order</a></li>
            <li><a href="libuserlend.php">lend book</a></li>
            <li><a href="libuserfine.php">Fine</a></li>
            <li><a href="libuserreceive.php">Receive</a></li>
            <li style="float:right"><a class="active" href="liblogin.php">Log out</a></li>
        </ul>  
    </nav>    
</div>
<center>
<div class="container">
<div class="lendbks">
    <form name="f1" action="libuserlenddb.php" method="POST" onsubmit="return validation()">
        <h1><b>Lend book</b></h1><br>
        <p>Book Id</p>
        <input type="text" id="bid" name="bookId" placeholder="Book Id" required>
        <p>Student Id</p>
        <input type="text" id="sid" name="studentId" placeholder="Student Id" required>
        <p>lending date</p> 
        <input type="date" name="date" placeholder="lending date" required>
        <p>due date</p>
        <input type="date" name="duedate" placeholder="due date" required>
        <button type="submit" class="btn-btn-default">lend</button>
    </form>
</div>
</div>

</center>
</body>
</html>