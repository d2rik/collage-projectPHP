<?php 
 include './config.php';

 if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];
    $sql3= "DELETE FROM `contact` WHERE ID = $id";
    $result3= mysqli_query($conn,$sql3);
    if(!$result3){
        die("Delete failed");
    }
    header('location:display.php');
 }
?>