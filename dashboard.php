<?php 
    // Start MySQL Connection
    include('connect.php'); 
    session_start();
    
    session_start();
    if(!$_SESSION['email']==true)
    {
        header('location:index.php');}
     $id=$_GET['id'];
?>
<html>
<html lang="en">
<head>
    <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dashboard</title>
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
    <title>Raspberry Pi Weather Log</title>
    </head>
    <body>
         <nav class="navbar mynavbar">
        <div class="container sm_padding xs_padding no_padding">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="#"><img src="Images/Logo.jpg" alt=""> </a>
                    <li class="dropdown visible-xs">
                        <div href="#" class="dropdown-toggle ProfileImg" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">
                        </div>
                        
                        <div class="ProfileCard">
                            <?php
                            $query=mysqli_query($con,"select * from users where md5(id)='$id'");
                            while($row=mysqli_fetch_array($query)){
                                ?>
                            <div class="col-xs-offset-4 col-xs-4">
                                <img src="<?php echo $row['image']; ?>"  class="img-responsive">
                            </div>
                            
                            
                            <div class="col-xs-12">
                                <h1><?php echo $row['name']; ?></h1>
                                <h2><?php echo $row['email']; ?></h2>
                            </div>
                            <div class="col-xs-12 CardDetails">
                                <div><i class="fa fa-phone"></i>
                                <?php echo $row['telephone']; ?>
                                </div>
                                <div><i class="fa fa-map-marker"></i>
                                <?php echo $row['address']; ?></div>
                            </div>
                            
                            <div class="col-xs-12 logout">

                                <a href="logout.php" type="submit" name="login" class="btn MyButton">
                                    Logout
                                </a>
                                <a href="adminupdate.php?id=<?php echo $id ?>" type="submit" name="login" class="btn MyButton">
                                    update
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                            ?>
                    </li>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul id="" class="nav navbar-nav navbar-right">
                    <li ><a class="" href="adminhome.php?id=<?php echo $id ?>">Home</a></li>
                    <li><a href="admintrack.php?id=<?php echo $id?>">
                                   Location Finder
                        </a></li>
                  
                    <li><a href="dashboard.php?id=<?php echo $id?>">DashBoard</a></a></li>
                    <li class="dropdown hidden-xs">
                        <div href="#" class="dropdown-toggle ProfileImg" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">
                        </div>
                        
                        <div class="ProfileCard">
                            <?php
                            $query=mysqli_query($con,"select * from users where md5(id)='$id'");
                            while($row=mysqli_fetch_array($query)){
                                ?>
                            <div class="col-xs-offset-4 col-xs-4">
                                <img src="<?php echo $row['image']; ?>"  class="img-responsive">
                            </div>
                            
                            
                            <div class="col-xs-12">
                                <h1><?php echo $row['name']; ?></h1>
                                <h2><?php echo $row['email']; ?></h2>
                            </div>
                            <div class="col-xs-12 CardDetails">
                                <div><i class="fa fa-phone"></i>
                                <?php echo $row['telephone']; ?>
                                </div>
                                <div><i class="fa fa-map-marker"></i>
                                <?php echo $row['address']; ?></div>
                            </div>
                            
                            <div class="col-xs-12 logout">

                                <a href="logout.php" type="submit" name="login" class="btn MyButton">
                                    Logout
                                </a>
                                <a href="adminupdate.php?id=<?php echo $id ?>" type="submit" name="login" class="btn MyButton">
                                    update
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                            ?>
                    </li>
                    <div class="SearchSection">
                        <div class="searchBar">
                            <i class="fa fa-search"></i>
                            <input type="text" name="search" placeholder="Search" id="SearchField">
                        </div>
                        <button id="cancleSearch"><i class="fa fa-times-circle"></i></button>
                    </div>

                </ul>
            </div>
        </div>
    </nav>
         
    <section id="Main">
        <div class="container">
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <h1>User Information</h1>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <input type="text" name="search" placeholder="Search" id="Search">
                    </div>
                </div>
            <div class="table-responsive">
                
                <table class="table table-bordered table-hover" cellspacing="0" cellpadding="4">
                    <thead>
                        <tr>
                            <th class="table_titles">ID</th>
                            <th class="table_titles">Name</th>
                            <th class="table_titles">Email</th>
                            <th class="table_titles">Address</th>
                            <th class="table_titles">Telephone</th>
                            <th class="table_titles">Cnic</th>
                            <th class="table_titles">Description</th>
                            <th class="table_titles">Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
<?php

             $result_per_page=10;
            $query=mysqli_query($con,"select * from users order by id");
            $number_of_result=mysqli_num_rows($query);
           
             $number_of_pages=ceil($number_of_result/$result_per_page);
             
            if(!isset($_GET['page'])){
             $page=1;
         }else{
             $page=$_GET['page'];
         }
       
         $this_page_first_result=($page-1)*$result_per_page;
    // Retrieve all records and display them
    $result =mysqli_query($con,"select * from users where isadmin='null' order by id  limit ".$this_page_first_result.','.$result_per_page);
    
    // Used for row color toggle
    

    // process every record
    while( $row = mysqli_fetch_array($result) )
    {
       
        
         
        echo '<tr>';
        echo '   <td>'.$row["id"].'</td>';
        echo '   <td>'.$row["fname"].'  '.$row["lname"].'</td>';
        echo '   <td>'.$row["email"].'</td>';
        echo '   <td>'.$row["address"].'</td>';
        echo '   <td>'.$row["telephone"].'</td>';
        echo '   <td>'.$row["cnic"].'</td>';
        echo '   <td>'.$row["description"].'</td>';
       
        ?>
        <td><a class="btn btn-s" href="admindelete.php?userid=<?php echo $row[id]?>&id=<?php echo $id ?>"><i style="font-size: 28px;
    color: #154a9a;" class="fa fa-trash" aria-hidden="true"></i></a></td>
        <?php
        echo '</tr>';
       
    }
?>
    </tbody>
     </table>
      <div class="pagination">
         <?php
         if($page==1){
             
         }else{
         echo '<a href="dashboard.php?page=1& id='.$id.'">First</a>';
         }
           if($page>1){
           echo '<a href="dasboard.php?page='. ($page-1) .'& id='.$id.'">&laquo;</a>'; 
         }else
         {
            echo '<a class="btn disabled" href="">&laquo;</a>'; 
         }
     
     for($i=1;$i<=$number_of_pages;$i++){
            if($i>=15){
                 //echo '<a href="adminhome.php?page='. $i .'& id='.$id.'">.</a>';
             }else{
             echo '<a href="dashboard.php?page='. $i .'& id='.$id.'">'.$i.'</a>';
             }
             
         }
         if($i>=15){
             echo '<a class="btn disabled" href="dashboard.php?page='. $i .'& id='.$id.'">....</a>';
            
         }
         if($number_of_pages>=10){
             
             echo '<a  href="dashboard.php?page='. ($number_of_pages-3) .'& id='.$id.'">'.($number_of_pages-3).'</a>';
             echo '<a  href="dashboard.php?page='. ($number_of_pages-2) .'& id='.$id.'">'.($number_of_pages-2).'</a>';
             echo '<a  href="dashboard.php?page='. ($number_of_pages-1) .'& id='.$id.'">'.($number_of_pages-1).'</a>';
             echo '<a  href="dashboard.php?page='. $number_of_pages .'& id='.$id.'">'.$number_of_pages.'</a>';
         }
          if($page<$number_of_pages){
        echo '<a href="dashboard.php?page='. ($page+1) .'& id='.$id.'">&raquo;</a>';
         }
         else
         {
            echo '<a class="btn disabled" href="">&raquo;</a>'; 
         }if($page==$number_of_pages){
             
         }else{
         echo '<a href="dashboard.php?page='. $number_of_pages .'& id='.$id.'">Last</a>';
         }
         ?>
         </div>
            </div>
        </div>
       
    </section>
    <!-- navagarion ends here -->
    <!-- jQuery library -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- mys script -->
    <script src="Content/js/MyScript.js"></script>
    
    <!-- stripe script starts here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $('#Search').keyup(function(){
      var value = $(this).val();
      
       $.ajax({
        url:'search.php',
        data:'searchuser='+value,
        success:function(data){
            $('table').html(data);
        }
       });
     
        });
  
  </script>
    </body>
</html>