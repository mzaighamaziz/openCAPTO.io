<?php
include("connect.php");
?>


<?php
    session_start();
    if(isset($_POST['save'])){
        $fname= $_POST['fname'];
        $lname=$_POST['lname'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        $telephone= $_POST['telephone'];
        $cnic= $_POST['cnic'];
        $description= $_POST['description'];
        $password= $_POST['password'];
        $imei=$_POST['imei'];
        
        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $tmp      = explode('.',$_FILES['image']['name']);
            $file_ext = strtolower(end($tmp));
            //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $folder="Images/".$file_name;
            $extensions= array("jpeg","jpg","png","jfif","webp");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,$folder);
               //echo $file_name;
      
               //echo "Success";
            }else{
               print_r($errors);
            }
         }


    $query=mysqli_query($con,"insert into users values (null,'$fname','$lname','$email','$imei','$address','$telephone','$cnic','$description','$password','$folder',0)");
       if(!$query){
            echo "<script>alert('Sorry Register again')</script>";
       } else{
        $_SESSION['email']=$email;
        $query=mysqli_query($con,"select * from users where email='$email'");
        while ($row = mysqli_fetch_array($query)){
            $id=$row['id']; 
            $encryptedid = md5($id);
            header('location:home.php?id='.$encryptedid.'');
        }
       }

}
?>
<!DOCTYPE html>
<html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Register</title>
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
        <style>
            #Login {
    
    overflow: auto;
   
    height: auto;
    
}
        </style>
</head>

<body id="Login">
    <div class="container">
        <div class="col-md-7 LoginLeftSide">
            <h1>Manage <br><span>Mobile Network</span></h1>
            <p><b>openCAPTO™</b> GSM Positioning Solutions partners with the world's largest CELL ID & WiFi Data Base in the world with over 113 million Cell IDs from more than 1000 operators. Accurate Cell ID and Wi-Fi positioning with world’s largest database. Complement or replace GPS in devices</p>
            <a class="btn MyButton" href="index.php">Login</a>
        </div>
        <div class="col-md-8 RegisterationForm FormSection">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label ">First Name</label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="fname" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <label for="name" class=" col-form-label ">Last Name</label>
                            <div class="">
                                <input id="name" type="text" required  class="form-control" name="lname">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label ">E-Mail Address</label>
                            <div class="">
                                <input id="name" type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="email">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <label for="name" class=" col-form-label ">GSM Device IMEI Number</label>
                            <div class="">
                                <input id="name" type="text" class="form-control" name="imei" required>
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            <p>How to get your IMEI Number by dialing the following code: *#06#</p>
                        </div>
                        <div class="form-group col-xs-12 no_padding">
                            <label for="name" class=" col-form-label">Address</label>
                            <div class="">
                                <input id="name" type="text" required class="form-control" name="address">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label">Mobile Phone Number</label>
                            <div class="">
                                <input id="Number"
                                    type="text" required  maxlength="13" class="form-control" name="telephone">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <label for="name" class=" col-form-label ">ID
                            Number</label>
                            <div class="">
                                <input id="cnic" type="text" 
                                 maxlength="13"
                                     required class="form-control" name="cnic">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no_padding">
                            <label for="name" class=" col-form-label ">Description Of Use</label>

                            <textarea class="form-control" required name="description"></textarea>
                            <!-- <input id="name" type="text" class="form-control" name="description"> -->
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label ">Password</label>

                            <input id="password-field" required type="password" minlength="8" class="form-control"
                                name="password">
                            <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <div class="custom-file">
                                <label for="image" class="col-form-label">Image </label>
                                <input type="file" required class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no_padding">
                            <input type="checkbox" class="form-control" required >I have read the terms and conditions by clicking on the check box, I except and understand the terms of use.    
                            <!-- <input id="name" type="text" class="form-control" name="description"> -->
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn MyButton">
                                Register
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
    <script>
    $('#Number').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
        $('#cnic').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
                
        });
    </script>
</body>

</html>