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
        <button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add Activity</a>
        
            </button><button class="btn btn-primary my-5" style="margin-left:70px" ><a href="/admin/AdminDashboard.php" class="text-light">Back</a>
        
        </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Activity id</th>
      <th scope="col">Activity Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
 $sql="select * from `activity`";
 $result=mysqli_query($conn,$sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $aid=$row['aid'];
        $aname=$row['aname'];
        $description=$row['description'];
        $status=$row['status'];
        echo '<tr>
        <th scope="row">'.$aid.'</th>
        <td>'.$aname.'</td>
        <td>'.$description.'</td>
        <td>'.$status.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$aid.'" class="text-light" >Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$aid.'" class="text-light">Delete</a></button>
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