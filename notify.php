<?php
include("connect.php");
header( 'HTTP/1.0 200 OK' );
flush();
define( 'SANDBOX_MODE', false );
$pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
// Posted variables from ITN
$pfData = $_POST;

// Strip any slashes in data
foreach( $pfData as $key => $val )
{
    $pfData[$key] = stripslashes( $val );
}


// $pfData includes of ALL fields posted through from PayFast, plus the empty strings
$pfData = $_POST;

$amount_gross = $pfData['amount_gross'];
$custom_int1 = $pfData['custom_str1'];
$current_date = date("Y-m-d");

$query=mysqli_query($con,"insert into payment values (null,'$amount_gross','$custom_int1','$current_date')");

$pfParamString = '';
// Construct variables 
foreach( $pfData as $key => $val )
{
    if( $key != 'signature' )
    {
        $pfParamString .= $key .'='. urlencode( $val ) .'&';
    }
}

$fp = fopen('lidn.txt', 'w');
fwrite($fp, $pfParamString);
fclose($fp);

// Remove the last '&' from the parameter string
$pfParamString = substr( $pfParamString, 0, -1 );
$pfTempParamString = $pfParamString;
// Passphrase stored in website database
$passPhrase = '';

if( !empty( $passPhrase ) )
{
    $pfTempParamString .= '&passphrase='.urlencode( $passPhrase );
}
$signature = md5( $pfTempParamString );

if($signature!=$pfData['signature'])
{
    die('Invalid Signature');
}



// Variable initialization
$validHosts = array(
    'www.payfast.co.za',
    'sandbox.payfast.co.za',
    'w1w.payfast.co.za',
    'w2w.payfast.co.za',
);

$validIps = array();

foreach( $validHosts as $pfHostname )
{
    $ips = gethostbynamel( $pfHostname );
    if( $ips !== false )
    {
        $validIps = array_merge( $validIps, $ips );
    }
}

// Remove duplicates
$validIps = array_unique( $validIps );

if( !in_array( $_SERVER['REMOTE_ADDR'], $validIps ) )
{
    die('Source IP not Valid');
}


$cartTotal = 200; // This amount needs to be sourced from your application
if( abs( floatval( $cartTotal ) - floatval( $pfData['amount_gross'] ) ) > 0.01 )
{
    die('Amounts Mismatch');
}



// Variable initialization
$url = 'https://'. $pfHost .'/eng/query/validate';

// Create default cURL object
$ch = curl_init();

// Set cURL options - Use curl_setopt for greater PHP compatibility
// Base settings
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_HEADER, false );      
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 1 );

// Standard settings
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $pfParamString );

// Execute CURL
$response = curl_exec( $ch );
curl_close( $ch );

$lines = explode( "\r\n", $response );
$verifyResult = trim( $lines[0] );

if( strcasecmp( $verifyResult, 'VALID' ) != 0 )
{
    die('Data not valid');
}


$pfPaymentId = $pfData['pf_payment_id'];



 if( $pfData ['payment_status'] == 'COMPLETE' )
 {
    // If complete, update your application
 }
 else
 {
    // If unknown status, do nothing (which is the safest course of action)
 }



switch( $pfData['payment_status'] )
{
    case 'COMPLETE':
    // If complete, update your application
       break;
    case 'CANCEL':
    // If cancel, then cancel subscription
       break;
    default:
    // If unknown status, do nothing (which is the safest course of action)
       break;
}
?>