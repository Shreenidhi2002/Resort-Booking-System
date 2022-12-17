<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $rno=$_POST['rno'];
    $rname=$_POST['rname'];
    $type=$_POST['rtype'];
    $des=$_POST['rdesc'];
    $price=$_POST['price'];
    $path=$_POST['ip'];
    $status=$_POST['stat'];

  $sql="insert into `room` (rno,rname,type,description,price,imagepath,status)values ('$rno','$rname','$type','$des','$price','$path','$status')";
  $result=mysqli_query($conn,$sql);
  if($result){
    //echo "Data inserted successfully";
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

    <title>Add room</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Room Number</label>
    <input type="number" class="form-control"  placeholder="Enter room number" name="rno" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Room Name</label>
    <input type="text" class="form-control"  placeholder="Enter room name" name="rname" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Room Type</label>
    <input type="text" class="form-control"  placeholder="Enter room type" name="rtype" autocomplete="off">
   
 
  <div class="form-group">
    <label >Room Description</label>
    <input type="textarea" class="form-control"  placeholder="Room Description" name="rdesc" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Room Price</label>
    <input type="number" class="form-control"  placeholder="Enter room price" name="price" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Image Path</label>
    <input type="text" class="form-control"  placeholder="Enter image path" name="ip" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Room Status</label>
    <input type="number" class="form-control"  placeholder="Enter room status" name="stat" autocomplete="off">
   
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

   
  </body>
</html>