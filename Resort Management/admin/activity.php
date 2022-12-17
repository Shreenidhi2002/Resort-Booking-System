<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <style>
        .topnav {
  background-color: #333;
  overflow: hidden;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 26px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav h2 {
  float: left;
  color: rgb(245, 92, 117);
  text-align: center;
  padding: 1px 1px;
  text-decoration: none;
  font-size: 25px;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: rgb(231, 73, 99);
  color: white;
}
.room1{
    display: inline-block;
}

    </style>
</head>
<body style="background-color: grey;">





<!-- inserted a php code -->
<?php include 'connection.php' ?>





    <div class="topnav">
        
        <!-- Contact Number:8902521354 -->
        <h2 > MOON LIGHT </h2>
        <a class="active" href="admin.html">Admin Login</a>
  <a  href="UserLogin.html"> Login</a>
    <a  href="RegistrationPage.php">Register</a>
  <a href="#about">Contact us</a>
  <a href="#about">About us</a>
  <a href="activity.php">Activities</a>
  <a href="room1.php">Rooms</a>
  <a href="index.html">Home</a>
      
    </div >
<center><h1>Activities</h1></center>



    <div id="outermost" style="background-color: grey;border-top: 10px rgb(231, 73, 99);margin: 50px; ">



     
        <!-- image/activity1.jpg -->
        <?php
        $str = 'select * from activity where status=1';
        $resu = mysqli_query($conn,$str);
        if($resu){
          while($row = $resu->fetch_assoc()):?>
<div id="a1" style="background-color: white;margin: 50px;border-radius: 50px;">
            <div class.="activity1" > 
              <center><img src="<?php echo $row['imagepath']; ?>
                " alt="activity image" style="width: 300px;margin-top: 20px; display: inline;"></center> 
                </div>  
     <div class="activity1" style="width: 100px;display: inline;height: 100px;padding-left: 150px;padding-right: 150px;"  ><center><h1>
      <?php 
      echo $row['aname']; ?>
      </h1></center> <p style="padding-left: 150px;padding-right: 150px;">
      <?php 
      echo $row['description'];?>
      <br><br>
    <b > Status:Active</b>
     
</p></div>
</div>
       <?php  endwhile; ?>
     </div>
       <?php }?>
      




   </body>
</html> 

<!-- <div id="a2" style="background-color: white;margin: 50px;border-radius: 50px;">


    <div class.="activity2" > 
      <center><img src="image/activity2.jpg" alt="activity2 image" style="width: 300px;margin-top: 20px; display: inline;"></center> 
   </div>  
    <div class="activity2" style="width: 100px;display: inline;height: 100px;padding-left: 150px;padding-right: 150px;"  ><center><h1>Snorkeling</h1></center> <p style="padding-left: 150px;padding-right: 150px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates illo aperiam suscipit recusandae, harum doloremque quae eum omnis veniam autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis totam quisquam quod quae, libero reprehenderit tempora, iure, eaque facilis ipsa distinctio veniam explicabo! Optio modi mollitia labore sint earum</p></div>
</div>

<div id="a3" style="background-color: white;margin: 50px;border-radius: 50px;">


    <div class.="activity3" > 
      <center><img src="image/activity3.jfif" alt="activity3 image" style="width: 300px;margin-top: 20px; display: inline;"></center> 
   </div>  
    <div class="activity3" style="width: 100px;display: inline;height: 100px;padding-left: 150px;padding-right: 150px;"  ><center><h1>Diving</h1></center> <p style="padding-left: 150px;padding-right: 150px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates illo aperiam suscipit recusandae, harum doloremque quae eum omnis veniam autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis totam quisquam quod quae, libero reprehenderit tempora, iure, eaque facilis ipsa distinctio veniam explicabo! Optio modi mollitia labore sint earum</p></div>
</div>


<div id="a4" style="background-color: white;margin: 50px;border-radius: 50px;">


    <div class.="activity4" > 
      <center><img src="image/activity4.jpg" alt="room1 image" style="width: 300px;margin-top: 20px; display: inline;"></center> 
   </div>  
    <div class="activity4" style="width: 100px;display: inline;height: 100px;padding-left: 150px;padding-right: 150px;"  ><center><h1>Island Hopping</h1></center> <p style="padding-left: 150px;padding-right: 150px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates illo aperiam suscipit recusandae, harum doloremque quae eum omnis veniam autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis totam quisquam quod quae, libero reprehenderit tempora, iure, eaque facilis ipsa distinctio veniam explicabo! Optio modi mollitia labore sint earum</p></div>
</div>


 <div id="r5" style="background-color: white;margin: 50px;border-radius: 50px;">


    <div class.="room5" > 
      <center><img src="image/room5.jpeg" alt="room1 image" style="width: 300px;margin-top: 20px; display: inline;"></center> 
   </div>  
    <div class="room5" style="width: 100px;display: inline;height: 100px;padding-left: 150px;padding-right: 150px;"  ><center><h1>Room 5</h1></center> <p style="padding-left: 150px;padding-right: 150px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates illo aperiam suscipit recusandae, harum doloremque quae eum omnis veniam autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quis totam quisquam quod quae, libero reprehenderit tempora, iure, eaque facilis ipsa distinctio veniam explicabo! Optio modi mollitia labore sint earum</p></div>
</div> -->
 

   


