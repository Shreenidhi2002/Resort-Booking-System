<?php

include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <!-- <button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add Room</a> -->
        
            </button></button><button class="btn btn-primary my-5"  ><a href="/admin/AdminDashboard.php" class="text-light">Back</a>
        
        </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Email id</th>
      <th scope="col">Room Number</th>
      <th scope="col">Booking id</th>
      <th scope="col">Check-in Date</th>
      <th scope="col">Check-out Date</th>
      <th scope="col">Booking Status</th>
      <th scope="col">Action</th>
      
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>

  <?php
 $sql="select * from `customer` C ,`reservation` R where C.email=R.email";
 $result=mysqli_query($conn,$sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $n=$row['fullname'];
        $con=$row['contact'];
        $add=$row['address'];
        $mail=$row['email'];
        $r=$row['rno'];
        $bid=$row['bookid'];
        $cin=$row['checkin'];
        $cout=$row['checkout'];
        $bstatus=$row['bookingstatus'];
        
        echo '<tr>
        <th scope="row">'.$n.'</th>
        <td>'.$con.'</td>
        <td>'.$add.'</td>
        <td>'.$mail.'</td>
        <td>'.$r.'</td>
        <td>'.$bid.'</td>
        <td>'.$cin.'</td>
        <td>'.$cout.'</td>
        <td>'.$bstatus.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$bid.'" class="text-light" >Update Status</a></button>
       </td>
      </tr>';
    }
 }
  ?>

    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>