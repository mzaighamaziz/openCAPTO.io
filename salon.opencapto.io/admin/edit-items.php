
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
}

	$id=$_GET['id'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$expiry=$_POST['expiry'];
	$qty=$_POST['qty'];
	date_default_timezone_set('Asia/Islamabad');
	$dateS = date('m/d/Y ');
	//$updated=$_POST['updateDate'];

	
	$query=mysqli_query($con,"update items set name='$name',price='$price',Quantity='$qty',description='$description',date='$dateS',expiryDate='$expiry' where id='$id'");
	if ($query) {
		$msg="Service has been Updated.";
	  }
	  else
		{
		  $msg="Something Went Wrong. Please try again";
		}
}
  ?>

<!DOCTYPE HTML>
<html>
<head>
<title>BPMS | Update Services</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Update Services</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Parlour Services:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" > <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['id'];
$ret=mysqli_query($con,"select * from  items where id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group">
                              <label for="exampleInputEmail1">Item Name</label> 
                              <input type="text" class="form-control" id="name" name="name" placeholder="Item Name" value="<?php  echo $row['name'];?>" required="true"> 
                              </div>
                               <div class="form-group"> 
                               <label for="exampleInputPassword1">Price</label>
                                <input type="text" id="cost" name="price" class="form-control" placeholder="Price" value="<?php  echo $row['price'];?>" required="true">
                                </div>
								<div class="form-group"> 
                               <label for="exampleInputPassword1">Quantity</label>
                                <input type="text" id="cost" name="qty" class="form-control" placeholder="Quantity" value="<?php  echo $row['Quantity'];?>" required="true">
                                </div>
								<div class="form-grioup">
								<label for="exampleInputEmail1">Description</label> 
							<textarea class="form-control" id="" name="description" value="" required="true"><?php echo $row['description']?></textarea>
							  </div> 
							  <div class="form-group">
							   <label for="exampleInputEmail1">Expiry Date</label>
							    <input type="date" class="form-control" name="expiry" id="fromdate" value="<?php echo $row['expiryDate']?>" required='true'>
							   </div>
							   <div class="form-group">
							   <?php
							   date_default_timezone_set('Asia/karachi');
							   $dateS = date('m/d/Y ');
							   
							   ?>
							   <label for="exampleInputEmail1">Updated Date</label>
							    <input type="text" readonly="true" class="form-control" name="updateDate" value="<?php echo $dateS ?>" required='true'>
							   </div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>