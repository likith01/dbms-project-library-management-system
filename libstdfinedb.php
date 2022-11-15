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

 session_start();
include('connect.php');

$stdid = $_POST['studentId'];

$sql = "SELECT returndate FROM returnbk WHERE usn = '$stdid'";
$sql2 = "SELECT due_date FROM lend l WHERE usn = '$stdid'";


$result1 = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

while($row = mysqli_fetch_assoc($result1)){
  $c = strtotime($row['returndate']);
  $c/(365*60*60*24);
}
echo"<br>";
while($rowl = mysqli_fetch_assoc($result2)) {
  $d = strtotime($rowl['due_date']);
  $d/(365*60*60*24);
}
$diff = $c-$d;
$difff =$diff/(60*60*24);

if($difff != 0){
echo "<br> The number of delayed days are :".$difff;
echo "<br> <b>The total fine is RS: </b>".$difff*5;
}else{
  echo "no fine";
}



?>

<center>

<form action="libstdfine.php">
<button type="submit" id="sb" class="btn-btn-default" value="login">OK</button>
</center>
</div>

</body>
</html>
