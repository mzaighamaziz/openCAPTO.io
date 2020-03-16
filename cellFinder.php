
<?php
include("connect.php");
    session_start();
if(!$_SESSION['id']==true)
    {
        header('location:index.php');}
        // $id=$_GET['id'];
    
    $query=mysqli_query($con,"select * from payment where userid='$id'");
        $row=mysqli_fetch_array($query);
        if($row['amount']==3000 && strtotime($row['date']) > strtotime('-30 days')){
    
    
 $lat=-33.918861;
 $lon=18.4241;

   if(isset($_POST['search'])){
            $mcc=$_POST['mcc'];
            $mnc=$_POST['mnc'];
            $lac=$_POST['lac'];
            $cid=$_POST['cid'];
           
        
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://us1.unwiredlabs.com/v2/process.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{
    \"token\": \"278053e472aceb\",
    \"radio\": \"gsm\",
    \"mcc\": $mcc,
    \"mnc\": $mnc,
    \"cells\": [{
      \"lac\": $lac,
      \"cid\": $cid
    }],
    \"address\": 1}",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 $data=  $response;
 //echo $data;
  $decode = json_decode($data);
  $lat= $decode->lat;
  $lon= $decode->lon;
  $address= $decode->address;
  $balance=$decode->balance;
}
if(!$lat){
   echo "<script> alert(Please Enter Correct Information)</script>";
}

        }




?>
<html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Finder</title>
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

<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 600px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

    #Main {
        background: #E6EBF1;
        margin-top: 92px;
        padding: 50px 0;
    }
</style>

<body id="TrackId">
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
                                <a href="update.php?id=<?php echo $id ?>" type="submit" name="login" class="btn MyButton">
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
                    <li ><a href="home.php?id=<?php echo $id?>">Home</a></li>
                    <li><a href="cellFinder.php?id=<?php echo $id?>">
                                Location Finder
                        </a></li>
                  
                    <li><a>About Us</a></li>
                    <li><a href="plans&pricing.php?id=<?php echo $id ?>">Plans & Pricing</a></li>
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
                         Policy & Statement <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="ourPolicy.php?id=<?php echo $id ?>">Our Policies</a></li>
    <li><a href="ourStatement.php?id=<?php echo $id ?>">Privacy Statement</a></li>
    
  </ul>
                    </li>
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
                                <a href="update.php?id=<?php echo $id ?>" type="submit" name="login" class="btn MyButton">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 no_padding_right">
                    <div class="FormSection">
                        <div class="card-header">
                            <h3>CellId Finder</h3>
                        </div>
                        <div class="map" id="map"></div>
                        <script>
                            // Initialize and add the map
                            function initMap() {
                                // The location of Uluru
                                var uluru = { lat: <?php echo $lat ?>, lng: <?php echo $lon ?> };
                                // The map, centered at Uluru
                                var map = new google.maps.Map(
                                    document.getElementById('map'), { zoom: 6, center: uluru });
                                // The marker, positioned at Uluru
                                var marker = new google.maps.Marker({ position: uluru, map: map });
                            }
                        </script>

                        <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD98kuhhcr6vL82CKRz6RfE-GilTkbvjWw&callback=initMap">
                            </script>
                            <div class="">
                                <h4><b>Latitude: </b><?php echo $lat ?></h4>
                                <h4><b>Longitude: </b><?php echo $lon ?></h4>
                                <h4><b>Address: </b><?php echo $address ?></h4>
                                <h4><b>Balance: </b><?php echo $balance ?></h4>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="FormSection">
                        <div class="card-header">
                            <h3>Find GSM CEllId</h3>
                        </div>
                        <form method="POST" action="">
                            <div class="form-group col-xs-12 col-md-6 no_padding_left">
                                <label class=" col-form-label ">MCC</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="mcc" class="form-control" name="mcc">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 no_padding_right">
                                <label class=" col-form-label ">MNC</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="mnc" class="form-control" name="mnc">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 no_padding_left">
                                <label class=" col-form-label ">LAC</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="lac" class="form-control" name="lac">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                          <div class="form-group col-xs-12 col-md-6 no_padding_right">
                                <label class=" col-form-label ">LAC(HAX)</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="lachex" class="form-control" name="lachex">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 col-md-6 no_padding_left">
                                <label class=" col-form-label ">CID</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="cid" class="form-control" name="cid">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                           <div class="form-group col-xs-12 col-md-6 no_padding_right">
                                <label class=" col-form-label ">CID(HEX)</label>
                                <span class="error"></span>
                                <div class="">
                                    <input type="text" id="cidhex" class="form-control" name="cidhex">
                                    <span class="invalid-feedback" role="alert">

                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" col-form-label ">Google Data</label>
                                <input class="ml-5" type="checkbox">
                            </div>
                            <div class="form-group">
                                <label class=" col-form-label ">Yandex Data</label>
                                <input class="ml-5" type="checkbox">
                            </div>
                            <div class="form-group">
                                <label class=" col-form-label ">Averaging</label>
                                <input class="ml-5" type="checkbox">
                            </div>
                            <div class="form-group">
                                <button class="btn MyButton" name="search">
                                    Search Cell-Id
                                </button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyright © 2019-20 | Opencapto.io</p>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- jQuery library -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- mys script -->
    <script src="Content/js/MyScript.js"></script>
    
    <!-- stripe script starts here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $('#lac').keyup(function(){
      var value = $(this).val();
      
       $.ajax({
        url:'search.php',
        data:'searchlac='+value,
        success:function(data){
            $('#lachex').val(data);
        }
       });
     
        });
  
  </script>
  <script>
      $('#cid').keyup(function(){
      var value = $(this).val();
      
       $.ajax({
        url:'search.php',
        data:'searchcid='+value,
        success:function(data){
            $('#cidhex').val(data);
        }
       });
     
        });
  
   $('#mnc').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
         $('#mcc').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
        $('#lac').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
        $('#lachex').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
        $('#cid').keydown(function () {
            //allow  backspace, tab, ctrl+A, escape, carriage return
            if (event.keyCode == 8 || event.keyCode == 9
                || event.keyCode == 27 || event.keyCode == 13
                || (event.keyCode == 65 && event.ctrlKey === true))
                return;
            if ((event.keyCode < 48 || event.keyCode > 57 && event.keyCode < 96 || event.keyCode > 105))
                event.preventDefault();
           
        });
        $('#cidhex').keydown(function () {
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
</htm>
<?php 
}else{
    header('location:home.php?id='.$id.'');  
}
?>
