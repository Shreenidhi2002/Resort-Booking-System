<?php

include 'connect.php';
$bid=$_GET['updateid'];
if(isset($_POST['submit'])){
    $bstatus=$_POST['bookstatus'];
    if($bstatus=='Confirmed'){
        $sql1="select rno from `reservation` where bookid=$bid";
        $result=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_assoc($result)){
            $n=$row['rno'];}
        $sql2="update `room` set  status=0 where rno=$n ";
        $result=mysqli_query($conn,$sql2);
        // $row=mysqli_fetch_assoc($result);
    }
    if($bstatus=='Cancelled'){
        $sql1="select rno from `reservation` where bookid=$bid";
        $result=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_assoc($result)){
            $n=$row['rno'];}
        $sql2="update `room` set  status=1 where rno=$n ";
        $result=mysqli_query($conn,$sql2);

    }
    // $sql3=date('Y-m-d');
    
    // $sql1="select checkout,rno from `reservation` where bookid=$bid";
    // $result=mysqli_query($conn,$sql1);
    // while($row=mysqli_fetch_assoc($result)){
    //     $d=$row['checkout'];
    //     $n=$row['rno'];
    // }
    //     if ($sql1>$d){
    //         $sql2="update `room` set  status=1 where rno=$n ";
    //     $result=mysqli_query($conn,$sql2); 
    //     }
    
$sql="update `reservation` set  bookingstatus='$bstatus' where bookid=$bid ";
$result=mysqli_query($conn,$sql);
  if($result){
    // echo "Data updated successfully";
  
     header('location:display.php');
  }
  else{
    die(mysqli_query($conn));
  }
}
  ?>
  
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Update status</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Booking Status</label>
    <input type="text" class="form-control"  placeholder="Enter booking status:Pending/Confirmed/Cancelled" name="bookstatus" autocomplete="off">
   
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  <button class="btn btn-primary my-5" style="margin-left:70px" ><a href="display.php" class="text-light">Back</a>
        
        </button>
</form>
</div>

   
  </body>
</html>
