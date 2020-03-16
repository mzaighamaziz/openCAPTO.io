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
	<title>Our Statement</title>
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
            <h1>Our Statement</h1>
             <ol>
                <li>Personal data we collect<ol>
                        <li>Your privacy is important to us. This privacy statement explains what personal data
                            OpenCAPTO collects from you, through our interactions with you and through our product and
                            related services, and how we use that data.</li>
                        <li>OpenCAPTO offers a wide range of services as part of its product, from the main software
                            (OpenCAPTO GSM Device Location, Asset Manager, OpenCAPTO RTLS, C&amp;C PSIM – Control &amp;
                            Command, Physical security information management) to 45 different modules.<ol>
                                <li>This statement applies to OpenCAPTO interactions with you and the OpenCAPTO Asset
                                    Manager, C&amp;C, PSIM different modules listed below:<ol>
                                        <li>Asset or person Location &amp; Analytics</li>
                                        <li>GSM SDR RADIOS or Gateways </li>
                                        <li>GSM Mobile devices </li>
                                        <li>BLE Gateways</li>
                                        <li>Software Applications (Cloud &amp; On Prem)</li>
                                        <li>CCTV, Video analytics</li>
                                        <li>Intrusion, Access control, Fire alarm</li>
                                        <li>LPR, Perimeter, Radars</li>
                                        <li>Communications</li>
                                        <li>GSM and Wi-Fi Location based devices</li>
                                        <li>Cyber and Network alerts</li>
                                        <li>Social media and open source intelligence</li>
                                        <li>Organizational systems and ERP</li>
                                        <li>Live video transmission from the mobile app</li>
                                        <li>Incident management and log system</li>
                                        <li>Security operations system</li>
                                        <li>Route management system</li>
                                        <li>Visitors, suppliers and contract employee’s management system</li>
                                        <li>Asset management system</li>
                                        <li>Building management and maintenance operations system</li>
                                        <li>Safety management system</li>
                                        <li>Weapons management system</li>
                                        <li>SIEM - security information and event management for cyberattack alerts</li>
                                    </ol>
                                </li>
                                <li>This statement applies to OpenCAPTO interactions with you and the OpenCAPTO App
                                    different modules listed below:<ol>
                                        <li>Distress button</li>
                                        <li>Gyro Mode “man down”</li>
                                        <li>Location transmission and GPS positioning</li>
                                        <li>Encrypted communication system</li>
                                        <li>Receiving incidents and dispatch</li>
                                        <li>Incident log and manual incident reporting</li>
                                        <li>Inspection reporting and form generator</li>
                                        <li>Patrol and route module and navigation</li>
                                        <li>View force location on GIS</li>
                                        <li>Receiving forms/documents</li>
                                        <li>Task management</li>
                                        <li>Time &amp; attendance reporting</li>
                                        <li>Bar-code scanning system</li>
                                        <li>Visitor/Supplier invitation module</li>
                                        <li>Vehicle license plate verification</li>
                                        <li>Access control system</li>
                                        <li>Organization phonebook</li>
                                        <li>Places near me</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>OpenCAPTO&nbsp;IoT Platform also obtaining data from third parties and/ or IoT devices –
                            Sensors. We protect data obtained from third parties according to the practices described in
                            this statement, plus any additional restrictions imposed by the source of the data. These
                            third-party sources vary over time, but have included:<ol>
                                <li>Data brokers, Data Aggregators from which we obtain from client sites or the
                                    purchasing of data to supplement the data we collect.</li>
                                <li>Social networks when you grant permission to OpenCAPTO services to access your data
                                    on one or more networks.</li>
                                <li>Service providers that help us determine your location, based on your IP address or
                                    GPS data, to customize certain services to you.</li>
                                <li>Customer service providers that supplement the data we collect by means of
                                    integration and/ or IoT.</li>
                                <li>Partners with which we offer co-branded services or engage in joint activities.</li>
                                <li>Publicly available sources such as open government databases or other data in the
                                    public domain.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            <p>You have choices about the data we collect. When you are asked to provide personal data, you may decline.
                But if you choose not to provide data that is necessary to provide a service or feature, you may not be
                able to use that service or feature.</p>
            <ol>
                <li>The data we collect depends on the context of your interactions with OpenCAPTO, the choices you
                    make, including your privacy settings, and the products and features you use. The data we collect
                    can include the following:<ol>
                        <li>Personal &amp; contact data:&nbsp;We collect passport picture or face photo, first and last
                            name, email address, postal address, phone number, ID number, passport number, date of
                            birth, profession, car plate, social media account details, and other similar contact data.
                        </li>
                        <li>Employment data:&nbsp;We collect profession, occupation, working address and building/
                            campus, employee ID, personal manager, training, personal working equipment, location,
                            weapon and other sensitive security equipment details, system messages and event tracking,
                            and other similar contact data</li>
                        <li>Medical data:&nbsp;medical history, blood type, allergies, medication, medical documents,
                            emergency contact data, and other similar medical data.</li>
                        <li>Media data:&nbsp;video, stills picture, audio recording, and other similar media data. Your
                            image may be captured by security cameras.</li>
                        <li>Biometric data:&nbsp;face recognition, fingerprint, retinal imprint, and other similar
                            biometric data.</li>
                        <li>Credentials.&nbsp;We collect passwords, password hints, and similar security information
                            used for authentication and account access.</li>
                        <li>Demographic data.&nbsp;We collect data about you such as your age, gender, country, and
                            preferred language.</li>
                        <li>Payment data.&nbsp;We collect data necessary to process your payment if you make purchases,
                            such as your payment instrument number (such as a credit card number), and the security code
                            associated with your payment instrument, bank account details.</li>
                        <li>Device and Usage data.&nbsp;We collect data about your device and how you and your device
                            interact with OpenCAPTO and our products. For example, we collect:<ul
                                style="list-style-type:square">
                                <li>Product use data. We collect data about the OpenCAPTO system related features you
                                    use. This data includes which application version is installed on your device, is it
                                    runs in the background, are you online.</li>
                                <li>Device, connectivity and configuration data. We collect data about your device and
                                    the network you use to connect to our services. It includes data about the operating
                                    systems. It also includes device type and manufacturer, identifiers (such as the
                                    IMEI number for phones, RTLS Locators), regional and language settings, battery
                                    state, IP address, online connectivity, last date of connectivity, GIS location,
                                    device positioning (balanced or vertical)</li>
                                <li>Error reports and performance data. We collect data about the performance of the
                                    services and any problems you experience with them. This data helps us to diagnose
                                    problems in the service you use, and to improve our products and provide solutions.
                                    Error reports (sometimes called “crash dumps”) can include data such as the type or
                                    severity of the problem, details of the software or hardware related to an error,
                                    contents of files you were using when an error occurred, and data about other
                                    software on your device.</li>
                                <li>Troubleshooting and Help Data. When you engage OpenCAPTO for troubleshooting and
                                    help, we collect data about you and your hardware, software, and other details
                                    related to the incident. Such data includes contact or authentication data, the
                                    content of your chats and other communications with OpenCAPTO, data about the
                                    condition of the machine and the application when the fault occurred and during
                                    diagnostics, and system and registry data about software installations and hardware
                                    configurations.</li>
                            </ul>
                        </li>
                        <li>Location data.&nbsp;For services with location-enhanced features, we collect data about your
                            location, which can be either precise or imprecise. Precise location data can be Global
                            Navigation Satellite System (GNSS) data (e.g., GPS), as well as data identifying nearby cell
                            towers and Wi-Fi hotspots, we collect when you enable location-based products or features.
                            Imprecise location data includes, for example, a location derived from your IP address or
                            data that indicates where you are located with less precision, such as at a city or postal
                            code level.</li>
                        <li>Content.&nbsp;We collect content of your OpenCAPTO system related communication when
                            necessary to provide you with the services you use. Such data can include:<ul
                                style="list-style-type:square">
                                <li>Files</li>
                                <li>Stills pictures</li>
                                <li>Text or other content of a push or email message</li>
                                <li>Audio and video recording of a video message</li>
                                <li>Audio recording and transcript of a voice message you receive or a text message you
                                    dictate</li>
                            </ul>
                        </li>
                        <li>Traceability changes:&nbsp;We collect all logs traceability changes of your user. Such data
                            can include: date, time, IP address, location, data changes (old and new) etc.</li>
                        <li>Customer service:&nbsp;We also collect information you provide to us and the content of
                            messages you send to us, such as service request, feedback and product reviews you write, or
                            questions and information you provide for customer support. When you contact us, such as for
                            customer support, phone conversations or chat sessions with our representatives may be
                            monitored and recorded.</li>
                    </ol>
                </li>
            </ol>
            <p>Product-specific sections below describe data collection practices applicable to use of those products.
            </p>
            <ol>
                <li>Why we collect the data<ol>
                        <li>OpenCAPTO uses the data we collect for a basic purpose: To operate our business and provide
                            the services we offer (including improving and personalizing).</li>
                        <li>In carrying out these purposes, we combine and fuses data we collect to give our customer a
                            simple and more seamless, consistent and personalized data view. We have built in
                            technological and procedural safeguards designed to prevent certain data combinations and
                            leakage.</li>
                        <li>Providing and improving our products and services:&nbsp;We use data to provide and improve
                            the products and services we offer and perform essential business operations. This includes
                            operating the products, maintaining and improving the performance of the products,
                            developing new features, conducting research, and providing customer support. Examples of
                            such uses include the following:<ul style="list-style-type:square">
                                <li>Providing the Products.&nbsp;We use data to carry out your transactions with us and
                                    to provide our services to you. Often, those services include personal and
                                    personalized features and data as describe in paragraph 1.</li>
                                <li>Customer support.&nbsp;We use data to diagnose product and services problems and
                                    provide other customer care and support services.</li>
                                <li>Product activation.&nbsp;We use data—such as device and application type, location,
                                    and unique device, application, network and subscription identifiers—to activate
                                    software and devices that require activation.</li>
                                <li>Product Improvement.&nbsp;We use data to continually improve our product and
                                    services, including adding new features or capabilities. For example, we use error
                                    reports to improve security features.</li>
                                <li>Security, Safety and Dispute Resolution.&nbsp;We use data to protect the security
                                    and safety of our services related product, our customers and users, to detect and
                                    prevent fraud, fishing, identity theft, data leakage, to confirm the validity of
                                    software licenses, to resolve disputes and enforce our agreements. Our security
                                    services features can disrupt the operation of malicious software and notify you if
                                    malicious software is found on your devices or systems.</li>
                                <li>Business Operations.&nbsp;We use data to develop aggregate analysis and business
                                    intelligence which enable us and our customers to operate, protect, make informed
                                    decisions, and report on the performance of the business.</li>
                                <li>Automated decision-making and profiling.&nbsp;We use data from different data
                                    sources of our system to fuses together to streamline the situational awareness and
                                    response of our customers. However, any final decision-making needs human approval.
                                    Please notice automated decision-making and profiling are subject to our customer’s
                                    systems definitions. If you are end user of the systems and you have complaints
                                    regarding this feature you should contact your organization.</li>
                            </ul>
                        </li>
                        <li>Communications.&nbsp;We use data we collect to communicate with our customers. We may
                            contact our customer by phone, email or other means to inform, when a subscription is
                            ending, discuss licensing account, let you know when software updates are available, update
                            or inquire about a service or repair request, invite to participate in a survey, or remind
                            you to act to keep your account active.</li>
                        <li>Advertising.&nbsp;OpenCAPTO does not advertise and does not use any data to target ads to
                            you or any of the end users.</li>
                        <li>Data Retention.&nbsp;In the interests of the customer, we retain data according to our
                            retention policy and as necessary or required by the applicable laws &amp; regulations.
                            Nevertheless, some data such as TMP files are regularly deleted.</li>
                        <li>Data Archives.&nbsp;In the interests of the customer, we archive data every 30 days.
                            Retrieval of archived data can be performed by OpenCAPTO only when our customer has
                            requested or authorized us to do so. In such cases, only the specific and relevant data in
                            the request will be retrieved.</li>
                        <li>Data Sharing.&nbsp;In some cases, we share controlled data with third party services to
                            provide our customer the agreed services. Such cases are pre-defined by contract with our
                            customer. Any related data transection is securely controlled by different means of cyber
                            security methods and or according to EEA Countries adequate levels.</li>
                        <li>Data Collected by Other services.&nbsp;OpenCAPTO system are integrated with various
                            third-party services. Such services can include: IoT devices, beacons, cyber security
                            systems, biometric systems, CCTV systems etc. The data is used for the functionality of the
                            services to our customer as defined in the contract.</li>
                    </ol>
                </li>
                <li>Reasons we share personal data<ol>
                        <li>We share personal data with our customer or as necessary to provide any service our customer
                            has requested or authorized. For example, we share your content with third parties when you
                            tell us to do so, such as when a certain service need to be process by third party or when
                            you provide payment data, we will share payment data with banks and other entities that
                            process payment transactions or provide other financial services, and for fraud prevention
                            and credit risk reduction.</li>
                        <li>We may need to share personal data among our cloud service. For example, to provide customer
                            service support or assist in protecting and securing our systems and services the cloud
                            service admin may need access to personal data to provide those functions. In such cases,
                            the cloud service supplier must abide by our data privacy and security requirements and are
                            not allowed to use personal data they receive from us for any other purpose.</li>
                        <li>We may need to share some personal data among our development and customer service team. For
                            example, to provide customer service and support or assist in protecting and securing our
                            systems and services our development and customer service team may have access to personal
                            data. In such cases, our personnel must abide by our data privacy and security requirements
                            and policy and are not allowed to use personal data for any other purpose.</li>
                        <li>We will access, transfer, disclose, and preserve personal data, including your content when
                            we have a good faith belief that doing so is necessary to:<ol>
                                <li>comply with applicable law or respond to valid legal process, including from law
                                    enforcement or other government agencies; or</li>
                                <li>protect our customers, for example to prevent spam or attempts to defraud you or
                                    users of our product and services, or to help prevent the loss of life or serious
                                    injury of anyone; or</li>
                                <li>operate and maintain the security of our product and services, including to prevent
                                    or stop an attack on our computer systems or networks or data base; or</li>
                                <li>protect the rights or property of OpenCAPTO, including enforcing the terms governing
                                    the use of the services. however, if we receive information indicating that someone
                                    is using our services to traffic in stolen intellectual or physical property,
                                    including stealing of OpenCAPTO data, we will not inspect a customer's private
                                    content ourselves, but we may refer the matter to law enforcement.</li>
                            </ol>
                        </li>
                        <li>Please note that:<ol>
                                <li>If you are an end user of OpenCAPTO customer, your data is governed by its privacy
                                    statements. However, OpenCAPTO will enforce this privacy statement and its privacy
                                    policy on all customer, users and data as far as it depends on it.</li>
                                <li>Some of our products include links to products of third parties whose privacy
                                    practices differ from OpenCAPTO. If you provide personal data to any of those
                                    products, your data is governed by their privacy statements.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>How to access &amp; control your personal data:<ol>
                        <li>You can view, edit, or delete your personal data online depend on which products you use.
                            For example:<ol>
                                <li>OpenCAPTO Asset manager, C &amp; C, PSIM</li>
                                <li>Invite module</li>
                                <li>OpenCAPTO app for mobile devices</li>
                            </ol>
                        </li>
                        <li>If you are an end user of OpenCAPTO customer you can view, edit, or delete only some of your
                            personal data. All your data is controlled and governed by OpenCAPTO customer privacy
                            statements.</li>
                        <li>If you cannot access certain personal data collected by OpenCAPTO system directly through
                            the OpenCAPTO service you use, you can always contact OpenCAPTO customer support, we will
                            respond to requests to access or delete your personal data within 30 days.</li>
                        <li>If you are using OpenCAPTO app for mobile devices you can choose to block the GPS location
                            service when installing the app (simply do not approve the service).</li>
                        <li>Browser-Based Controls<ol>
                                <li>OpenCAPTO uses cookies (small text files placed on your device) and similar
                                    technologies to provide our websites and online services and to help collect data.
                                    The text in a cookie often consists of a string of numbers and letters that uniquely
                                    identifies your computer, but it can contain other information as well.</li>
                            </ol>
                        </li>
                        <li>Our Use of Cookies and Similar Technologies<ol>
                                <li>Sign-in and Authentication.&nbsp;When you sign into OpenCAPTO system website, we
                                    store a unique ID number, and the time you signed in, in an encrypted cookie on your
                                    device. This cookie allows you to move from page to page within the site without
                                    having to sign in again on each page. You can also save your sign-in information, so
                                    you do not have to sign in each time you return to the site.</li>
                                <li>Security.&nbsp;We use cookies to detect fraud and abuse of our websites and
                                    services.</li>
                                <li>User Preferences.&nbsp;We use local storage to save user preferences such as user
                                    preferred language and session details</li>
                            </ol>
                        </li>
                        <li>How to control cookies:<ol>
                                <li>Most web browsers automatically accept cookies but provide controls that allow you
                                    to block or delete them. Instructions for blocking or deleting cookies in all
                                    browsers may be available in each browser's privacy or help documentation.</li>
                                <li>Certain features of OpenCAPTO system depend on cookies and similar technologies.
                                    Please be aware that if you choose to block them, you may not be able to sign in or
                                    use those features, and preferences that are dependent on cookies may be lost. If
                                    you choose to delete cookies, settings and preferences controlled by those cookies,
                                    will be deleted and may need to be recreated.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Security of personal data:<ol>
                        <li>OpenCAPTO is committed to protecting the security of any personal data on its database. We
                            use a variety of security technologies and procedures to help protect all personal data from
                            unauthorized access, use or disclosure.</li>
                    </ol>
                </li>
                <li>Where we store and process personal data<ol>
                        <li>Personal data collected by OpenCAPTO services may be stored and processed in your region, or
                            in any other country where OpenCAPTO maintain facilities.</li>
                        <li>OpenCAPTO stores all data collected by its services on Microsoft AZURE cloud services or our
                            OpenCAPTO Cloud Servers which maintain major data centers in Australia, Austria, Brazil,
                            Canada, Finland, France, Germany, Hong Kong, India, Ireland, Japan, Korea, Malaysia, the
                            Netherlands, Singapore, the United Kingdom and the United States.</li>
                        <li>For Microsoft Azure Privacy policy and AWS and TOU please refer to&nbsp;&nbsp;OpenCAPTO
                            primary database storage location is in South Africa and the backup location is in Europe.
                            The storage location(s) are chosen to operate efficiently, to improve performance, and to
                            create redundancies that will protect the data in the event of an outage or other problem.
                        </li>
                        <li>OpenCAPTO take steps to ensure that the data we collect under this privacy statement is
                            processed according to the provisions of this statement and the requirements of the EU GDPR
                            and the requirements applicable law wherever the data is located.</li>
                        <li>OpenCAPTO transfers personal data from the European Economic Area and Switzerland to other
                            countries, some of which have not been determined by the European Commission to have an
                            adequate level of data protection. When we do, we use a variety of cyber security procedures
                            and legal mechanisms, including contracts, to help ensure your rights and protections of
                            your data.</li>
                        <li>If there is any conflict between the terms in this privacy statement and the EU GDPR
                            principles, the EU GDPR principles shall govern.</li>
                        <li>If you have a question or complaint related to this privacy statement, our privacy policy,
                            our way of data processing, storage or managing we encourage you to contact our DPO at&nbsp;
                        </li>
                        <li>For any complaints related to the privacy matter that cannot be resolved with OpenCAPTO
                            directly, we have chosen to cooperate with the relevant data protection authority, or a
                            panel established by the European DPAs for resolving disputes. Please contact us to be
                            directed to the relevant DPA contacts.</li>
                        <li>OpenCAPTO is subject to the investigatory and enforcement powers of The Privacy Protection
                            Authority in Israel.</li>
                    </ol>
                </li>
                <li>Our retention of personal data:<ol>
                        <li>OpenCAPTO retains personal data for as long as necessary to provide the required services
                            and fulfill the transactions you have requested, or for other essential purposes such as
                            complying with our legal obligations, resolving disputes, and enforcing our agreements.</li>
                        <li>Some personal data can be deleted at any time by the customer or the end user. However,
                            OpenCAPTO is obligated to maintain logs to enable the traceability of changes for as long as
                            necessary. Such logs may include the following data:<ol>
                                <li>Who made the changes</li>
                                <li>Date and time</li>
                                <li>IP address</li>
                                <li>The original data which has changed</li>
                                <li>The new data that replaced the old one</li>
                            </ol>
                        </li>
                        <li>The right to be forgotten<ol>
                                <li>At the end of a contract period and its related services:<ol>
                                        <li>OpenCAPTO provides a reversibility options, including data retrieval, until
                                            the customer confirms that the data is no longer required.</li>
                                        <li>The customer has the right to receive all related data, which may include:
                                            all data, personal data, logs, traceability changes records, backups etc.
                                        </li>
                                        <li>should the customer confirm that the data is no longer required, the
                                            customer environment will be cleared, if legally permitted, and all
                                            information relating to the customer will be deleted according to our
                                            retention policy. However, in some jurisdictions, some customer related data
                                            may be retained by OpenCAPTO as required by law.</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Collection of data from and about children:<ol>
                        <li>OpenCAPTO official policy is not to collect any data from and/ or children under age 18.
                            However, some services need to collect such data. Those services may include:<ol>
                                <li>Medical modules, for example to be able to supply a safe medical treatment.</li>
                                <li>Security modules, for example when there is a security incident and data are being
                                    collected form the incident area, or when necessary in order to supply the
                                    contracted services, such as panic button.</li>
                                <li>Please be aware that according to GDPR any data collection of children under the age
                                    of 16 should be by parental consent or legal guardian only. If you are a child under
                                    the age of 16 or you are not the child parent or legal guardian, we are assuming
                                    that you got parental or legal guardian consent to collect the data by our system.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Please notice: If you are suspicious that data about children are being collected without the parent
                    or legal guardian consent please contact our DPO ASAP at:&nbsp;</li>
                <li>Notice to end user:<ol>
                        <li>OpenCAPTO Asset Locator, C&amp;C, PSIM with it satellite services are intended for use by
                            organizations and are administered to you by your organization. In addition to this privacy
                            statement, your use of OpenCAPTO services may be subject to your organization's policies, if
                            any. If your organization is administering your use of the OpenCAPTO services, please direct
                            your privacy inquiries to your administrator. OpenCAPTO is not responsible for the privacy
                            or security practices of our customers, which may differ from those set forth in this
                            privacy statement.</li>
                    </ol>
                </li>
                <li>Changes to This Privacy Statement:<ol>
                        <li>OpenCAPTO will update this privacy statement when necessary to reflect customer feedback and
                            changes in our products and its related services. When we post changes to this statement, we
                            will revise the "last updated" date at the top of the statement and describe the changes in
                            the traceability of changes table. If there are material changes to the statement or in how
                            OpenCAPTO will use your personal data, we will notify you either by release note or by
                            directly sending you a notification. We encourage you to periodically review this privacy
                            statement to learn how OpenCAPTO is protecting your information.</li>
                    </ol>
                </li>
            </ol>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <h2>TERMS OF USE </h2>
            <h2><br></h2>
            <h2>Terms of Use OF THE openCAPTO SYSTEMS OR MOBILE APP APPLICATION</h2>
            <h2>&#8203;</h2>
            <p>Prior to completing the download and installation of the OPENCAPTO Application’s (“App”) please read
                carefully the terms of use listed below (“Terms of Use”). It is hereby clarified that by registering to
                the App and/or accepting these Terms of Use and/or by starting to use the App you declare that you are
                aware of the Terms of Use and express your explicit consent to the following Terms of Use:</p>
            <ol>
                <li>&nbsp;The "OPENCAPTO" service is an Mobile App &amp; Web service provided by Neural Robotics (Pty)
                    Ltd. (the "Company"). The App makes use of the cellular device location, as it is registered on the
                    global GSM positioning system (GSM-GPS™) and transmitted over the cellular network to the Company's
                    systems, and transfers through the device to the Company's systems, including through the camera and
                    microphone. This App is designed for smart cellular devices with an Apple and Android operating
                    system only.</li>
                <li>&nbsp;The Terms of Use detailed herein are a binding agreement between you and the Company. Your
                    registration to and/or usage of the App indicates your full acceptance of all terms and declarations
                    detailed below. If you do not agree to these terms, wholly or partially, you should not commence (or
                    continue) using the App.</li>
                <li>&nbsp;The Company may amend these Terms of Use at any time, at its sole discretion, by giving a 30
                    days prior notice. During this period, you are entitled to decide that you do not agree to such
                    amendment, in which event you may not continue use of the App. Your continued use of the App
                    following the expiration of said period shall indicate your consent to such amendment. All
                    information provided by you or collected by the Company in connection with the Services is governed
                    by the Company’s Privacy Policy, a copy of which is located at&nbsp;<a
                        data-cke-saved-href="https://www.opencapto.io/terms-of-use"
                        href="https://www.opencapto.io/terms-of-use">https://www.opencapto.io/terms-of-use</a>, which is
                    hereby incorporated by reference into these Terms. The Company strongly recommends that you review
                    the Privacy Policy closely. You should take care to protect private information or information that
                    is important to you. Please be aware that if you decide to disclose personally identifiable
                    information on the Services, this information may become public. The Company does not control and
                    shall not be responsible for the acts of you or any other users of the Services.</li>
                <li>&nbsp;The Company grants you a non-exclusive, non-transferable, non-assignable, and time-limited
                    license to use the App’s. It is hereby clarified that the App will remain the exclusive property of
                    the Company. You confirm that you are aware that all rights in the license, including any updates,
                    changes made to the App and any information or other material provided to you by the Company are the
                    sole property of the Company, and all proprietary rights in connection therewith, including
                    copyrights, patents, trade secrets, trade names and all intellectual property rights of any kind,
                    belong exclusively to the Company. You are aware that the software is proprietary and a trade secret
                    of the Company, which is protected under civil, criminal and copyright law, and is a valuable asset
                    of the Company, and you obligated to hold it in confidence for the benefit of the Company.</li>
                <li>&nbsp;You hereby agree not to:<ol>
                        <li>transfer, distribute, publicly display, publicly perform, transfer to the public, modify,
                            process, create derivative works from, sell or lease any part of the App or content
                            contained therein, whether by yourself or through or in cooperation with any third parties,
                            through any means, whether electronic, mechanical, optical, photographic or recording.</li>
                        <li>misuse the App, including spread of viruses and / or threaten and / or solicit etc.</li>
                        <li>copy or reproduce, or allow another person to copy or reproduce, any part of the App,
                            whether in writing, magnetically or otherwise.</li>
                        <li>create or attempt to create, or allow others to create or attempt to create, the source
                            software of the software package or any part thereof from the object or from other
                            information (whether verbally, in writing, tangible or intangible) that will be available to
                            you, whether by reverse engineering or otherwise;</li>
                        <li>copy for others the App instructions, training material and other user explanation material;
                        </li>
                        <li>remove the Company warning with regards to the Company's trade secrets and copyrights in all
                            copies, changes or partial copies of the App.</li>
                    </ol>
                </li>
                <li>For the removal of doubt, it is hereby clarified that the Company is not liable for any intellectual
                    property rights in any third-party software, and you are aware that all liability in connection with
                    the intellectual property rights of those software’s is of the third party manufacturers, and in
                    accordance with such software’s’ license agreements with such parties.</li>
                <li>You are aware that the Company is the sole owner of all intellectual property rights in connection
                    with the App, the data and the database, and the grant of any license according to these Terms of
                    Use shall not be deemed as granting you any such rights therein.</li>
                <li>You agree to authorize the Company and/or the Company's customers, whether themselves and/or through
                    third parties, to collect (from any source and in any form) and/or store and/or hold and/or process
                    and/or use information about you, including personal information and/or sensitive information such
                    as name, ID number, biometric data, security photographs, videos and recordings, geographical
                    location, email address, phone number, information about your employer and your employment and/or
                    entities to which you provide services, such as salaries, any kind of payments, supervisor, director
                    in charge, seniority, etc., as well as further details, all according our privacy policy and the
                    applicable law, in particular the EU GDPR.</li>
                <li>Subject to the law and the privacy policy of the company, the information about you may be disclosed
                    to third parties, including to the Company's customers and/or your employers and/or companies to
                    which you provide services and/or to cloud services companies and/or to any other authorized third
                    party which shall require the information in order for the App to be activated and used for the
                    storage and/or possession and/or usage of such information, at your work place, for purposes of work
                    and/or employment and/or for the purpose of storage and/or processing of the data and/or for the
                    purposes of direct mail (as defined in the South African Privacy Protection Act), including the
                    identification of your geographical location, obtaining information about you, and in order to
                    enable efficient and convenient communication in the workplace by sending messages to your mobile
                    device and/or by email and/or by any other means of communication and in any other way.</li>
                <li>You confirm that you are aware and agree that the Company and/or its customers and/or cloud services
                    companies with which the Company engages, collect information about you and/or store and/or hold
                    and/or process and/or use such information.</li>
                <li>You are aware that the Company operates under and in accordance with all laws and the provisions of
                    the Privacy Protection Act, in connection with the collection of information, use of information,
                    information processing, grant of authorization and/or access to information, registration of
                    databases, information security etc., and accordingly, by accepting these Terms of Use, you declare
                    that you have and will have no claim and/or complaint and/or demand with regards to the App and/or
                    the information and/or regarding the usage of the information, including the grant of access and/or
                    authorization to third parties to access the information and/or its transfer to third parties and/or
                    use and/or processing of the information by third parties.</li>
                <li>You agree to receive from time to time text messages to your mobile phone and/or e-mails and/or
                    through the App and/or by any other means, from the Company and/or the Company's customers and/or
                    your employer and/or place of work. You are aware that, inter alia, the service is contingent upon
                    satellite signals reception, mobile communications providers, and other third parties, all of which
                    are factors and means completely not in the control and responsibility of the Company.</li>
                <li>The Company has sole discretion to decide from time to time without having to notify you in advance
                    of changes to the App, including the structure, appearance and design, scope and availability of its
                    services, which content and information are displayed to the user, the duration of their
                    presentation and their location, and any matters related thereto. You will have no claim and/or
                    demand against the Company in respect of the implementation of such changes and/or resulting or
                    related malfunctions.</li>
                <li>The Company may discontinue the service at any time at its sole discretion, wholly or partially,
                    temporarily or permanently, for maintenance, repair, upgrades, amendments, service improvement or
                    for any other reason.</li>
                <li>The use of the App is carried out at your own risk and full responsibility. The App is intended for
                    use AS IS, and cannot be adapted to one’s individual needs. You hereby acknowledge that you have
                    reviewed the App in advance and find that it suits your needs and objectives. You will have no
                    complaint, claim or demand towards the Company in respect of the quality and/or features of the
                    service, its content, capabilities, limitations and suitability for your needs. Usage of the App
                    will be carried out at your sole and full responsibility and the Company shall not be liable for any
                    damage whatsoever caused by the use of the App or due to any disruptions in service.</li>
                <li>Password and Security: As part of using the Services, you may create a password or any kind of
                    additional security method. You are responsible for maintaining the confidentiality of the password
                    or any kind of additional security method and are fully responsible for all activities that occur on
                    your phone or computer and any other device. The Company cannot and will not be liable for any loss,
                    damage or other liability arising from your failure to comply with this section or from any
                    unauthorized access to or use of your phone or computer or any other device. Please notice; you must
                    comply with the privacy and data protection policies of your own organization, regardless of Company
                    privacy statements and information security policy.</li>
                <li>You are aware that the Company operates in accordance with all laws, including the provisions of the
                    Privacy Protection Law, maintaining information security and it takes all the precautions imposed on
                    it under the law including the Databases Registrar guidelines No. 2011/2 "Use of outsourcing
                    services for process of personal information” in order to strictly uphold information security, and
                    therefore in the event of any damage to the information including damage related to breaches of the
                    information security used in the App and/or any leaks of any information used in the App and/or any
                    transfer of information to third parties not in the control of the Company and/or that was done
                    inadvertently, you acknowledge that you are aware that despite the Company's efforts to operate
                    according to any law and according to the customary standards for the maintenance of information
                    security, such damages may still occur.</li>
                <li>You are aware that a significant portion of the services are "location-based" in GSM-GPS technology,
                    and cannot be provided without your explicit consent to track your location through them. Therefore,
                    the absence of your consent to be located may prevent the provision of the service to you.</li>
                <li>The Company is not responsible in any way to defects and/or malfunctions and/or errors of any kind,
                    in the information displayed in the App. Due to the complexity of the App, due to its reliance on
                    third parties’ GPS services, and due to your dependence on mobile and internet operators, the
                    Company is unable to commit to a certain level of service standard, continuity of service, level of
                    availability, accuracy of the location and maps content, and other quality parameters. Therefore,
                    the Company is unable to ensure that the App services will not be disrupted or interrupted, be
                    provided without interruptions or errors, function safely, and shall be immune from unauthorized
                    access or damage, malfunctions or failures – in the hardware, software, communication lines and
                    systems.</li>
                <li>The Company is not responsible in any way, directly or indirectly, for any damage and/or loss and/or
                    loss of profit, directly or indirectly, related to the use of the App and/or its contents or arising
                    from an inability to use the App for any reason. In addition, the Company will not be liable for any
                    software and/or hardware damage and other damages incurred as a result of using the App.</li>
                <li>The Company does not guarantee that third parties content and services published in the App and
                    brought as a service to the public of App users will be complete, correct, legal, up to date, or
                    accurate, or meet your expectations and requirements. The Company shall have no liability whatsoever
                    for any outcome thereof or of your usage of them, or to your reliance on them.</li>
                <li>You hereby agree and undertake to indemnify the Company and/or anyone on its behalf for any damage,
                    loss, loss of profits, payment or expenditure incurred by it and/or any of its representatives,
                    including attorney's fees and court expenditures, as a result of any breach of any of the provisions
                    of these Terms of Use, and/or of any infringement of any third party rights and/or claim of the user
                    and/or any third party in connection with the usage of the App by the user and/or information about
                    the user.</li>
                <li>Any dispute or legal proceeding regarding any matter connected with these Terms of Use or arising
                    therefrom and/or connected to the App and/or the usage thereof, whether in Israel or abroad, shall
                    be initiated only by submitting legal action to the competent courts of Tel Aviv, Israel, and the
                    laws of the State of Israel shall apply.</li>
                <li>Any notice from you to the Company shall be sent in writing to our mailing address at:&nbsp;</li>
            </ol>
            <p>* The provisions contained herein are phrased in the masculine form for convenience purpose, and they
                naturally apply also to women.</p>
            <p>I have carefully read the Terms of Use set forth above and understood them, and I hereby agree to these
                Terms of Use.</p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p>BEHAVIOR CODE AND BUSINESS ETHICS</p>
            <ol>
                <li>Introduction:<ol>
                        <li>Proper and fair business management is of paramount importance to the Company's growth and
                            success</li>
                        <li>In order to strengthen the commitment to ethical and business conduct, the Company's
                            management has approved the Code of Conduct and Business Ethics</li>
                        <li>Compliance with the code requirements by the Company's owners, directors, managers and
                            employees will help the Company successfully execute its business operations, maintain its
                            reputation and create an effective and positive work environment</li>
                        <li>The code summarizes the Company's policy on ethical and business behavior and sets the basic
                            standards of ethics and behavior for directors, managers and employees</li>
                        <li>Violation of the standards set out in this Code may result in disciplinary (and criminal)
                            action against the violator</li>
                        <li>The Company shall protect any person who reports in good faith of a suspected breach of
                            ethics. The Company shall not take any reprisal actions against the aforesaid informer</li>
                    </ol>
                </li>
                <li>Applicable Documents:<ol>
                        <li>The United Nation Convention against Corruption General Assembly resolution 58/4 of 31
                            October 2003</li>
                        <li>The Europe Convention on Combating Bribery of Foreign Public Officials in International
                            Business Transactions 23 May 1997, C (97) 123 / FINAL</li>
                        <li>USA - The Foreign Corrupt Practices Act of 1977 (FCPA)</li>
                        <li>Penal Law, 5737-1977</li>
                        <li>Securities Law, 5728-1968</li>
                        <li>The Prevention of Sexual Harassment Law, South Africa</li>
                        <li>The Equal Employment Opportunities Law, South Africa</li>
                        <li>The Equal Rights for People with Disabilities Law, South Africa</li>
                        <li>The OECD Guidelines for Multinational Enterprises, 2011 Edition</li>
                    </ol>
                </li>
                <li>Maintaining a comprehensive quality standard:<ol>
                        <li>The Company's owners, directors, directors, employees and anyone acting for it shall act in
                            accordance with procedure 05.09 - "the Company's Quality Manual" and in accordance with all
                            the Company's accompanying procedures</li>
                    </ol>
                </li>
                <li>Ethical and Fair Conduct:<ol>
                        <li>Any person subject to this Code is responsible for acting fairly and ethically when
                            performing actions on behalf of the Company</li>
                        <li>The responsibility to act also applies in the reciprocal relationship with directors,
                            managers and employees, as well as with the Company itself</li>
                        <li>Every person in the Company is expected to act in good faith, with responsibility, caution,
                            expertise and diligence and to use his/her independent judgment in regard to problematic
                            behavior and compliance with ethical standards of the Company</li>
                    </ol>
                </li>
                <li>Compliance with laws, policies, instructions and regulations:<ol>
                        <li>Every person in the Company acting on its behalf is required to comply with the requirements
                            of the relevant laws, policies, directives and regulations of the Company's operations,
                            including in various areas of international activity</li>
                        <li>Although it is not expected that every person in the Company or its representatives will be
                            familiar with all the laws, regulations, directives and policies, the Company's management
                            expects these entities to become familiar with the Company's internal procedures, which are
                            the key points for maintaining "clean" and ethical business activity</li>
                    </ol>
                </li>
                <li>Disclosure and Communication:<ol>
                        <li>Neural Robotics (Pty) Ltd. is to provide proper disclosure of all reports of the Company to
                            various authorities, suppliers and business partners</li>
                        <li>The Company's policy also includes the channeling of this document and the Company's
                            compliance policy against bribery (Procedure 05.15) in English on the Company's website</li>
                    </ol>
                </li>
                <li>Internal information:<ol>
                        <li>Although Neural Robotics and its subsidiary are private companies, the Company's customers
                            include large public, institutional and government bodies in South Africa and around the
                            world. By virtue of their being the Company's customers, the Company's owners, directors,
                            directors, employees and other persons acting on its behalf may be exposed to business
                            processes within these organizations, which may be defined as internal information within
                            the meaning of the Securities Law, South Africa</li>
                        <li>The Company's owners, directors, managers, employees and any other persons acting on its
                            behalf, shall not use or share with others any material or non-public information related to
                            the Company's customers, for the purpose of trading shares or any other purpose, except for
                            the purpose of providing service to the Company's customers. All this is in addition to the
                            confidentiality obligations that they will be obligated to sign</li>
                        <li>Any information relating to the Company's activity or the activity of the Company's
                            customers will be considered confidential information for all intents and purposes</li>
                        <li>The use of inside information or non-public information, personal financial benefit, or
                            "tip" to others that may make a business decision based on this information is not only
                            unethical but also illegal</li>
                        <li>Violation of these "inside information" prohibitions may expose the violator to criminal and
                            civil liability, in addition to any proceeding decided by Neural Robotics (Pty) Ltd</li>
                    </ol>
                </li>
                <li>Prevention of bribery:<ol>
                        <li>Neural Robotics (Pty) Ltd. is committed to conducting its business in accordance with the
                            strictest principles of business ethics, including Prevention of bribery</li>
                        <li>The Company operates in many international markets. This reality requires compliance with
                            all the laws against giving or receiving bribes that are applicable under various
                            jurisdictions, as stated in Procedure 05.15 - Compliance Policy Against Bribery</li>
                    </ol>
                </li>
                <li>Conflict of interest:<ol>
                        <li>A "conflict of interest" occurs when the personal interests of a person in or associated
                            with the organization are in conflict (or may be considered to be in conflict) with the
                            interests of the Company</li>
                        <li>A “situation of conflict” arises if the action or interests of a person in or associated
                            with a Company impair his/her ability to perform the work in the Company or for it
                            objectively and efficiently</li>
                        <li>A “conflict of interest” is strictly forbidden in Neural Robotics (Pty) Ltd</li>
                        <li>A member of an organization exposed to action and/or a relationship that may cause a
                            conflict of interest must report it immediately to the CEO of the Company</li>
                    </ol>
                </li>
                <li>Political Activity:<ol>
                        <li>The Company's policy is not to create or encourage any political identification or
                            affiliation</li>
                        <li>The Company's owners, directors, managers and employees may identify personally with any
                            political affiliation they wish, provided that it does not in any way relate to the activity
                            of the Company or to its name</li>
                        <li>Use of Company resources for political purposes is strictly prohibited</li>
                    </ol>
                </li>
                <li>Protection and proper use of the Company's assets:<ol>
                        <li>The Company's owners, directors, officers and employees shall use the Company's assets only
                            for legitimate business purposes</li>
                        <li>The Company's owners, directors, directors and employees shall seek in every way to preserve
                            the Company's assets including physical assets, and any proprietary, intellectual,
                            commercial, marketing, financial, technical and data information</li>
                        <li>Use or distribution without authorization of the Company's assets is strictly prohibited and
                            may constitute a violation of the law and result in criminal and civil penalties</li>
                        <li>The Company's owners, directors, managers and employees shall maintain confidentiality
                            regarding all the activities and business assets of the Company and / or its customers and
                            shall sign an explicit undertaking to do so</li>
                        <li>The Company's owners, directors, managers and employees shall act in accordance with the
                            Company's information security policy as stated in Procedure 02.06 - Information Security
                            Policy</li>
                    </ol>
                </li>
                <li>Regulations for the Prevention of Sexual Harassment at Work:<ul style="list-style-type:circle">
                        <li>Sexual harassment is prohibited by law - the law prohibits sexual harassment of any kind
                            within the framework of the work</li>
                        <li>The harasser is liable to a penalty of up to two years jail, in addition to heavy financial
                            penalties</li>
                        <li>The management of a company in which the offenses were committed may also be exposed to
                            criminal and civil actions, if it is proved that it did not operate in a safe, pleasant and
                            clean environment that prohibited sexual harassment</li>
                        <li>The management of Neural Robotics (Pty) Ltd. is committed to the policy of maintaining a
                            safe, pleasant environment that prohibits sexual harassment and / or any other harassment
                            and / or any other action that may be construed as such harassment</li>
                        <li>In order to enforce this policy of preventing sexual harassment and harassment in general at
                            work, the Company will act to explain and inform all Company employees of this prohibition
                        </li>
                        <li>The Company's Articles for the Prevention of Sexual Harassment will be published in a
                            central location and will be accessible to all Company employees</li>
                    </ul>
                </li>
                <li>Equal work opportunities for all:<ol>
                        <li>The Company's management adopts a policy of equality of work opportunities for all, in
                            accordance with the Equal Employment Opportunities Law, South Africa and the Equal Rights
                            for People with Disabilities Law, South Africa.</li>
                        <li>The Company's management shall ensure that the entire process of recruitment, employment and
                            dismissal of an employee shall be of a purely practical nature.</li>
                        <li>The Company will document the recruitment process for candidates and ensure that it meets
                            the requirements of the law.</li>
                    </ol>
                </li>
                <li>Reporting inappropriate behavior:<ol>
                        <li>The Company's owners, directors, directors and employees are obliged to report to the CEO of
                            the Company any suspicion of unethical conduct or violation of this code of conduct</li>
                        <li>Reporting can be done anonymously</li>
                        <li>The Company's management is required to examine complaints and / or reports of any
                            inappropriate behavior and to act only in accordance with the laws of the State of Israel
                            and the Company's policy as it appears in its procedures</li>
                    </ol>
                </li>
                <li>Applicability<ol>
                        <li>This policy applies to:<ol>
                                <li>Owners of the Company</li>
                                <li>Directors of the Company</li>
                                <li>Managers</li>
                                <li>Employees</li>
                                <li>Entities operating on behalf of or for the Company</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Validity:<ol>
                        <li>This policy is valid as of its date of publication</li>
                    </ol>
                </li>
            </ol>
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
	<title>Our Statement</title>
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
            <h1>PRIVACY STATEMENT</h1>
             <ol>
                <li>Personal data we collect<ol>
                        <li>Your privacy is important to us. This privacy statement explains what personal data
                            OpenCAPTO collects from you, through our interactions with you and through our product and
                            related services, and how we use that data.</li>
                        <li>OpenCAPTO offers a wide range of services as part of its product, from the main software
                            (OpenCAPTO GSM Device Location, Asset Manager, OpenCAPTO RTLS, C&amp;C PSIM – Control &amp;
                            Command, Physical security information management) to 45 different modules.<ol>
                                <li>This statement applies to OpenCAPTO interactions with you and the OpenCAPTO Asset
                                    Manager, C&amp;C, PSIM different modules listed below:<ol>
                                        <li>Asset or person Location &amp; Analytics</li>
                                        <li>GSM SDR RADIOS or Gateways </li>
                                        <li>GSM Mobile devices </li>
                                        <li>BLE Gateways</li>
                                        <li>Software Applications (Cloud &amp; On Prem)</li>
                                        <li>CCTV, Video analytics</li>
                                        <li>Intrusion, Access control, Fire alarm</li>
                                        <li>LPR, Perimeter, Radars</li>
                                        <li>Communications</li>
                                        <li>GSM and Wi-Fi Location based devices</li>
                                        <li>Cyber and Network alerts</li>
                                        <li>Social media and open source intelligence</li>
                                        <li>Organizational systems and ERP</li>
                                        <li>Live video transmission from the mobile app</li>
                                        <li>Incident management and log system</li>
                                        <li>Security operations system</li>
                                        <li>Route management system</li>
                                        <li>Visitors, suppliers and contract employee’s management system</li>
                                        <li>Asset management system</li>
                                        <li>Building management and maintenance operations system</li>
                                        <li>Safety management system</li>
                                        <li>Weapons management system</li>
                                        <li>SIEM - security information and event management for cyberattack alerts</li>
                                    </ol>
                                </li>
                                <li>This statement applies to OpenCAPTO interactions with you and the OpenCAPTO App
                                    different modules listed below:<ol>
                                        <li>Distress button</li>
                                        <li>Gyro Mode “man down”</li>
                                        <li>Location transmission and GPS positioning</li>
                                        <li>Encrypted communication system</li>
                                        <li>Receiving incidents and dispatch</li>
                                        <li>Incident log and manual incident reporting</li>
                                        <li>Inspection reporting and form generator</li>
                                        <li>Patrol and route module and navigation</li>
                                        <li>View force location on GIS</li>
                                        <li>Receiving forms/documents</li>
                                        <li>Task management</li>
                                        <li>Time &amp; attendance reporting</li>
                                        <li>Bar-code scanning system</li>
                                        <li>Visitor/Supplier invitation module</li>
                                        <li>Vehicle license plate verification</li>
                                        <li>Access control system</li>
                                        <li>Organization phonebook</li>
                                        <li>Places near me</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>OpenCAPTO&nbsp;IoT Platform also obtaining data from third parties and/ or IoT devices –
                            Sensors. We protect data obtained from third parties according to the practices described in
                            this statement, plus any additional restrictions imposed by the source of the data. These
                            third-party sources vary over time, but have included:<ol>
                                <li>Data brokers, Data Aggregators from which we obtain from client sites or the
                                    purchasing of data to supplement the data we collect.</li>
                                <li>Social networks when you grant permission to OpenCAPTO services to access your data
                                    on one or more networks.</li>
                                <li>Service providers that help us determine your location, based on your IP address or
                                    GPS data, to customize certain services to you.</li>
                                <li>Customer service providers that supplement the data we collect by means of
                                    integration and/ or IoT.</li>
                                <li>Partners with which we offer co-branded services or engage in joint activities.</li>
                                <li>Publicly available sources such as open government databases or other data in the
                                    public domain.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
            </ol>
            <p>You have choices about the data we collect. When you are asked to provide personal data, you may decline.
                But if you choose not to provide data that is necessary to provide a service or feature, you may not be
                able to use that service or feature.</p>
            <ol>
                <li>The data we collect depends on the context of your interactions with OpenCAPTO, the choices you
                    make, including your privacy settings, and the products and features you use. The data we collect
                    can include the following:<ol>
                        <li>Personal &amp; contact data:&nbsp;We collect passport picture or face photo, first and last
                            name, email address, postal address, phone number, ID number, passport number, date of
                            birth, profession, car plate, social media account details, and other similar contact data.
                        </li>
                        <li>Employment data:&nbsp;We collect profession, occupation, working address and building/
                            campus, employee ID, personal manager, training, personal working equipment, location,
                            weapon and other sensitive security equipment details, system messages and event tracking,
                            and other similar contact data</li>
                        <li>Medical data:&nbsp;medical history, blood type, allergies, medication, medical documents,
                            emergency contact data, and other similar medical data.</li>
                        <li>Media data:&nbsp;video, stills picture, audio recording, and other similar media data. Your
                            image may be captured by security cameras.</li>
                        <li>Biometric data:&nbsp;face recognition, fingerprint, retinal imprint, and other similar
                            biometric data.</li>
                        <li>Credentials.&nbsp;We collect passwords, password hints, and similar security information
                            used for authentication and account access.</li>
                        <li>Demographic data.&nbsp;We collect data about you such as your age, gender, country, and
                            preferred language.</li>
                        <li>Payment data.&nbsp;We collect data necessary to process your payment if you make purchases,
                            such as your payment instrument number (such as a credit card number), and the security code
                            associated with your payment instrument, bank account details.</li>
                        <li>Device and Usage data.&nbsp;We collect data about your device and how you and your device
                            interact with OpenCAPTO and our products. For example, we collect:<ul
                                style="list-style-type:square">
                                <li>Product use data. We collect data about the OpenCAPTO system related features you
                                    use. This data includes which application version is installed on your device, is it
                                    runs in the background, are you online.</li>
                                <li>Device, connectivity and configuration data. We collect data about your device and
                                    the network you use to connect to our services. It includes data about the operating
                                    systems. It also includes device type and manufacturer, identifiers (such as the
                                    IMEI number for phones, RTLS Locators), regional and language settings, battery
                                    state, IP address, online connectivity, last date of connectivity, GIS location,
                                    device positioning (balanced or vertical)</li>
                                <li>Error reports and performance data. We collect data about the performance of the
                                    services and any problems you experience with them. This data helps us to diagnose
                                    problems in the service you use, and to improve our products and provide solutions.
                                    Error reports (sometimes called “crash dumps”) can include data such as the type or
                                    severity of the problem, details of the software or hardware related to an error,
                                    contents of files you were using when an error occurred, and data about other
                                    software on your device.</li>
                                <li>Troubleshooting and Help Data. When you engage OpenCAPTO for troubleshooting and
                                    help, we collect data about you and your hardware, software, and other details
                                    related to the incident. Such data includes contact or authentication data, the
                                    content of your chats and other communications with OpenCAPTO, data about the
                                    condition of the machine and the application when the fault occurred and during
                                    diagnostics, and system and registry data about software installations and hardware
                                    configurations.</li>
                            </ul>
                        </li>
                        <li>Location data.&nbsp;For services with location-enhanced features, we collect data about your
                            location, which can be either precise or imprecise. Precise location data can be Global
                            Navigation Satellite System (GNSS) data (e.g., GPS), as well as data identifying nearby cell
                            towers and Wi-Fi hotspots, we collect when you enable location-based products or features.
                            Imprecise location data includes, for example, a location derived from your IP address or
                            data that indicates where you are located with less precision, such as at a city or postal
                            code level.</li>
                        <li>Content.&nbsp;We collect content of your OpenCAPTO system related communication when
                            necessary to provide you with the services you use. Such data can include:<ul
                                style="list-style-type:square">
                                <li>Files</li>
                                <li>Stills pictures</li>
                                <li>Text or other content of a push or email message</li>
                                <li>Audio and video recording of a video message</li>
                                <li>Audio recording and transcript of a voice message you receive or a text message you
                                    dictate</li>
                            </ul>
                        </li>
                        <li>Traceability changes:&nbsp;We collect all logs traceability changes of your user. Such data
                            can include: date, time, IP address, location, data changes (old and new) etc.</li>
                        <li>Customer service:&nbsp;We also collect information you provide to us and the content of
                            messages you send to us, such as service request, feedback and product reviews you write, or
                            questions and information you provide for customer support. When you contact us, such as for
                            customer support, phone conversations or chat sessions with our representatives may be
                            monitored and recorded.</li>
                    </ol>
                </li>
            </ol>
            <p>Product-specific sections below describe data collection practices applicable to use of those products.
            </p>
            <ol>
                <li>Why we collect the data<ol>
                        <li>OpenCAPTO uses the data we collect for a basic purpose: To operate our business and provide
                            the services we offer (including improving and personalizing).</li>
                        <li>In carrying out these purposes, we combine and fuses data we collect to give our customer a
                            simple and more seamless, consistent and personalized data view. We have built in
                            technological and procedural safeguards designed to prevent certain data combinations and
                            leakage.</li>
                        <li>Providing and improving our products and services:&nbsp;We use data to provide and improve
                            the products and services we offer and perform essential business operations. This includes
                            operating the products, maintaining and improving the performance of the products,
                            developing new features, conducting research, and providing customer support. Examples of
                            such uses include the following:<ul style="list-style-type:square">
                                <li>Providing the Products.&nbsp;We use data to carry out your transactions with us and
                                    to provide our services to you. Often, those services include personal and
                                    personalized features and data as describe in paragraph 1.</li>
                                <li>Customer support.&nbsp;We use data to diagnose product and services problems and
                                    provide other customer care and support services.</li>
                                <li>Product activation.&nbsp;We use data—such as device and application type, location,
                                    and unique device, application, network and subscription identifiers—to activate
                                    software and devices that require activation.</li>
                                <li>Product Improvement.&nbsp;We use data to continually improve our product and
                                    services, including adding new features or capabilities. For example, we use error
                                    reports to improve security features.</li>
                                <li>Security, Safety and Dispute Resolution.&nbsp;We use data to protect the security
                                    and safety of our services related product, our customers and users, to detect and
                                    prevent fraud, fishing, identity theft, data leakage, to confirm the validity of
                                    software licenses, to resolve disputes and enforce our agreements. Our security
                                    services features can disrupt the operation of malicious software and notify you if
                                    malicious software is found on your devices or systems.</li>
                                <li>Business Operations.&nbsp;We use data to develop aggregate analysis and business
                                    intelligence which enable us and our customers to operate, protect, make informed
                                    decisions, and report on the performance of the business.</li>
                                <li>Automated decision-making and profiling.&nbsp;We use data from different data
                                    sources of our system to fuses together to streamline the situational awareness and
                                    response of our customers. However, any final decision-making needs human approval.
                                    Please notice automated decision-making and profiling are subject to our customer’s
                                    systems definitions. If you are end user of the systems and you have complaints
                                    regarding this feature you should contact your organization.</li>
                            </ul>
                        </li>
                        <li>Communications.&nbsp;We use data we collect to communicate with our customers. We may
                            contact our customer by phone, email or other means to inform, when a subscription is
                            ending, discuss licensing account, let you know when software updates are available, update
                            or inquire about a service or repair request, invite to participate in a survey, or remind
                            you to act to keep your account active.</li>
                        <li>Advertising.&nbsp;OpenCAPTO does not advertise and does not use any data to target ads to
                            you or any of the end users.</li>
                        <li>Data Retention.&nbsp;In the interests of the customer, we retain data according to our
                            retention policy and as necessary or required by the applicable laws &amp; regulations.
                            Nevertheless, some data such as TMP files are regularly deleted.</li>
                        <li>Data Archives.&nbsp;In the interests of the customer, we archive data every 30 days.
                            Retrieval of archived data can be performed by OpenCAPTO only when our customer has
                            requested or authorized us to do so. In such cases, only the specific and relevant data in
                            the request will be retrieved.</li>
                        <li>Data Sharing.&nbsp;In some cases, we share controlled data with third party services to
                            provide our customer the agreed services. Such cases are pre-defined by contract with our
                            customer. Any related data transection is securely controlled by different means of cyber
                            security methods and or according to EEA Countries adequate levels.</li>
                        <li>Data Collected by Other services.&nbsp;OpenCAPTO system are integrated with various
                            third-party services. Such services can include: IoT devices, beacons, cyber security
                            systems, biometric systems, CCTV systems etc. The data is used for the functionality of the
                            services to our customer as defined in the contract.</li>
                    </ol>
                </li>
                <li>Reasons we share personal data<ol>
                        <li>We share personal data with our customer or as necessary to provide any service our customer
                            has requested or authorized. For example, we share your content with third parties when you
                            tell us to do so, such as when a certain service need to be process by third party or when
                            you provide payment data, we will share payment data with banks and other entities that
                            process payment transactions or provide other financial services, and for fraud prevention
                            and credit risk reduction.</li>
                        <li>We may need to share personal data among our cloud service. For example, to provide customer
                            service support or assist in protecting and securing our systems and services the cloud
                            service admin may need access to personal data to provide those functions. In such cases,
                            the cloud service supplier must abide by our data privacy and security requirements and are
                            not allowed to use personal data they receive from us for any other purpose.</li>
                        <li>We may need to share some personal data among our development and customer service team. For
                            example, to provide customer service and support or assist in protecting and securing our
                            systems and services our development and customer service team may have access to personal
                            data. In such cases, our personnel must abide by our data privacy and security requirements
                            and policy and are not allowed to use personal data for any other purpose.</li>
                        <li>We will access, transfer, disclose, and preserve personal data, including your content when
                            we have a good faith belief that doing so is necessary to:<ol>
                                <li>comply with applicable law or respond to valid legal process, including from law
                                    enforcement or other government agencies; or</li>
                                <li>protect our customers, for example to prevent spam or attempts to defraud you or
                                    users of our product and services, or to help prevent the loss of life or serious
                                    injury of anyone; or</li>
                                <li>operate and maintain the security of our product and services, including to prevent
                                    or stop an attack on our computer systems or networks or data base; or</li>
                                <li>protect the rights or property of OpenCAPTO, including enforcing the terms governing
                                    the use of the services. however, if we receive information indicating that someone
                                    is using our services to traffic in stolen intellectual or physical property,
                                    including stealing of OpenCAPTO data, we will not inspect a customer's private
                                    content ourselves, but we may refer the matter to law enforcement.</li>
                            </ol>
                        </li>
                        <li>Please note that:<ol>
                                <li>If you are an end user of OpenCAPTO customer, your data is governed by its privacy
                                    statements. However, OpenCAPTO will enforce this privacy statement and its privacy
                                    policy on all customer, users and data as far as it depends on it.</li>
                                <li>Some of our products include links to products of third parties whose privacy
                                    practices differ from OpenCAPTO. If you provide personal data to any of those
                                    products, your data is governed by their privacy statements.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>How to access &amp; control your personal data:<ol>
                        <li>You can view, edit, or delete your personal data online depend on which products you use.
                            For example:<ol>
                                <li>OpenCAPTO Asset manager, C &amp; C, PSIM</li>
                                <li>Invite module</li>
                                <li>OpenCAPTO app for mobile devices</li>
                            </ol>
                        </li>
                        <li>If you are an end user of OpenCAPTO customer you can view, edit, or delete only some of your
                            personal data. All your data is controlled and governed by OpenCAPTO customer privacy
                            statements.</li>
                        <li>If you cannot access certain personal data collected by OpenCAPTO system directly through
                            the OpenCAPTO service you use, you can always contact OpenCAPTO customer support, we will
                            respond to requests to access or delete your personal data within 30 days.</li>
                        <li>If you are using OpenCAPTO app for mobile devices you can choose to block the GPS location
                            service when installing the app (simply do not approve the service).</li>
                        <li>Browser-Based Controls<ol>
                                <li>OpenCAPTO uses cookies (small text files placed on your device) and similar
                                    technologies to provide our websites and online services and to help collect data.
                                    The text in a cookie often consists of a string of numbers and letters that uniquely
                                    identifies your computer, but it can contain other information as well.</li>
                            </ol>
                        </li>
                        <li>Our Use of Cookies and Similar Technologies<ol>
                                <li>Sign-in and Authentication.&nbsp;When you sign into OpenCAPTO system website, we
                                    store a unique ID number, and the time you signed in, in an encrypted cookie on your
                                    device. This cookie allows you to move from page to page within the site without
                                    having to sign in again on each page. You can also save your sign-in information, so
                                    you do not have to sign in each time you return to the site.</li>
                                <li>Security.&nbsp;We use cookies to detect fraud and abuse of our websites and
                                    services.</li>
                                <li>User Preferences.&nbsp;We use local storage to save user preferences such as user
                                    preferred language and session details</li>
                            </ol>
                        </li>
                        <li>How to control cookies:<ol>
                                <li>Most web browsers automatically accept cookies but provide controls that allow you
                                    to block or delete them. Instructions for blocking or deleting cookies in all
                                    browsers may be available in each browser's privacy or help documentation.</li>
                                <li>Certain features of OpenCAPTO system depend on cookies and similar technologies.
                                    Please be aware that if you choose to block them, you may not be able to sign in or
                                    use those features, and preferences that are dependent on cookies may be lost. If
                                    you choose to delete cookies, settings and preferences controlled by those cookies,
                                    will be deleted and may need to be recreated.</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Security of personal data:<ol>
                        <li>OpenCAPTO is committed to protecting the security of any personal data on its database. We
                            use a variety of security technologies and procedures to help protect all personal data from
                            unauthorized access, use or disclosure.</li>
                    </ol>
                </li>
                <li>Where we store and process personal data<ol>
                        <li>Personal data collected by OpenCAPTO services may be stored and processed in your region, or
                            in any other country where OpenCAPTO maintain facilities.</li>
                        <li>OpenCAPTO stores all data collected by its services on Microsoft AZURE cloud services or our
                            OpenCAPTO Cloud Servers which maintain major data centers in Australia, Austria, Brazil,
                            Canada, Finland, France, Germany, Hong Kong, India, Ireland, Japan, Korea, Malaysia, the
                            Netherlands, Singapore, the United Kingdom and the United States.</li>
                        <li>For Microsoft Azure Privacy policy and AWS and TOU please refer to&nbsp;&nbsp;OpenCAPTO
                            primary database storage location is in South Africa and the backup location is in Europe.
                            The storage location(s) are chosen to operate efficiently, to improve performance, and to
                            create redundancies that will protect the data in the event of an outage or other problem.
                        </li>
                        <li>OpenCAPTO take steps to ensure that the data we collect under this privacy statement is
                            processed according to the provisions of this statement and the requirements of the EU GDPR
                            and the requirements applicable law wherever the data is located.</li>
                        <li>OpenCAPTO transfers personal data from the European Economic Area and Switzerland to other
                            countries, some of which have not been determined by the European Commission to have an
                            adequate level of data protection. When we do, we use a variety of cyber security procedures
                            and legal mechanisms, including contracts, to help ensure your rights and protections of
                            your data.</li>
                        <li>If there is any conflict between the terms in this privacy statement and the EU GDPR
                            principles, the EU GDPR principles shall govern.</li>
                        <li>If you have a question or complaint related to this privacy statement, our privacy policy,
                            our way of data processing, storage or managing we encourage you to contact our DPO at&nbsp;
                        </li>
                        <li>For any complaints related to the privacy matter that cannot be resolved with OpenCAPTO
                            directly, we have chosen to cooperate with the relevant data protection authority, or a
                            panel established by the European DPAs for resolving disputes. Please contact us to be
                            directed to the relevant DPA contacts.</li>
                        <li>OpenCAPTO is subject to the investigatory and enforcement powers of The Privacy Protection
                            Authority in Israel.</li>
                    </ol>
                </li>
                <li>Our retention of personal data:<ol>
                        <li>OpenCAPTO retains personal data for as long as necessary to provide the required services
                            and fulfill the transactions you have requested, or for other essential purposes such as
                            complying with our legal obligations, resolving disputes, and enforcing our agreements.</li>
                        <li>Some personal data can be deleted at any time by the customer or the end user. However,
                            OpenCAPTO is obligated to maintain logs to enable the traceability of changes for as long as
                            necessary. Such logs may include the following data:<ol>
                                <li>Who made the changes</li>
                                <li>Date and time</li>
                                <li>IP address</li>
                                <li>The original data which has changed</li>
                                <li>The new data that replaced the old one</li>
                            </ol>
                        </li>
                        <li>The right to be forgotten<ol>
                                <li>At the end of a contract period and its related services:<ol>
                                        <li>OpenCAPTO provides a reversibility options, including data retrieval, until
                                            the customer confirms that the data is no longer required.</li>
                                        <li>The customer has the right to receive all related data, which may include:
                                            all data, personal data, logs, traceability changes records, backups etc.
                                        </li>
                                        <li>should the customer confirm that the data is no longer required, the
                                            customer environment will be cleared, if legally permitted, and all
                                            information relating to the customer will be deleted according to our
                                            retention policy. However, in some jurisdictions, some customer related data
                                            may be retained by OpenCAPTO as required by law.</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Collection of data from and about children:<ol>
                        <li>OpenCAPTO official policy is not to collect any data from and/ or children under age 18.
                            However, some services need to collect such data. Those services may include:<ol>
                                <li>Medical modules, for example to be able to supply a safe medical treatment.</li>
                                <li>Security modules, for example when there is a security incident and data are being
                                    collected form the incident area, or when necessary in order to supply the
                                    contracted services, such as panic button.</li>
                                <li>Please be aware that according to GDPR any data collection of children under the age
                                    of 16 should be by parental consent or legal guardian only. If you are a child under
                                    the age of 16 or you are not the child parent or legal guardian, we are assuming
                                    that you got parental or legal guardian consent to collect the data by our system.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Please notice: If you are suspicious that data about children are being collected without the parent
                    or legal guardian consent please contact our DPO ASAP at:&nbsp;</li>
                <li>Notice to end user:<ol>
                        <li>OpenCAPTO Asset Locator, C&amp;C, PSIM with it satellite services are intended for use by
                            organizations and are administered to you by your organization. In addition to this privacy
                            statement, your use of OpenCAPTO services may be subject to your organization's policies, if
                            any. If your organization is administering your use of the OpenCAPTO services, please direct
                            your privacy inquiries to your administrator. OpenCAPTO is not responsible for the privacy
                            or security practices of our customers, which may differ from those set forth in this
                            privacy statement.</li>
                    </ol>
                </li>
                <li>Changes to This Privacy Statement:<ol>
                        <li>OpenCAPTO will update this privacy statement when necessary to reflect customer feedback and
                            changes in our products and its related services. When we post changes to this statement, we
                            will revise the "last updated" date at the top of the statement and describe the changes in
                            the traceability of changes table. If there are material changes to the statement or in how
                            OpenCAPTO will use your personal data, we will notify you either by release note or by
                            directly sending you a notification. We encourage you to periodically review this privacy
                            statement to learn how OpenCAPTO is protecting your information.</li>
                    </ol>
                </li>
            </ol>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <h2>TERMS OF USE </h2>
            <h2><br></h2>
            <h2>Terms of Use OF THE openCAPTO SYSTEMS OR MOBILE APP APPLICATION</h2>
            <h2>&#8203;</h2>
            <p>Prior to completing the download and installation of the OPENCAPTO Application’s (“App”) please read
                carefully the terms of use listed below (“Terms of Use”). It is hereby clarified that by registering to
                the App and/or accepting these Terms of Use and/or by starting to use the App you declare that you are
                aware of the Terms of Use and express your explicit consent to the following Terms of Use:</p>
            <ol>
                <li>&nbsp;The "OPENCAPTO" service is an Mobile App &amp; Web service provided by Neural Robotics (Pty)
                    Ltd. (the "Company"). The App makes use of the cellular device location, as it is registered on the
                    global GSM positioning system (GSM-GPS™) and transmitted over the cellular network to the Company's
                    systems, and transfers through the device to the Company's systems, including through the camera and
                    microphone. This App is designed for smart cellular devices with an Apple and Android operating
                    system only.</li>
                <li>&nbsp;The Terms of Use detailed herein are a binding agreement between you and the Company. Your
                    registration to and/or usage of the App indicates your full acceptance of all terms and declarations
                    detailed below. If you do not agree to these terms, wholly or partially, you should not commence (or
                    continue) using the App.</li>
                <li>&nbsp;The Company may amend these Terms of Use at any time, at its sole discretion, by giving a 30
                    days prior notice. During this period, you are entitled to decide that you do not agree to such
                    amendment, in which event you may not continue use of the App. Your continued use of the App
                    following the expiration of said period shall indicate your consent to such amendment. All
                    information provided by you or collected by the Company in connection with the Services is governed
                    by the Company’s Privacy Policy, a copy of which is located at&nbsp;<a
                        data-cke-saved-href="https://www.opencapto.io/terms-of-use"
                        href="https://www.opencapto.io/terms-of-use">https://www.opencapto.io/terms-of-use</a>, which is
                    hereby incorporated by reference into these Terms. The Company strongly recommends that you review
                    the Privacy Policy closely. You should take care to protect private information or information that
                    is important to you. Please be aware that if you decide to disclose personally identifiable
                    information on the Services, this information may become public. The Company does not control and
                    shall not be responsible for the acts of you or any other users of the Services.</li>
                <li>&nbsp;The Company grants you a non-exclusive, non-transferable, non-assignable, and time-limited
                    license to use the App’s. It is hereby clarified that the App will remain the exclusive property of
                    the Company. You confirm that you are aware that all rights in the license, including any updates,
                    changes made to the App and any information or other material provided to you by the Company are the
                    sole property of the Company, and all proprietary rights in connection therewith, including
                    copyrights, patents, trade secrets, trade names and all intellectual property rights of any kind,
                    belong exclusively to the Company. You are aware that the software is proprietary and a trade secret
                    of the Company, which is protected under civil, criminal and copyright law, and is a valuable asset
                    of the Company, and you obligated to hold it in confidence for the benefit of the Company.</li>
                <li>&nbsp;You hereby agree not to:<ol>
                        <li>transfer, distribute, publicly display, publicly perform, transfer to the public, modify,
                            process, create derivative works from, sell or lease any part of the App or content
                            contained therein, whether by yourself or through or in cooperation with any third parties,
                            through any means, whether electronic, mechanical, optical, photographic or recording.</li>
                        <li>misuse the App, including spread of viruses and / or threaten and / or solicit etc.</li>
                        <li>copy or reproduce, or allow another person to copy or reproduce, any part of the App,
                            whether in writing, magnetically or otherwise.</li>
                        <li>create or attempt to create, or allow others to create or attempt to create, the source
                            software of the software package or any part thereof from the object or from other
                            information (whether verbally, in writing, tangible or intangible) that will be available to
                            you, whether by reverse engineering or otherwise;</li>
                        <li>copy for others the App instructions, training material and other user explanation material;
                        </li>
                        <li>remove the Company warning with regards to the Company's trade secrets and copyrights in all
                            copies, changes or partial copies of the App.</li>
                    </ol>
                </li>
                <li>For the removal of doubt, it is hereby clarified that the Company is not liable for any intellectual
                    property rights in any third-party software, and you are aware that all liability in connection with
                    the intellectual property rights of those software’s is of the third party manufacturers, and in
                    accordance with such software’s’ license agreements with such parties.</li>
                <li>You are aware that the Company is the sole owner of all intellectual property rights in connection
                    with the App, the data and the database, and the grant of any license according to these Terms of
                    Use shall not be deemed as granting you any such rights therein.</li>
                <li>You agree to authorize the Company and/or the Company's customers, whether themselves and/or through
                    third parties, to collect (from any source and in any form) and/or store and/or hold and/or process
                    and/or use information about you, including personal information and/or sensitive information such
                    as name, ID number, biometric data, security photographs, videos and recordings, geographical
                    location, email address, phone number, information about your employer and your employment and/or
                    entities to which you provide services, such as salaries, any kind of payments, supervisor, director
                    in charge, seniority, etc., as well as further details, all according our privacy policy and the
                    applicable law, in particular the EU GDPR.</li>
                <li>Subject to the law and the privacy policy of the company, the information about you may be disclosed
                    to third parties, including to the Company's customers and/or your employers and/or companies to
                    which you provide services and/or to cloud services companies and/or to any other authorized third
                    party which shall require the information in order for the App to be activated and used for the
                    storage and/or possession and/or usage of such information, at your work place, for purposes of work
                    and/or employment and/or for the purpose of storage and/or processing of the data and/or for the
                    purposes of direct mail (as defined in the South African Privacy Protection Act), including the
                    identification of your geographical location, obtaining information about you, and in order to
                    enable efficient and convenient communication in the workplace by sending messages to your mobile
                    device and/or by email and/or by any other means of communication and in any other way.</li>
                <li>You confirm that you are aware and agree that the Company and/or its customers and/or cloud services
                    companies with which the Company engages, collect information about you and/or store and/or hold
                    and/or process and/or use such information.</li>
                <li>You are aware that the Company operates under and in accordance with all laws and the provisions of
                    the Privacy Protection Act, in connection with the collection of information, use of information,
                    information processing, grant of authorization and/or access to information, registration of
                    databases, information security etc., and accordingly, by accepting these Terms of Use, you declare
                    that you have and will have no claim and/or complaint and/or demand with regards to the App and/or
                    the information and/or regarding the usage of the information, including the grant of access and/or
                    authorization to third parties to access the information and/or its transfer to third parties and/or
                    use and/or processing of the information by third parties.</li>
                <li>You agree to receive from time to time text messages to your mobile phone and/or e-mails and/or
                    through the App and/or by any other means, from the Company and/or the Company's customers and/or
                    your employer and/or place of work. You are aware that, inter alia, the service is contingent upon
                    satellite signals reception, mobile communications providers, and other third parties, all of which
                    are factors and means completely not in the control and responsibility of the Company.</li>
                <li>The Company has sole discretion to decide from time to time without having to notify you in advance
                    of changes to the App, including the structure, appearance and design, scope and availability of its
                    services, which content and information are displayed to the user, the duration of their
                    presentation and their location, and any matters related thereto. You will have no claim and/or
                    demand against the Company in respect of the implementation of such changes and/or resulting or
                    related malfunctions.</li>
                <li>The Company may discontinue the service at any time at its sole discretion, wholly or partially,
                    temporarily or permanently, for maintenance, repair, upgrades, amendments, service improvement or
                    for any other reason.</li>
                <li>The use of the App is carried out at your own risk and full responsibility. The App is intended for
                    use AS IS, and cannot be adapted to one’s individual needs. You hereby acknowledge that you have
                    reviewed the App in advance and find that it suits your needs and objectives. You will have no
                    complaint, claim or demand towards the Company in respect of the quality and/or features of the
                    service, its content, capabilities, limitations and suitability for your needs. Usage of the App
                    will be carried out at your sole and full responsibility and the Company shall not be liable for any
                    damage whatsoever caused by the use of the App or due to any disruptions in service.</li>
                <li>Password and Security: As part of using the Services, you may create a password or any kind of
                    additional security method. You are responsible for maintaining the confidentiality of the password
                    or any kind of additional security method and are fully responsible for all activities that occur on
                    your phone or computer and any other device. The Company cannot and will not be liable for any loss,
                    damage or other liability arising from your failure to comply with this section or from any
                    unauthorized access to or use of your phone or computer or any other device. Please notice; you must
                    comply with the privacy and data protection policies of your own organization, regardless of Company
                    privacy statements and information security policy.</li>
                <li>You are aware that the Company operates in accordance with all laws, including the provisions of the
                    Privacy Protection Law, maintaining information security and it takes all the precautions imposed on
                    it under the law including the Databases Registrar guidelines No. 2011/2 "Use of outsourcing
                    services for process of personal information” in order to strictly uphold information security, and
                    therefore in the event of any damage to the information including damage related to breaches of the
                    information security used in the App and/or any leaks of any information used in the App and/or any
                    transfer of information to third parties not in the control of the Company and/or that was done
                    inadvertently, you acknowledge that you are aware that despite the Company's efforts to operate
                    according to any law and according to the customary standards for the maintenance of information
                    security, such damages may still occur.</li>
                <li>You are aware that a significant portion of the services are "location-based" in GSM-GPS technology,
                    and cannot be provided without your explicit consent to track your location through them. Therefore,
                    the absence of your consent to be located may prevent the provision of the service to you.</li>
                <li>The Company is not responsible in any way to defects and/or malfunctions and/or errors of any kind,
                    in the information displayed in the App. Due to the complexity of the App, due to its reliance on
                    third parties’ GPS services, and due to your dependence on mobile and internet operators, the
                    Company is unable to commit to a certain level of service standard, continuity of service, level of
                    availability, accuracy of the location and maps content, and other quality parameters. Therefore,
                    the Company is unable to ensure that the App services will not be disrupted or interrupted, be
                    provided without interruptions or errors, function safely, and shall be immune from unauthorized
                    access or damage, malfunctions or failures – in the hardware, software, communication lines and
                    systems.</li>
                <li>The Company is not responsible in any way, directly or indirectly, for any damage and/or loss and/or
                    loss of profit, directly or indirectly, related to the use of the App and/or its contents or arising
                    from an inability to use the App for any reason. In addition, the Company will not be liable for any
                    software and/or hardware damage and other damages incurred as a result of using the App.</li>
                <li>The Company does not guarantee that third parties content and services published in the App and
                    brought as a service to the public of App users will be complete, correct, legal, up to date, or
                    accurate, or meet your expectations and requirements. The Company shall have no liability whatsoever
                    for any outcome thereof or of your usage of them, or to your reliance on them.</li>
                <li>You hereby agree and undertake to indemnify the Company and/or anyone on its behalf for any damage,
                    loss, loss of profits, payment or expenditure incurred by it and/or any of its representatives,
                    including attorney's fees and court expenditures, as a result of any breach of any of the provisions
                    of these Terms of Use, and/or of any infringement of any third party rights and/or claim of the user
                    and/or any third party in connection with the usage of the App by the user and/or information about
                    the user.</li>
                <li>Any dispute or legal proceeding regarding any matter connected with these Terms of Use or arising
                    therefrom and/or connected to the App and/or the usage thereof, whether in Israel or abroad, shall
                    be initiated only by submitting legal action to the competent courts of Tel Aviv, Israel, and the
                    laws of the State of Israel shall apply.</li>
                <li>Any notice from you to the Company shall be sent in writing to our mailing address at:&nbsp;</li>
            </ol>
            <p>* The provisions contained herein are phrased in the masculine form for convenience purpose, and they
                naturally apply also to women.</p>
            <p>I have carefully read the Terms of Use set forth above and understood them, and I hereby agree to these
                Terms of Use.</p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p>BEHAVIOR CODE AND BUSINESS ETHICS</p>
            <ol>
                <li>Introduction:<ol>
                        <li>Proper and fair business management is of paramount importance to the Company's growth and
                            success</li>
                        <li>In order to strengthen the commitment to ethical and business conduct, the Company's
                            management has approved the Code of Conduct and Business Ethics</li>
                        <li>Compliance with the code requirements by the Company's owners, directors, managers and
                            employees will help the Company successfully execute its business operations, maintain its
                            reputation and create an effective and positive work environment</li>
                        <li>The code summarizes the Company's policy on ethical and business behavior and sets the basic
                            standards of ethics and behavior for directors, managers and employees</li>
                        <li>Violation of the standards set out in this Code may result in disciplinary (and criminal)
                            action against the violator</li>
                        <li>The Company shall protect any person who reports in good faith of a suspected breach of
                            ethics. The Company shall not take any reprisal actions against the aforesaid informer</li>
                    </ol>
                </li>
                <li>Applicable Documents:<ol>
                        <li>The United Nation Convention against Corruption General Assembly resolution 58/4 of 31
                            October 2003</li>
                        <li>The Europe Convention on Combating Bribery of Foreign Public Officials in International
                            Business Transactions 23 May 1997, C (97) 123 / FINAL</li>
                        <li>USA - The Foreign Corrupt Practices Act of 1977 (FCPA)</li>
                        <li>Penal Law, 5737-1977</li>
                        <li>Securities Law, 5728-1968</li>
                        <li>The Prevention of Sexual Harassment Law, South Africa</li>
                        <li>The Equal Employment Opportunities Law, South Africa</li>
                        <li>The Equal Rights for People with Disabilities Law, South Africa</li>
                        <li>The OECD Guidelines for Multinational Enterprises, 2011 Edition</li>
                    </ol>
                </li>
                <li>Maintaining a comprehensive quality standard:<ol>
                        <li>The Company's owners, directors, directors, employees and anyone acting for it shall act in
                            accordance with procedure 05.09 - "the Company's Quality Manual" and in accordance with all
                            the Company's accompanying procedures</li>
                    </ol>
                </li>
                <li>Ethical and Fair Conduct:<ol>
                        <li>Any person subject to this Code is responsible for acting fairly and ethically when
                            performing actions on behalf of the Company</li>
                        <li>The responsibility to act also applies in the reciprocal relationship with directors,
                            managers and employees, as well as with the Company itself</li>
                        <li>Every person in the Company is expected to act in good faith, with responsibility, caution,
                            expertise and diligence and to use his/her independent judgment in regard to problematic
                            behavior and compliance with ethical standards of the Company</li>
                    </ol>
                </li>
                <li>Compliance with laws, policies, instructions and regulations:<ol>
                        <li>Every person in the Company acting on its behalf is required to comply with the requirements
                            of the relevant laws, policies, directives and regulations of the Company's operations,
                            including in various areas of international activity</li>
                        <li>Although it is not expected that every person in the Company or its representatives will be
                            familiar with all the laws, regulations, directives and policies, the Company's management
                            expects these entities to become familiar with the Company's internal procedures, which are
                            the key points for maintaining "clean" and ethical business activity</li>
                    </ol>
                </li>
                <li>Disclosure and Communication:<ol>
                        <li>Neural Robotics (Pty) Ltd. is to provide proper disclosure of all reports of the Company to
                            various authorities, suppliers and business partners</li>
                        <li>The Company's policy also includes the channeling of this document and the Company's
                            compliance policy against bribery (Procedure 05.15) in English on the Company's website</li>
                    </ol>
                </li>
                <li>Internal information:<ol>
                        <li>Although Neural Robotics and its subsidiary are private companies, the Company's customers
                            include large public, institutional and government bodies in South Africa and around the
                            world. By virtue of their being the Company's customers, the Company's owners, directors,
                            directors, employees and other persons acting on its behalf may be exposed to business
                            processes within these organizations, which may be defined as internal information within
                            the meaning of the Securities Law, South Africa</li>
                        <li>The Company's owners, directors, managers, employees and any other persons acting on its
                            behalf, shall not use or share with others any material or non-public information related to
                            the Company's customers, for the purpose of trading shares or any other purpose, except for
                            the purpose of providing service to the Company's customers. All this is in addition to the
                            confidentiality obligations that they will be obligated to sign</li>
                        <li>Any information relating to the Company's activity or the activity of the Company's
                            customers will be considered confidential information for all intents and purposes</li>
                        <li>The use of inside information or non-public information, personal financial benefit, or
                            "tip" to others that may make a business decision based on this information is not only
                            unethical but also illegal</li>
                        <li>Violation of these "inside information" prohibitions may expose the violator to criminal and
                            civil liability, in addition to any proceeding decided by Neural Robotics (Pty) Ltd</li>
                    </ol>
                </li>
                <li>Prevention of bribery:<ol>
                        <li>Neural Robotics (Pty) Ltd. is committed to conducting its business in accordance with the
                            strictest principles of business ethics, including Prevention of bribery</li>
                        <li>The Company operates in many international markets. This reality requires compliance with
                            all the laws against giving or receiving bribes that are applicable under various
                            jurisdictions, as stated in Procedure 05.15 - Compliance Policy Against Bribery</li>
                    </ol>
                </li>
                <li>Conflict of interest:<ol>
                        <li>A "conflict of interest" occurs when the personal interests of a person in or associated
                            with the organization are in conflict (or may be considered to be in conflict) with the
                            interests of the Company</li>
                        <li>A “situation of conflict” arises if the action or interests of a person in or associated
                            with a Company impair his/her ability to perform the work in the Company or for it
                            objectively and efficiently</li>
                        <li>A “conflict of interest” is strictly forbidden in Neural Robotics (Pty) Ltd</li>
                        <li>A member of an organization exposed to action and/or a relationship that may cause a
                            conflict of interest must report it immediately to the CEO of the Company</li>
                    </ol>
                </li>
                <li>Political Activity:<ol>
                        <li>The Company's policy is not to create or encourage any political identification or
                            affiliation</li>
                        <li>The Company's owners, directors, managers and employees may identify personally with any
                            political affiliation they wish, provided that it does not in any way relate to the activity
                            of the Company or to its name</li>
                        <li>Use of Company resources for political purposes is strictly prohibited</li>
                    </ol>
                </li>
                <li>Protection and proper use of the Company's assets:<ol>
                        <li>The Company's owners, directors, officers and employees shall use the Company's assets only
                            for legitimate business purposes</li>
                        <li>The Company's owners, directors, directors and employees shall seek in every way to preserve
                            the Company's assets including physical assets, and any proprietary, intellectual,
                            commercial, marketing, financial, technical and data information</li>
                        <li>Use or distribution without authorization of the Company's assets is strictly prohibited and
                            may constitute a violation of the law and result in criminal and civil penalties</li>
                        <li>The Company's owners, directors, managers and employees shall maintain confidentiality
                            regarding all the activities and business assets of the Company and / or its customers and
                            shall sign an explicit undertaking to do so</li>
                        <li>The Company's owners, directors, managers and employees shall act in accordance with the
                            Company's information security policy as stated in Procedure 02.06 - Information Security
                            Policy</li>
                    </ol>
                </li>
                <li>Regulations for the Prevention of Sexual Harassment at Work:<ul style="list-style-type:circle">
                        <li>Sexual harassment is prohibited by law - the law prohibits sexual harassment of any kind
                            within the framework of the work</li>
                        <li>The harasser is liable to a penalty of up to two years jail, in addition to heavy financial
                            penalties</li>
                        <li>The management of a company in which the offenses were committed may also be exposed to
                            criminal and civil actions, if it is proved that it did not operate in a safe, pleasant and
                            clean environment that prohibited sexual harassment</li>
                        <li>The management of Neural Robotics (Pty) Ltd. is committed to the policy of maintaining a
                            safe, pleasant environment that prohibits sexual harassment and / or any other harassment
                            and / or any other action that may be construed as such harassment</li>
                        <li>In order to enforce this policy of preventing sexual harassment and harassment in general at
                            work, the Company will act to explain and inform all Company employees of this prohibition
                        </li>
                        <li>The Company's Articles for the Prevention of Sexual Harassment will be published in a
                            central location and will be accessible to all Company employees</li>
                    </ul>
                </li>
                <li>Equal work opportunities for all:<ol>
                        <li>The Company's management adopts a policy of equality of work opportunities for all, in
                            accordance with the Equal Employment Opportunities Law, South Africa and the Equal Rights
                            for People with Disabilities Law, South Africa.</li>
                        <li>The Company's management shall ensure that the entire process of recruitment, employment and
                            dismissal of an employee shall be of a purely practical nature.</li>
                        <li>The Company will document the recruitment process for candidates and ensure that it meets
                            the requirements of the law.</li>
                    </ol>
                </li>
                <li>Reporting inappropriate behavior:<ol>
                        <li>The Company's owners, directors, directors and employees are obliged to report to the CEO of
                            the Company any suspicion of unethical conduct or violation of this code of conduct</li>
                        <li>Reporting can be done anonymously</li>
                        <li>The Company's management is required to examine complaints and / or reports of any
                            inappropriate behavior and to act only in accordance with the laws of the State of Israel
                            and the Company's policy as it appears in its procedures</li>
                    </ol>
                </li>
                <li>Applicability<ol>
                        <li>This policy applies to:<ol>
                                <li>Owners of the Company</li>
                                <li>Directors of the Company</li>
                                <li>Managers</li>
                                <li>Employees</li>
                                <li>Entities operating on behalf of or for the Company</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li>Validity:<ol>
                        <li>This policy is valid as of its date of publication</li>
                    </ol>
                </li>
            </ol>
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
