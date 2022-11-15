<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>verification</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

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

 session_start();
include('connect.php');

$bookid = $_POST['bookId'];
$booktitle = $_POST['title'];
$bookversion = $_POST['version'];
$bookauthor = $_POST['Aname'];
$bookcopies = $_POST['copies'];

$sqlf = "INSERT INTO book(bid, btitle, bversion,no_of_copies) VALUES('$bookid', '$booktitle','$bookversion', '$bookcopies')";

$sqls = "INSERT INTO author(author_name, bid) VALUES('$bookauthor', '$bookid')";

$res1 = mysqli_query($conn, $sqlf);
$res2 = mysqli_query($conn, $sqls);

if(!($res1 and $res2) ){
        echo "failed to Add the book!";
    }else{
        echo "Book Added successfully";
    }

?>
</div>
<center>

<form action="libuseradd.php">
<button type="submit" id="sb" class="btn-btn-default" value="login">OK</button>
</center>


</body>
</html>




	