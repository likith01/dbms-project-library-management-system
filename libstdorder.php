<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>library management</title>
    <!--DNS connection-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--css link-->
    <!-- <link rel="stylesheet" href="libstdordercss.css"> -->
    <!--fonts dns-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">



    <script>
        function validation()  
            {  
                 var x = document.getElementById("bid").value;
                 var y = document.getElementById("sid").value;
                 //var z = document.getElementById("nc").value;
                if (x <= 0  || y <= 0 ) {
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
             background-image: url('https://cdn.pixabay.com/photo/2018/11/12/02/40/silence-3810106_960_720.jpg');
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

      .orderbks input:hover, textarea:hover {
      border: 1px solid ;
      box-shadow: 0 0 3px 0 ;
      }

      .orderbks {
      position: relative;
      margin: 10px 100px;
      }

      .orderbks h1{
        color: black; font-size: 50px;
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
    color: black;
}
#wc{
    font-family: 'Kanit', sans-serif;
    letter-spacing: 5px;
    color: black;
}
.orderbks p{
    color: white;
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
            <li><a href="libstdsearch.php">Book Search </a></li>
            <li><a href="libstdfine.php">Fine details </a></li>
            <li><a href="libstdorder.php">Place Order</a></li>
            <li><a href="libstdcancel.php">cancel Order</a></li>
            <li><a href="libstdnewspaper.php">news paper</a></li>
            <li style="float:right"><a class="active" href="liblogin.php">Log out</a></li>
        </ul>  
    </nav>    
</div>
<center>
<div class="container">
<div class="orderbks">
    <form action="libstdorderdb.php" name="f1" method="POST" onsubmit="return validation()">
        <h1 style="color: white;"><b>Place Order</b></h1>
        <p>Book Id</p>
        <input type="number" id="bid" name="bookId" placeholder="Book Id" required>
        <p>Student Id</p>
        <input type="number" id="sid" name="studentId" placeholder="Student Id" required>
        <p>Order date</p>
        <input type="date" name="date" placeholder="order date" required>
        <p>Due date</p>
        <input type="date" name="duedate" placeholder="due date(2days)" required>
        <button type="submit" class="btn-btn-default">Done</button>
    </form>
</div>
</div>
</center>

</body>
</html>