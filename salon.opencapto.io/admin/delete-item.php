<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

$id=$_GET['id'];
echo $id;

$query=mysqli_query($con,"delete from items where id='$id'");

if($query){
    $msg="SucessFully Deleted";
    header('location:manage-items.php');
}else{
    echo '<script>alert("Something Went Wrong")</script>';
}