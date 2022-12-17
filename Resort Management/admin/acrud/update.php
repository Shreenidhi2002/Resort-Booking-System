<?php

include 'connect.php';
$aid=$_GET['updateid'];
$sql="select * from `activity` where aid=$aid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$aid=$row['aid'];
$aname=$row['aname'];

$description=$row['description'];
$status=$row['status'];
$path=$row['imagepath'];



if(isset($_POST['submit'])){
    
     $aid=$_POST['aid'];
    $aname=$_POST['aname'];
    
    $description=$_POST['description'];
    $status=$_POST['status'];
    $path=$_POST['imagepath'];
    

  $sql="update  `activity` set aid=$aid ,aname='$aname',description='$description',status=$status,imagepath='$path' where aid=$aid";
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

    <title>Update Activity</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Activity id</label>
    <input type="number" class="form-control"  placeholder="Enter activity id" name="aid" autocomplete="off" value="<?php echo $aid ;?>">
   
  </div>
  <div class="form-group">
    <label >Activity Name</label>
    <input type="text" class="form-control"  placeholder="Enteractivity name" name="aname"  autocomplete="off" value="<?php echo $aname ;?>">
   
    </div> 
   
 
  <div class="form-group">
    <label >Room Description</label>
    <input type="textarea" class="form-control"  placeholder="Room Description" name="description" autocomplete="off" value="<?php echo $description ;?>">
   
    </div>
  <div class="form-group">
    <label >Activity Status</label>
    <input type="number" class="form-control"  placeholder="Enter activity status" name="status" autocomplete="off" value="<?php echo $status ;?>">
   
  </div>
   
 
  <div class="form-group">
    <label >Image Path</label>
    <input type="text" class="form-control"  placeholder="Enter image path" name="imagepath" autocomplete="off" value="<?php echo $path ;?>">
    </div> 
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>

   
  </body>
</html>