<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ordered list</title>

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
/*.btn-btn-default{
    width: 80px;
}
.btn-btn-default:hover{
    background:#06c8d6;
    color: black;
    
}*/
/*.pull-left{
    font-family: cursive;
}*/


/*.btn-btn-default{
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
                        <h2 class="pull-left"><b>Results</b></h2>
                    </div>
<?php
include 'connect.php';
    $stdsearch = $_POST['studentId'];

    $sql = "SELECT o.oid, o.order_date, o.order_expire, o.usn, b.bid FROM orders o, book b WHERE o.bid = b.bid and o.usn = $stdsearch;";

    $result = mysqli_query($conn, $sql);
?>
<?php
    if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
    <td><b>order id</b></td>
    <td><b>order_date</b></td> 
    <td><b>order_expire</b></td>          <!--order_date   order_expire    usn bid-->
    <td><b>usn</b></td>              
    <td><b>bid</b></td>
</tr>
<?php
    $i=0;
        while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["oid"]; ?></td>    
<td><?php echo $row["order_date"]; ?></td>
<td><?php echo $row["order_expire"]; ?></td>
<td><?php echo $row["usn"]; ?></td>
<td><?php echo $row["bid"]; ?></td>
</tr>
<?php
    $i++;
}
?>
    </table>
<?php
}
else{
echo "No orders found";
}
?>

</div>
</div>        
</div>
</div>
<center>
<form action="libuserorders.php">
<button type="submit" id="sb" class="btn-btn-default" value="login">OK</button>
</center>
</form>
</body>
</html>