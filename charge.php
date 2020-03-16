<?php include("connect.php");
 
 
 
 session_start();
 $id=$_GET['id'];
 $amount=$_GET['amount'];
 
 ?>

<?php
 
 require_once('vendor/autoload.php');
// // Set your secret key: remember to change this to your live secret key in production
// // See your keys here: https://dashboard.stripe.com/account/apikeys
 \Stripe\Stripe::setApiKey('sk_test_ghik78JaiHEiBqqJelsKLfBY00opmgUQT8');

 // Token is created using Stripe Checkout or Elements!
 // Get the payment token ID submitted by the form:
 $token = $_POST['stripeToken'];
 $charge=\Stripe\Charge::create([
     'amount' => $amount,
     'currency' => 'usd',
     'source' => $token, 
    'description' => 'Charge for jenny.rosen@example.com',
   ]);
   
     $amount=$charge->amount;
     echo $amount;
     echo $id;
     date_default_timezone_set('Asia/karachi');
     $dateS = date('y/m/d');

    $query=mysqli_query($con,"insert into payment values (null,'$amount','$id','$dateS')");
    if(!$query){
     echo "error";
}


  
   
  header('location:cellFinder.php?id='.$id.'');
?>