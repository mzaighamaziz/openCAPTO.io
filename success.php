
<?php
    include("connect.php");
    
 

if(isset($_GET['amount'])){
        $amount=$_GET['amount'];
        $id=$_GET['user'];
       
        
}


 date_default_timezone_set('Asia/karachi');
     $dateS = date('y/m/d');

//$query=mysqli_query($con,"insert into payment values (null,'$amount','$id','$dateS')");
if(!$query){
    echo "error";
}


?>

<html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Success </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="Content/css/bootstrap.min.css">
    <!-- font-awesome  -->
    <link rel="stylesheet" href="Content/css/font-awesome.min.css">
    <!-- Linear-Icons -->
    <link rel="stylesheet" href="Content/css/LinearIcons.css">
    <!-- theme styles -->
    <link rel="stylesheet" href="Content/css/Style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>You Have Done With Payment</strong></p>
  <hr>
  <p>
    You have to login again Please press the button below 
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue</a>
  </p>
</div>
</body>

<!-- navagarion ends here -->
    <!-- jQuery library -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- mys script -->
    <script src="Content/js/MyScript.js"></script>
     <script src="https://js.stripe.com/v3/"></script>
    <!-- stripe script starts here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
