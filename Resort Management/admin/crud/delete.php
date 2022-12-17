<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `room` where rno=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}
?>
