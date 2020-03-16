<?php

// Construct variables 
$cartTotal = 200;// This amount needs to be sourced from your application
$data = array(
    // Merchant details
    'merchant_id' => '10015744',
    'merchant_key' => '2j4evh9qk0tc8',
    'return_url' => 'http://opencapto.io/dev/complete.php',
    'cancel_url' => 'http://opencapto.io/dev/cancelled.php',
    'notify_url' => 'http://opencapto.io/dev/notify.php',
    // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> 'valid@email_address.com',
    // Transaction details
    'm_payment_id' => '8542', //Unique payment ID to pass through to notify_url
    // Amount needs to be in ZAR
    // If multicurrency system its conversion has to be done before building this array
    'amount' => number_format( sprintf( "%.2f", $cartTotal ), 2, '.', '' ),
    'item_name' => 'Item Name',
    'item_description' => 'Item Description',
    'custom_int1' => '9586', //custom integer to be passed through           
    'custom_str1' => 'custom string is passed along with transaction to notify_url page'
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
$testingMode = true;
$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">'; 
foreach($data as $name=> $value)
{ 
    $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />'; 
} 
$htmlForm .= '<input type="submit" value="Pay Now" /></form>'; 
echo $htmlForm;


?>