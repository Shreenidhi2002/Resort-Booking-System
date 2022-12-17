<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $aid=$_GET['deleteid'];
    $sql="delete from `activity` where aid=$aid";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}
?>