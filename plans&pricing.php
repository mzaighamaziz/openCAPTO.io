<?php 
    // Start MySQL Connection
    include('connect.php'); 
    // $id=$_GET['id'];
    session_start();
    if(!$_SESSION['email']==true)
    {
        header('location:index.php');}
        $id=$_SESSION['id'];
        // echo $id;
        // die();
        $amount=5.00;

        $query=mysqli_query($con,"select * from payment where userid='$id'");
        $row=mysqli_fetch_array($query);
        if($row['amount']==300 &&  strtotime($row['date']) > strtotime('-30 days' )){
            

            ?>

<html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Plans & Pricing</title>
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
                                <h><?php echo $row['name']; ?></h1>
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
        <!-- pricing and plans section starts here -->
    <section id="Pricing">
        <div class="container no_padding">
            <div class="MainHeading">
                <h3>Price & Plans We Offer
                    <span></span></h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4">
                <div class="PriceTable">
                    <h1>STANDARD MEMBERSHIP </h1>
                    <h2><sup>R</sup>300</h2>
                    <span>Every Month</span>
                    <h3>For 100 locations searches per month Registered or Unregistered devices</h3>
                    <h5>For 100 locations searches per month Registered or Unregistered devices</h5>
                    <p>Valid for 1 Month</p>
                    
                   <a id="select" class="btn MyButton">Select</a>
                    <div class="PlanDetails">
                        <ul>
                            <li>Monitoring of Unregistered phones entering your property</li>
                            <li>Upto 4 Registered Mobile Phones per property</li>
                            <li>GSM Gateway Plus Installation</li>
                        </ul>
                    </div>
                </div>
            </div>
            
           
        </div>
    </section>
    <!-- pricing and plans section ends here -->
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
    <script>
          $('#select').click(function(){
        alert("You Have Already Done The Payment")
     
        });
    </script>
    </body>
    </html>
    <?php
        }else{
        ?>
        
        <html>

<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
    <title>Plans & Pricing</title>
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
        <!-- pricing and plans section starts here -->
    <section id="Pricing">
        <div class="container no_padding">
            <div class="MainHeading">
                <h3>Price & Plans We Offer
                    <span></span></h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <div class="PriceTable">
                    <h1>STANDARD MEMBERSHIP </h1>
                    <h2><sup>R</sup>300</h2>
                    <span>Every Month</span>
                    <h3>For 100 locations searches per month Registered or Unregistered devices</h3>
                    <h5>Perfect for small business users that needs to locate any device location  </h5>
                    <p>Valid for 1 Month</p>
                    <!-- button action -->
<?php

// Construct variables 
$cartTotal = 300;// This amount needs to be sourced from your application
$data = array(
    // Merchant details
    'merchant_id' => '14818386',
    'merchant_key' => 'c45pqvwa80ias',
    'return_url' => 'http://opencapto.io/Sucessfull.php',
    'cancel_url' => 'http://opencapto.io/cancelled.php',
    'notify_url' => 'http://opencapto.io/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> '',
    // Transaction details
    'm_payment_id' => '8542', //Unique payment ID to pass through to notify_url
    // Amount needs to be in ZAR
    // If multicurrency system its conversion has to be done before building this array
    'amount' => number_format( sprintf( "%.2f", $cartTotal ), 2, '.', '' ),
    'item_name' => 'Item Name',
    'item_description' => 'Item Description',
    'custom_int1' => '123', //custom integer to be passed through           
    'custom_str1' => $id
);        

// Create parameter string
$pfOutput = '';
foreach( $data as $key => $val )
{
    if(!empty($val))
     {
        $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
     }
}
// Remove last ampersand
$getString = substr( $pfOutput, 0, -1 );
//Uncomment the next line and add a passphrase if there is one set on the account 
//$passPhrase = '';
if( isset( $passPhrase ) )
{
    $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
}   
$data['signature'] = md5( $getString );



// If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
$testingMode = false;
$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">'; 
foreach($data as $name=> $value)
{ 
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />'; 
} 
$htmlForm .= '<input type="image"src="https://www.payfast.co.za/images/buttons/light-small-paynow.png" width="165" height="36" alt="Pay" title="Pay Now with PayFast"/></form>'; 
echo $htmlForm;


?>  
                    <!-- <a id="payment" href=""><img src="https://www.payfast.co.za/images/buttons/light-small-paynow.png" width="165" height="36" alt="Pay" title="Pay Now with PayFast" /></a> -->
                   
                   <!-- <a  data-toggle="modal" data-target="#largeModal" class="btn MyButton">Select</a>-->
                    <div class="PlanDetails">
                        <ul>
                            <li>Monitoring of Unregistered phones entering your property</li>
                            <li>Upto 4 Registered Mobile Phones per property</li>
                            <li>GSM Gateway Plus Installation</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <div class="PriceTable">
                    <h1>PAY PER USE  </h1>
                    <h2><sup>R</sup>60</h2>
                    <span>PER SEARCH</span>
                    
                    <h3>Perfect for home users that has a minimum of 4 registered devices  </h3>
                    
                    <p><br></p>
                    <br>
<?php

// Construct variables 
$cartTotal = 60;// This amount needs to be sourced from your application
$data = array(
    // Merchant details
    'merchant_id' => '14818386',
    'merchant_key' => 'c45pqvwa80ias',
    'return_url' => 'http://opencapto.io/Sucessfull.php',
    'cancel_url' => 'http://opencapto.io/cancelled.php',
    'notify_url' => 'http://opencapto.io/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> '',
    // Transaction details
    'm_payment_id' => '8542', //Unique payment ID to pass through to notify_url
    // Amount needs to be in ZAR
    // If multicurrency system its conversion has to be done before building this array
    'amount' => number_format( sprintf( "%.2f", $cartTotal ), 2, '.', '' ),
    'item_name' => 'Item Name',
    'item_description' => 'Item Description',
    'custom_int1' => '123', //custom integer to be passed through           
    'custom_str1' => $id
);        

// Create parameter string
$pfOutput = '';
foreach( $data as $key => $val )
{
    if(!empty($val))
     {
        $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
     }
}
// Remove last ampersand
$getString = substr( $pfOutput, 0, -1 );
//Uncomment the next line and add a passphrase if there is one set on the account 
//$passPhrase = '';
if( isset( $passPhrase ) )
{
    $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
}   
$data['signature'] = md5( $getString );



// If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
$testingMode = false;
$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">'; 
foreach($data as $name=> $value)
{ 
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />'; 
} 
$htmlForm .= '<input type="image"src="https://www.payfast.co.za/images/buttons/light-small-paynow.png" width="165" height="36" alt="Pay" title="Pay Now with PayFast"/></form>'; 
echo $htmlForm;


?>
                   
                   <!-- <a  data-toggle="modal" data-target="#largeModal" class="btn MyButton">Select</a>-->
                   <br>
                    <br>  
                    <div class="PlanDetails">
                        <ul>
                            <li>Monitoring of Unregistered phones entering your property</li>
                            <li>Upto 4 Registered Mobile Phones per property</li>
                            <li>GSM Gateway Plus Installation</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <div class="PriceTable">
                    <h1>ENTERPRICE - SOLUTION BASED ON QUOTE  </h1>
                   <br>
                   <br>
                   <br>
                  
                    <h2><sup></sup></h2>
                    <h3>Please contact us at info@neuralroboticssa.com for a quote   </h3>
                    
                   <h3>For Unlimited locations searches per month Registered or Unregistered devices</h3>
                      
                   
                   
                   <!-- <a  data-toggle="modal" data-target="#largeModal" class="btn MyButton">Select</a>-->
                   <br>
                   <br>
                   
                    <div class="PlanDetails">
                        <ul>
                            <li>Monitoring of Unregistered phones entering your property</li>
                            <li>Upto 4 Registered Mobile Phones per property</li>
                            <li>GSM Gateway Plus Installation</li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
           
            
        </div>
    </section>
    <!-- pricing and plans section ends here -->
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
                    <form action="charge.php?id=<?php echo $id ?>& amount=<?php echo "3000"?>" method="POST" id="payment-form">
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
    <div class="modal fade" id="Model" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                    <h4 class="modal-title" id="myModalLabel">Payment First</h4>
                </div>
                <div class="modal-body">
                    <form action="charge.php?id=<?php echo $id ?>& amount=<?php echo "5000"?>" method="POST" id="payment-form">
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
    <script>
        
         $('#payment').click(function(){
             var id="<?php echo $id?>";
             alert(id)
           $.ajax({
              url:'Sucessfull.php',
              data:{user:id},
              success:function(data){
                //alert(data)
                }
           });
        });
    </script>
     <script src="https://js.stripe.com/v3/"></script>
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