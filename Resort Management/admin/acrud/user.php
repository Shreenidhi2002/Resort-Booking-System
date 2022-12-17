<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $aid=$_POST['aid'];
    $aname=$_POST['aname'];
    $description=$_POST['description'];
    // $des=$_POST['rdesc'];
    // $price=$_POST['price'];
    $status=$_POST['status'];
    $path=$_POST['imagepath'];
   

  $sql="insert into `activity` (aid,aname,description,status,imagepath)values ('$aid','$aname','$description','$status','$path')";
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

    <title>Add Activity</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Activity id</label>
    <input type="number" class="form-control"  placeholder="Enter activity id" name="aid" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Activity Name</label>
    <input type="text" class="form-control"  placeholder="Enter activity name" name="aname" autocomplete="off">
   
  <!-- </div>
  <div class="form-group">
    <label >Room Type</label>
    <input type="text" class="form-control"  placeholder="Enter room type" name="rtype" autocomplete="off"> -->
   
 
  <div class="form-group">
    <label > Description</label>
    <input type="textarea" class="form-control"  placeholder="Room Description" name="description" autocomplete="off">
   
  <!-- </div>
  <div class="form-group">
    <label >Room Price</label>
    <input type="number" class="form-control"  placeholder="Enter room price" name="price" autocomplete="off"> 
   
  </div>-->

  <div class="form-group">
    <label >Activity Status</label>
    <input type="number" class="form-control"  placeholder="Enter room status" name="status" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Image Path</label>
    <input type="text" class="form-control"  placeholder="Enter image path" name="imagepath" autocomplete="off">
   
  </div>
 
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

   
  </body>
</html>