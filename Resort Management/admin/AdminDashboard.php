<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
          margin: 0;
        }
        
        ul {
            
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 15%;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
         
        }
        /* li{
            width: 20px;
        } */
        
        li a {
          display: block;
          color: #000;
          padding: 45px 30px;
          text-decoration: none;
          background-color: grey;
          
        }
        
        li a.active {
          background-color: #04AA6D;
          color: white;
          
        }
        
        li a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        

        
        /* th{
          border: 1px solid black;
           padding-top:15px;
           padding-bottom:15px;
           padding-left: 80px;
           padding-right: 80px;
           margin: 50px;
        } */
        table,th,tr,td{
          border:2px solid black ;
          border-collapse: collapse;
          padding-top: 10px;
          padding-bottom: 10px;
          
        }
        th{
          background-color: #04AA6D;
          color: white;
        }
        h1{
          margin-left:250px;
          margin-top:250px;
          color:blue;
        }
        
        </style>
</head>
<body>
    <ul>
        <li><a class="active" href="#home">Dashboard</a></li>
        <li><a href="adminReservation/display.php">Reservation List</a></li>
        <li><a href="AdminRegistration/display.php">Registered List</a></li>
        <li><a href="acrud/display.php">Activity List</a></li>
        <li><a href="crud/display.php">Room List</a></li>
        <li><a href="admin.html">Back</a></li>
      </ul>
      
      <div style="margin-left:15%;padding:1px 16px;height:1000px; background-color:white ">
        
        
        <div>
           
        <h1>Welcome to Admin Dashboard<h1>
      
        </div>
      </div>
      
</body>
</html>