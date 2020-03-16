<?php
include("connect.php");
session_start();
if(!$_SESSION['id']==true)
    {
        header('location:index.php');}
?>
<?php
    $id=$_GET['id'];
    if(isset($_POST['update'])){
        $name= $_POST['name'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        $telephone= $_POST['telephone'];
        $cnic= $_POST['cnic'];
        $description= $_POST['description'];   
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
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
               $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 2097152){
               $errors[]='File size must be excately 2 MB';
            }
            
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,$folder);
              // echo $file_name;
      
               //echo "Success";
            }else{
               print_r($errors);
            }
         }
        //echo $_POST['name'];
        $query=mysqli_query($con,"update users set 
        name='$name',email='$email',
        address='$address',telephone='$telephone',
        cnic='$cnic',description='$description', image='$folder'
         where md5(id)='$id' ");
        if($query){
            echo "<script>alert('SuccessFully Updated')</script>";
            
            
        }else{
            echo "fail";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
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
<div class="container ">
<div class="col-md-7 LoginLeftSide">
            <h1>Manage <br><span>Mobile Network</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim.Lorem ipsum dolor
                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim.</p>
            <a class="btn MyButton" href="adminhome.php?id=<?php echo $id; ?>">Home</a>
        </div>
        <div class="col-md-5 RegisterationForm FormSection">
            
            
            <div class="card">
           
                <div class="card-header">
                    <h3>Update</h3>
                </div>
                <div class="card-body">
                
                
                <form action=""  method="POST" enctype="multipart/form-data">
                <?php

                    
                    //echo $id;
                    $query=mysqli_query($con,"select * from users where md5(id)='$id'");
                    while($row=mysqli_fetch_array($query)){

                    

                ?>
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label ">Name</label>
                            <span class="error"></span>
                            <div class="">
                                <input id="name" value="<?php echo $row['name']?>" type="text" class="form-control" name="name">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <label for="name" class=" col-form-label ">E-Mail Address</label>
                            <div class="">
                                <input id="name" value="<?php echo $row['email']?>" type="text" class="form-control" name="email">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no_padding">
                            <label for="name" class=" col-form-label">Address</label>
                            <div class="">
                                <input id="name" value="<?php echo $row['address']?>" type="text" class="form-control" name="address">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_left">
                            <label for="name" class=" col-form-label">Telephone</label>
                            <div class="">
                                <input id="name" value="<?php echo $row['telephone']?>" placeholder="xxxx-xxxxxxx" pattern="03[0-9]{2}-[0-9]{7}" maxlength="12"
                                    type="text" class="form-control" name="telephone">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 col-md-6 no_padding_right">
                            <label for="name" class=" col-form-label ">Cnic</label>
                            <div class="">
                                <input id="name" value="<?php echo $row['cnic']?>" type="text" placeholder="xxxxx-xxxxxxx-x" maxlength="15"
                                    pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" class="form-control" name="cnic">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no_padding">
                            <label for="name" class=" col-form-label ">Description</label>

                            <textarea class="form-control"  name="description"><?php echo $row['description']?></textarea>
                            
                            <span class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        
                        <div class="form-group col-xs-12 no_padding">
                            <div class="custom-file">
                                <label for="image" class="col-form-label">Image </label>
                                <input type="file" value="<?php echo $row['image'] ?>" required class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                            <?php
                    }
                            ?>
                        <div class="form-group">
                            <button type="submit" name="update" class="btn MyButton">
                                Update
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
</body>
</html>