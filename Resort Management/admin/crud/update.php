<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `room` where rno=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$rno=$row['rno'];
$rname=$row['rname'];
$type=$row['type'];
$des=$row['description'];
$price=$row['price'];
$path=$row['imagepath'];
$status=$row['status'];


if(isset($_POST['submit'])){
    
     $rno=$_POST['rno'];
    $rname=$_POST['rname'];
    $type=$_POST['rtype'];
    $des=$_POST['rdesc'];
    $price=$_POST['price'];
    $path=$_POST['ip'];
    $status=$_POST['stat'];

  $sql="update  `room` set rno=$id ,rname='$rname',type='$type',description='$des',price=$price,imagepath='$path',status=$status where rno=$id";
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

    <title>Add room</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Room Number</label>
    <input type="number" class="form-control"  placeholder="Enter room number" name="rno" autocomplete="off" value="<?php echo $rno ;?>">
   
  </div>
  <div class="form-group">
    <label >Room Name</label>
    <input type="text" class="form-control"  placeholder="Enter room name" name="rname"  autocomplete="off" value="<?php echo $rname ;?>">
   
  </div>
  <div class="form-group">
    <label >Room Type</label>
    <input type="text" class="form-control"  placeholder="Enter room type" name="rtype"autocomplete="off"  value="<?php echo $type ;?>">
   
 
  <div class="form-group">
    <label >Room Description</label>
    <input type="textarea" class="form-control"  placeholder="Room Description" name="rdesc" autocomplete="off" value="<?php echo $des ;?>">
   
  </div>
  <div class="form-group">
    <label >Room Price</label>
    <input type="number" class="form-control"  placeholder="Enter room price" name="price"autocomplete="off" value="<?php echo $price ;?>">
   
  </div>
  <div class="form-group">
    <label >Image Path</label>
    <input type="text" class="form-control"  placeholder="Enter image path" name="ip" autocomplete="off" value="<?php echo $path ;?>">
   
  </div>
  <div class="form-group">
    <label >Room Status</label>
    <input type="number" class="form-control"  placeholder="Enter room status" name="stat" autocomplete="off" value="<?php echo $status ;?>">
   
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

   
  </body>
</html>