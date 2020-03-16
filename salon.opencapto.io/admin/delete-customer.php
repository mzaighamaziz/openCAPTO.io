<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

$id=$_GET['id'];
echo $id;

$query=mysqli_query($con,"delete from tblcustomers where ID='$id'");

if($query){
    header('location:customer-list.php');
}else{
    echo '<script>alert("Something Went Wrong")</script>';
}