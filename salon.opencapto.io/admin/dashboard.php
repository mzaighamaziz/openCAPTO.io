<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid'] == 0)) {
	header('location:logout.php');
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>BPMS | Admin Dashboard</title>

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--Calender-->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src="js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
	<!--End Calender-->
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">

		<?php include_once('includes/sidebar.php'); ?>

		<?php include_once('includes/header.php'); ?>
		<!-- main content start-->
		<div id="page-wrapper" class="row calender widget-shadow">
			<div class="main-page">


				<div class="row">
					<div class="row-one">
						<div class="col-md-4 widget">
							<?php $query1 = mysqli_query($con, "Select * from tblcustomers");
							$totalcust = mysqli_num_rows($query1); ?>
							<div class="CardTitle">
								<h5>Total <b>Customer</b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/Customer.png" alt="">
								<label> <?php if($totalcust>0){
								echo $totalcust; 
								}
								else echo "0"; ?></label>
							</div>
						</div>
						<div class="col-md-4 widget states-mdl">
							<?php $query2 = mysqli_query($con, "Select * from tblappointment");
							$totalappointment = mysqli_num_rows($query2);
							?>

							<div class="CardTitle">
								<h5>Total <b>Appointment</b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/TotalAppointment.png" alt="">
								<label> <?php  if($totalappointment>0){
								echo $totalappointment; 
								}
								else echo "0"; ?></label>
							</div>
						</div>
						<div class="col-md-4 widget">
							<?php $query3 = mysqli_query($con, "Select * from tblappointment where Status='1'");
							$totalaccapt = mysqli_num_rows($query3);
							?>
							<div class="CardTitle">
								<h5>Appointment <b>Accepted </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/AcceptedAppointment.png" alt="">
								<label><?php if($totalaccapt>0){
								echo $totalaccapt; 
								}
								else echo "0"; ?></label>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>

				<div class="row">
					<div class="row-one">
						<div class="col-md-4 widget">
							<?php $query4 = mysqli_query($con, "Select * from tblappointment where Status='2'");
							$totalrejapt = mysqli_num_rows($query4);
							?>
							<div class="CardTitle">
								<h5>Appointment <b>Rejected </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/RejectedAppointment.png" alt="">
								<label> <?php  if($totalrejapt>0){
								echo $totalrejapt; 
								}
								else echo "0"; ?></label>
							</div>

						</div>
						<div class="col-md-4 widget states-mdl">
							<?php $query5 = mysqli_query($con, "Select * from  tblservices");
							$totalser = mysqli_num_rows($query5);
							?>
							<div class="CardTitle">
								<h5>Total <b>Services </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/Services.png" alt="">
								<label> <?php  if($totalser>0){
								echo $totalser; 
								}
								else echo "0"; ?></label>
							</div>
						</div>
						<div class="col-md-4 widget states-last">
							<?php
							//todays sale
							$query6 = mysqli_query($con, "select tblinvoice.ServiceId as ServiceId, tblservices.Cost
 from tblinvoice 
  join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)=CURDATE();");
							while ($row = mysqli_fetch_array($query6)) {
								$todays_sale = $row['Cost'];
								$todysale += $todays_sale;
							}
							?>
							<div class="CardTitle">
								<h5>Today <b>Sales </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/TodaySales.png" alt="">
								<label> <?php if($todysale>0){
								echo $todysale; 
								}
								else echo "0";?><sub>RS/-</sub></label>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>

				<div class="row">
					<div class="row-one">
						<div class="col-md-4 widget">
							<?php
							//Yesterday's sale
							$query7 = mysqli_query($con, "select tblinvoice.ServiceId as ServiceId, tblservices.Cost from tblinvoice 
  join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)=CURDATE()-1;");
							while ($row7 = mysqli_fetch_array($query7)) {
								$yesterdays_sale = $row7['Cost'];
								$yesterdaysale += $yesterdays_sale;
							}
							?>
							<div class="CardTitle">
								<h5>Yesterday <b>Sales </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/LastDaySales.png" alt="">
								<label> <?php if($yesterdaysale>0){
								echo $yesterdaysale; 
								}
								else echo "0"; ?><sub>RS/-</sub></label>
							</div>
						</div>
						<div class="col-md-4 widget states-mdl">
							<?php
							//Last Sevendays Sale
							$query8 = mysqli_query($con, "select tblinvoice.ServiceId as ServiceId, tblservices.Cost
 from tblinvoice 
  join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)>=(DATE(NOW()) - INTERVAL 7 DAY);");
							while ($row8 = mysqli_fetch_array($query8)) {
								$sevendays_sale = $row8['Cost'];
								$tseven += $sevendays_sale;
							}
							?>
							<div class="CardTitle">
								<h5>Last Week <b>Sales </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/WeekSales.png" alt="">
								<label> <?php if($tseven>0){
								echo $tseven; 
								}
								else echo "0"; ?><sub>RS/-</sub></label>
							</div>
						</div>
						<div class="col-md-4 widget">
							<?php
							//Total Sale
							$query9 = mysqli_query($con, "select tblinvoice.ServiceId as ServiceId, tblservices.Cost
 from tblinvoice 
  join tblservices  on tblservices.ID=tblinvoice.ServiceId");
							while ($row9 = mysqli_fetch_array($query9)) {
								$total_sale = $row9['Cost'];
								$totalsale += $total_sale;
							}
							?>
							<div class="CardTitle">
								<h5>Total <b>Sales </b></h5>
							</div>
							<div class="Number">
								<img src="images/icons/TotalSales.png" alt="">
								<label><?php if($totalsale>0){
								echo $totalsale; 
								}
								else echo "0"; ?> <sub>RS/-</sub> </label>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--footer-->
	<?php include_once('includes/footer.php'); ?>
	<!--//footer-->
	</div>
	<!-- Classie -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};


		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
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