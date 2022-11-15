<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>book list</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
.table table-bordered table-striped{
    border: 3px solid black;
    
}

/*body{
    background: radial-gradient(rgb(31, 158, 180),rgb(253, 253, 253));
}
btn-btn-default{
    width: 80px;
}*/
/*.btn-btn-default:hover{
    background:black;
    color: black;
    
}*/
.pull-left{
    font-family: cursive;
}

.btn-btn-default{
      padding: 6px;
      width: 200px;
      height: 70px;
      background-color: rgba(255,255,255,255,0.75);
      color: black;
      border: none;
      border-radius: 3px;
      box-shadow: 0 0 10px rgba(0,0,0,1);
      font-size: 50px;
  }

  .btn-btn-default:hover{
    border: 2px solid black;
    box-shadow: 0 0 3px 0 black;
  }
</style>
<script type="text/javascript">
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
</head>
<body style="background-color: #eee;">
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left"><b>SEARCHED BOOK</b></h2>
                    </div>
<?php
include 'connect.php';
    $booksearch = $_POST['bookId'];

    $sql = "SELECT b.bid, b.btitle, b.bversion, b.no_of_copies, 
    a.author_name FROM book b, author a WHERE a.bid = b.bid and b.bid ='$booksearch';";

    $result = mysqli_query($conn, $sql);
?>
<?php
    if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
    <td><b>book_id</b></td>
    <td><b>btitle</b></td> 
    <td><b>author</b></td>          <!--bid btitle  bversion    no_of_copies-->
    <td><b>bversion</b></td>
    <td><b>no_of_copies</b></td>
</tr>
<?php
    $i=0;
        while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["bid"]; ?></td>
<td><?php echo $row["btitle"]; ?></td>
<td><?php echo $row["author_name"]; ?></td>
<td><?php echo $row["bversion"]; ?></td>
<td><?php echo $row["no_of_copies"]; ?></td>
</tr>
<?php
    $i++;
}
?>
    </table>
<?php
}
else{
echo "No result found";
}
?>

</div>
</div>        
</div>
</div>
<center>
<form action="libstdsearch.php">
<button type="submit" id="sb" class="btn-btn-default" value="submit">OK</button>
</center>
</form>
</body>
</html>