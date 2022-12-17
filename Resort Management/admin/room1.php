<?php

include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
 
            <table class="table">
  <thead>
    <tr>
    <th scope="col">Image</th>
      <th scope="col">Room Number</th>
      <th scope="col">Room Name</th>
      <th scope="col">Type</th>
     
      <th scope="col">Price/day</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
 
      



 $sql="select * from `room` where status=1 ";
 $result=mysqli_query($conn,$sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $imgpath=$row['imagepath'];
        $rno=$row['rno'];
        $name=$row['rname'];
        $type=$row['type'];
        
       
        $price=$row['price'];
        $desc=$row['description'];
        echo '<tr>
        <th scope="row"> <img src='.$imgpath.' style="width: 200px;"></th>
        <td>'.$rno.'</td>
        <td>'.$name.'</td>
        <td>'.$type.'</td>
        
        <td>'.$price.'</td>
        <td>'.$desc.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?roomid='.$rno.'" class="text-light" name="submit">Book</a></button>
        
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
<button class="btn btn-primary my-5"  ><a href="index.html" class="text-light">Back</a> </button>
    </div>
</body>
</html>