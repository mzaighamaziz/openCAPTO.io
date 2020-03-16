<?php 
    // Start MySQL Connection
    include('connect.php'); 
    
?>
<?php
   // echo $id=$_GET['user'];


    session_start();
    if(!$_SESSION['email']==true)
    {
        header('location:index.php');}
      //  $id=$_GET['id'];

        // $_SESSION['id']=$id;
        $id=$_SESSION['id'];
               
        $query=mysqli_query($con,"select * from payment where userid='$id' ");
       
        $row=mysqli_fetch_array($query);
        
        
        if($row['amount']==300 &&  strtotime($row['date']) > strtotime('-30 days') ){
            
            ?>
            <!DOCTYPE html>
<html>
<html lang="en">
<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
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
                                <h1><?php echo $row['fname'];
                                echo ' ';
                                echo $row['lname'];?></h1>
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
        
       
          <section id="MainBanner">
        <div class="container no_padding">
            <h2><span>open<span>CAPTO</span><sup>TM</sup> </span> GSM Positioning Solutions</h2>
            <h2>THE largest GSM asset location system in South Africa</h2>
        </div>
        </div>
        <img width="100%" src="Images/openCAPTOSkyline.jpg">
    </section>
    <!-- main bannar design ends here -->
    <!-- services section starts here -->
   <!-- <section id="Services">
        <div class="container">
            <div class="row">
                <h2><span>openCAPTO™</span> GSM Positioning Solutions partners with the world's largest CELL ID & WiFi
                    Data Base
                    in the world with over 113 million Cell IDs from more than 1000 operators. Accurate Cell ID and
                    Wi-Fi positioning with world’s largest database. Complement or replace GPS in devices.</h2>

                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>113 million</h1>
                        <span>Cell ID's</span>
                    </div>
                    <p>Use Cell ID to locate any mobile device with a GSM/WCDMA/CDMA modem. We have more than 113
                        million Cell IDs from more than 1000 operators in our database.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>2930 million</h1>
                        <span>Wi-Fis</span>
                    </div>
                    <p>Use Wi-Fi for increased accuracy. A mobile device with Wi-Fi can be located in urban areas with
                        an accuracy for around 20 meters</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>95714 million</h1>
                        <span>Positions</span>
                    </div>
                    <p>Use our service to easily locate connected devices indoor and outdoor. Our global database of
                        Cell ID and Wi-Fi data provides the latitude and longitude of your device.</p>
                </div>
            </div>
        </div>
    </section>-->
    <!-- services section ends here -->
    <!-- footer starts here -->
    <footer>
        <p>Copyright © 2019-20 | Opencapto.io</p>
    </footer>
    <!-- footer ends here -->
        

   
    
    <!-- navagarion ends here -->
    <!-- jQuery library -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- mys script -->
    <script src="Content/js/MyScript.js"></script>
     
    
    </body>
</html>
        <?php    
            
        }else{
            
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
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
    <style type="text/css">
      /*  .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }*/
    </style>
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
                                <h1><?php echo $row['fname'];
                                ?></h1>
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
                    <li><a class="btn disabled" href="cellFinder.php?id=<?php echo $id?>">
                                Location Finder
                        </a></li>
                  
                   
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
                                <h1><?php echo $row['fname'];
                                echo ' ';
                                echo $row['lname'];
                                ?></h1>
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
        
       
            <!-- main bannar design starts here -->
    <section id="MainBanner">
        <div class="container no_padding">
            <h2>THE largest GSM asset location system in South Africa</h2>
            
        </div>
        <img width="100%" src="Images/sucess.jpg">
    </section>
    <!-- main bannar design ends here -->
    <!-- services section starts here -->
    <!--<section id="Services">
        <div class="container">
            <div class="row">
                <h2><span>openCAPTO™</span> GSM Positioning Solutions partners with the world's largest CELL ID & WiFi
                    Data Base
                    in the world with over 113 million Cell IDs from more than 1000 operators. Accurate Cell ID and
                    Wi-Fi positioning with world’s largest database. Complement or replace GPS in devices.</h2>

                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>113 million</h1>
                        <span>Cell ID's</span>
                    </div>
                    <p>Use Cell ID to locate any mobile device with a GSM/WCDMA/CDMA modem. We have more than 113
                        million Cell IDs from more than 1000 operators in our database.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>2930 million</h1>
                        <span>Wi-Fis</span>
                    </div>
                    <p>Use Wi-Fi for increased accuracy. A mobile device with Wi-Fi can be located in urban areas with
                        an accuracy for around 20 meters</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <div class="Circle">
                        <h1>95714 million</h1>
                        <span>Positions</span>
                    </div>
                    <p>Use our service to easily locate connected devices indoor and outdoor. Our global database of
                        Cell ID and Wi-Fi data provides the latitude and longitude of your device.</p>
                </div>
            </div>
        </div>
    </section>-->
    <!-- services section ends here -->
    <!-- footer starts here -->
    <footer>
        <p>Copyright © 2019-20 | Opencapto.io</p>
    </footer>
    <!-- footer ends here -->
        

   
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title" id="myModalLabel">Payment First</h4>
                </div>
                <div class="modal-body">
                    <form action="charge.php?id=<?php echo $id ?>" method="POST" id="payment-form">
                        <div class="form-row">
                            <label for="card-element" class=" col-form-label ">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display Element errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button class="btn MyButton " type="submit">Submit Payment</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
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
    <script>
        var stripe = Stripe('pk_test_T5AXnYAWQSypZOkdH68vgD8y0010oyGwce');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', { style: style });
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script> 
    
    </body>
</html>
<?php
}
?>
