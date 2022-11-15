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

//if($res1 and $res2 !== 1){
  //      echo "failed to update!";
   // }else{
        echo "Book update successful";
   // }

?>