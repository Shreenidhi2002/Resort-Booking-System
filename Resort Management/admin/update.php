
<?php
include 'connection.php';
if(isset($_GET['roomid'])){
    $rid=$_GET['roomid'];}
   /* $sql="delete from `room` where rno=$rid";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:display.php');
    }*/else{
        die(mysqli_error($conn));
    }


?>
<?php


if(isset($_POST['submit'])){
    // $rno=$_POST['rid'];
    $email=$_POST['email'];
    
    // $sql1="select email from customer where email=$email";
    
    // $query=mysqli_query($conn,$sql1);
    // while($)

    // $emailcount=mysqli_num_rows($query);
    // if($emailcount>0){
    // //     
    //             alert("Email not registered");
    //         </script> -->
            
    //         <?php 
    //          die(mysqli_error($conn));
    // }
    
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    // $price=$_POST['price'];
    // $path=$_POST['ip'];
    // $status=$_POST['stat'];

  $sql="insert into `reservation` (rno,email,checkin,checkout) values ('$rid','$email','$cin','$cout')";
  $result=mysqli_query($conn,$sql);
  if($result){
    // echo "Booking request sent succesfully!!!!Respose will be sent to you soon through email.....Thank You";
    $sql="update `room` set status=0 where rno=$rid";
    $result=mysqli_query($conn,$sql);

     header('location:room1.php');
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

    <title>Book</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <!-- <div class="form-group">
    <label >Room Number</label>
    <input type="number" class="form-control"  placeholder="Room number" name="$rid" autocomplete="off" value="<?php echo $rid ;?>" > -->
   
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off">
   
  </div>
  <div class="form-group">
    <label >Check-in date</label>
    <input type="date" class="form-control"  placeholder="Enter check-in Date" name="cin" autocomplete="off">
   
 
  <div class="form-group">
    <label >Check-out date</label>
    <input type="date" class="form-control"  placeholder="Enter Check-out Date" name="cout" autocomplete="off">
   
  </div>
  <!-- <div class="form-group">
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
   
  </div> -->
  
  <button type="submit" class="btn btn-primary" name="submit">Book</button>
  <button class="btn btn-primary my-5"  ><a href="room1.php" class="text-light">Back</a>
        
        </button>
</form>
</div>

   
  </body>
</html>