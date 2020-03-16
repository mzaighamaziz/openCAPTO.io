<?php 
    // Start MySQL Connection
    include('connect.php'); 
    session_start();
    
    session_start();
    if(!$_SESSION['email']==true)
    {
        header('location:index.php');}
        $id=$_GET['id'];
        $userid=$_GET['userid'];
        echo $userid;
        echo $id;
     $query=mysqli_query($con,"delete from users where id='$userid'");
     
     header('location:dashboard.php?id='.$id.'');
?>