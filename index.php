<?php
include("connect.php");
session_start();
?>



<?php 

   
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        
        $query=mysqli_query($con,"select * from users where email='$_POST[email]' and password='$_POST[password]'");
        $rowcount=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);
        if(!$rowcount){
            echo "<script>alert('Enter Correct Information')</script>";
        } else{
            if($row['isadmin']==1){
                $_SESSION['email']=$email;
           
            $query=mysqli_query($con,"select * from users where email='$_POST[email]'");
            while ($row = mysqli_fetch_array($query)){	
                $id=$row['id']; 
                 $encryptedid = md5($id);
                 $_SESSION['id']=$encryptedid;
                header('location:adminhome.php');
            }
        }
        else{
            $_SESSION['email']=$email;
            

            $query=mysqli_query($con,"select * from users where email='$_POST[email]'");
            while ($row = mysqli_fetch_array($query)){	
                $id=$row['id']; 
                 $encryptedid = md5($id);
                 $_SESSION['id']=$encryptedid;
                header('location:home.php');
                // header('location:sucessfull.php?id='.$encryptedid.'');
                                 }
        }
        }
    }


?>

<!DOCTYPE html>
<html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Index</title>
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

<body id="Login">
    <div class="container">
        <div class="col-md-7 LoginLeftSide">
             
            <h1>Locate your<span> GSM</span> assets anywhere any time </h1>
            <p><b>openCAPTO™</b>  is the largest GSM Positioning and asset location solution in Africa with the largest GSM CELL ID & WiFi Data Base on the African continent with over 747 million Cell IDs from more than 227 operators. Complement or replace your GPS in devices location-based services with our GSM Mobile Real Time Location Services. OpenCAPTO ™ (GSM-RTLS™) is the future of Positioning Services in the world.  There is over 747 million active GSM devises and sensors in Sub-Saharan Africa. With our AI and advanced location algorithms you have the most powerful positioning systems in the world. Locate registered and unregistered GSM devices.   </p>
            <p>
                Join our world class service and find your GSM Phones, GSM Assets Chips in real time. Register for free. Our Location services is based on a pay per use model only pay when you need to find your GSM device.    
            </p>
            <a class="btn MyButton" href="registration.php">Register Now Free</a>
        </div>
        <div class="col-md-5 FormSection">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="name" class=" col-form-label ">E-Mail Address</label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="email">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class=" col-form-label ">Password</label>
                            <div class="">
                                <input id="name" type="password" class="form-control" name="password">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="login" class="btn MyButton">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- mys script -->
    <script src="Content/js/MyScript.js"></script>
</body>

</html>