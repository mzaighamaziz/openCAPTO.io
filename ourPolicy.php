<?php 
    // Start MySQL Connection
    include('connect.php'); 
    session_start();
    if(!$_SESSION['email']==true)
    {
        header('location:index.php');}
        $id=$_GET['id'];

        $_SESSION['id']=$id;
        $query=mysqli_query($con,"select * from payment where userid='$id'");
        $row=mysqli_fetch_array($query);
        if($row['amount']==3000 &&  strtotime($row['date']) > strtotime('-30 days')){
            

            
?>
<html>
<html lang="en">
<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Our Policy</title>
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
    <section id="ourPolicy" >
        <div class="container no_padding">
            <h1><span>open<span>CAPTO</span><sup>TM</sup> </span>Practices</h1>
            <h4>OPENCAPTO UPHOLDS STRICT PRIVACY AND SECURITY STANDARDS IN ALL OF OUR INFORMATION HANDLING PRACTICES:</h4>
            <ul>
                <li>Our contracts include confidentiality provisions that prohibit us from disclosing the confidential information of our customers, except under certain narrowly defined circumstances, such as when legally required.</li>
                <li>Every OPENCAPTO employee must follow our code of conduct, sign confidentiality agreements, and follow our information security policies.</li>
                <li>OPENCAPTO regularly talks with our personnel about the importance of safeguarding our customers' confidential information.</li>
                <li>OPENCAPTO trains all new personnel on confidentiality, privacy, and information security.</li>
                <li>OPENCAPTO strongly encourages all our customers to adopt industry-standard protocol to secure and protect their information, data, login credentials, networks, servers, and computers from security attacks.</li>
            </ul>
            <h4>
OPENCAPTO MAINTAINS A MULTITUDE OF TECHNICAL MEASURES TO PROTECT OUR CUSTOMERS:</h4>
            <h5>FEATURES THAT PROTECT CUSTOMER DATA:</h5>
            <ul>
                <li>Connection to the OPENCAPTO system is via secure socket layer/transport layer security (SSL/TLS), ensuring a secure connection. Individual user sessions are uniquely identified and re-verified with every transaction.</li>
                <li>Whenever a record or transaction is carried out, application logs record the creator, last updater, timestamps, and originating IP address.</li>
            </ul>
            <h5>LOGICAL SEPARATION OF CUSTOMER DATA:</h5>
            <ul>
                <li>Hardware and software configurations and multitenant security controls separate customer data so that each customer can view only its own information and data. When connected to the system on the Cloud, the customer is not aware of anyone else using the system and cannot access anyone else's data.</li>
                <li>The OPENCAPTO system supports delegated authentication.</li>
                
            </ul>
            <h5>NETWORK SECURITY MEASURES:</h5>
            <ul>
                <li>Enterprise-Grade Web Application Firewall (WAF) - defends against OWASP Top 10 threats including: SQL injection, cross-site scripting, illegal resource access, and remote file inclusion</li>
                <li>dvanced Bot Protection - distinguishes between "good" and "bad" bot traffic</li>
                <li>Backdoor Protection - prevent backdoor install attempts and to quarantine backdoors already installed, rendering them useless</li>
                <li>Health Monitoring and One-click Two Factor Authentication - manage and control multiple logins across several websites in a centralized manner</li>
                <li>Granular Website Access Control - prevent access from unwanted visitors (e.g., countries, specific bots, URLs, IPs), while enabling uninterrupted access to legitimate visitors (customers, leading search engines, etc.)</li>
                <li>APT Protection - protection from Advanced Persistent Threats that try to steal intellectual property and sabotage business-critical production environments</li>
            </ul>
            <h5>REDUNDANCY AND SCALABILITY:</h5>
            <ul>
                <li>Customer information can be backed up to local media sources in the customer's possession if required.</li>
                <li>All customer data is stored in secure data centers and is replicated over secure links to a disaster recovery data center allowing us to rapidly restore the OPENCAPTO system in the case of a catastrophic loss.</li>
                <li>The OPENCAPTO system is highly scalable and redundant, allowing for fluctuation in demand and expansion of users and integrated systems while greatly reducing the threat of long-term outages. Load-balanced networks, pools of application servers, and clustered databases are features of our design.</li>
            </ul>
            <h5>OPENCAPTO SOFTWARE SOLUTIONS INCLUDE PRIVACY AND SECURITY SETTINGS FOR CUSTOMER PEACE OF MIND:</h5>
            <ul>
                <li>Customers can assign their users to groups and designate access permissions for different categories of data.</li>
                <li>Passwords are set to expire periodically and need to be changed to help maintain password security.</li>
                <li>Administrator permission is required to approve any new mobile application user accounts within an organization.</li>
                <li>According to customer requests, certain information can be encrypted in the database to further protect it from misuse.</li>
            </ul>
        </div>
    </section>
    
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
    <html>
<html lang="en">
<head>
     <link rel="icon" href="Images/Favicon.png" type="image/x-icon">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Our Policy</title>
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
    <section id="ourPolicy" >
        <div class="container no_padding">
            <h1><span>open<span>CAPTO</span><sup>TM</sup> </span>Practices</h1>
            <h4>OPENCAPTO UPHOLDS STRICT PRIVACY AND SECURITY STANDARDS IN ALL OF OUR INFORMATION HANDLING PRACTICES:</h4>
            <ul>
                <li>Our contracts include confidentiality provisions that prohibit us from disclosing the confidential information of our customers, except under certain narrowly defined circumstances, such as when legally required.</li>
                <li>Every OPENCAPTO employee must follow our code of conduct, sign confidentiality agreements, and follow our information security policies.</li>
                <li>OPENCAPTO regularly talks with our personnel about the importance of safeguarding our customers' confidential information.</li>
                <li>OPENCAPTO trains all new personnel on confidentiality, privacy, and information security.</li>
                <li>OPENCAPTO strongly encourages all our customers to adopt industry-standard protocol to secure and protect their information, data, login credentials, networks, servers, and computers from security attacks.</li>
            </ul>
            <h4>
OPENCAPTO MAINTAINS A MULTITUDE OF TECHNICAL MEASURES TO PROTECT OUR CUSTOMERS:</h4>
            <h5>FEATURES THAT PROTECT CUSTOMER DATA:</h5>
            <ul>
                <li>Connection to the OPENCAPTO system is via secure socket layer/transport layer security (SSL/TLS), ensuring a secure connection. Individual user sessions are uniquely identified and re-verified with every transaction.</li>
                <li>Whenever a record or transaction is carried out, application logs record the creator, last updater, timestamps, and originating IP address.</li>
            </ul>
            <h5>LOGICAL SEPARATION OF CUSTOMER DATA:</h5>
            <ul>
                <li>Hardware and software configurations and multitenant security controls separate customer data so that each customer can view only its own information and data. When connected to the system on the Cloud, the customer is not aware of anyone else using the system and cannot access anyone else's data.</li>
                <li>The OPENCAPTO system supports delegated authentication.</li>
                
            </ul>
            <h5>NETWORK SECURITY MEASURES:</h5>
            <ul>
                <li>Enterprise-Grade Web Application Firewall (WAF) - defends against OWASP Top 10 threats including: SQL injection, cross-site scripting, illegal resource access, and remote file inclusion</li>
                <li>dvanced Bot Protection - distinguishes between "good" and "bad" bot traffic</li>
                <li>Backdoor Protection - prevent backdoor install attempts and to quarantine backdoors already installed, rendering them useless</li>
                <li>Health Monitoring and One-click Two Factor Authentication - manage and control multiple logins across several websites in a centralized manner</li>
                <li>Granular Website Access Control - prevent access from unwanted visitors (e.g., countries, specific bots, URLs, IPs), while enabling uninterrupted access to legitimate visitors (customers, leading search engines, etc.)</li>
                <li>APT Protection - protection from Advanced Persistent Threats that try to steal intellectual property and sabotage business-critical production environments</li>
            </ul>
            <h5>REDUNDANCY AND SCALABILITY:</h5>
            <ul>
                <li>Customer information can be backed up to local media sources in the customer's possession if required.</li>
                <li>All customer data is stored in secure data centers and is replicated over secure links to a disaster recovery data center allowing us to rapidly restore the OPENCAPTO system in the case of a catastrophic loss.</li>
                <li>The OPENCAPTO system is highly scalable and redundant, allowing for fluctuation in demand and expansion of users and integrated systems while greatly reducing the threat of long-term outages. Load-balanced networks, pools of application servers, and clustered databases are features of our design.</li>
            </ul>
            <h5>OPENCAPTO SOFTWARE SOLUTIONS INCLUDE PRIVACY AND SECURITY SETTINGS FOR CUSTOMER PEACE OF MIND:</h5>
            <ul>
                <li>Customers can assign their users to groups and designate access permissions for different categories of data.</li>
                <li>Passwords are set to expire periodically and need to be changed to help maintain password security.</li>
                <li>Administrator permission is required to approve any new mobile application user accounts within an organization.</li>
                <li>According to customer requests, certain information can be encrypted in the database to further protect it from misuse.</li>
            </ul>
        </div>
    </section>
    
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
    
    
}
?>
