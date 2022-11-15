<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>verification</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<style>
.btn-btn-default{
      padding: 6px;
      width: 200px;
      height: 70px;
      background-color: rgba(255,255,255,255,0.75);
      color: black;
      border: none;
      border-radius: 3px;
      box-shadow: 0 0 7px rgba(0,0,0,1);
      font-size: 50px;
  }

  .btn-btn-default:hover{
    border: 1px solid black;
    box-shadow: 0 0 3px 0 black;
  }
  body{
             background-image: url('https://cdn.pixabay.com/photo/2016/09/05/15/03/candle-1646765_960_720.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            opacity: 65%;
   }
 .container{
    height: 200px;
   background: rgba(255,255,255,0.20);
    border:3px solid black ;
    box-shadow: 0 0 10px 0 black;
    color: white;
    text-align: center;
    font-size: 50px;
    font-family: 'Kanit', sans-serif;
    letter-spacing: 3px;
 }  
  

</style>


</head>
<body>
    
<div class="container">    
<?php
include 'connect.php';
    $book = $_POST['bookId'];
    $copies = $_POST['copies'];

    $book = stripcslashes($book);  
    $copies = stripcslashes($copies);

    $sql0 = "SELECT bid from book WHERE bid = '$book'";
    $result0 = mysqli_query($conn, $sql0);
    $row = mysqli_fetch_array($result0, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result0);
    if($count > 0){


     $sql = "CALL updateuser('$copies', '$book');";//procedure //"UPDATE book SET no_of_copies = '$copies' WHERE bid='$book'";  
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "<b>Failed to update!</b>";
    }else{
        echo "<b>Book updated successfully<b/>";
    }
}else{
    echo "<b>Book not found</b>";
}

?>                                                                  


<center>

<form action="libuserupdate.php">
<button type="submit" id="sb" class="btn-btn-default" value="login">OK</button>
</center>
</div>

</body>
</html>
