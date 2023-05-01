<?php

// URL DEV & Live
$URL_dev = "https://sandbox.merchant.razer.com";
$URL_live = "https://pay.merchant.razer.com";

$vkey ="3397795b72ba29601250d286e093b76b"; //Replace xxxxxxxxxxxx with Secret_Key

$_POST['treq'] = 0; // Additional parameter for IPN

/********************************
 *Don't change below parameters
 ********************************/
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

$tranID = $_POST['tranID'];
$orderid = $_POST['orderid'];
$status = $_POST['status'];
$domain = $_POST['domain'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$appcode = $_POST['appcode'];
$paydate = $_POST['paydate'];
$skey = $_POST['skey'];

/***********************************************************
 * Snippet code in purple color is the enhancement required
 * by merchant to add into their return script in order to
 * implement backend acknowledge method for IPN
 ************************************************************/
/*while ( list($k,$v) = each($_POST) ) {
    $postData[]= $k."=".$v;
}

$postdata = implode("&",$postData);
$url = "$URL_dev/RMS/API/chkstat/returnipn.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST , 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS , $postdata );
curl_setopt($ch, CURLOPT_URL , $url );
curl_setopt($ch, CURLOPT_HEADER , 1 );
curl_setopt($ch, CURLINFO_HEADER_OUT , TRUE );
curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1 );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , FALSE );
curl_setopt($ch, CURLOPT_SSLVERSION , 6 ); // use only TLSv1.2
$result = curl_exec( $ch );
curl_close( $ch );*/

/***********************************************************
 * To verify the data integrity sending by PG
 ************************************************************/
$key0 = md5( $tranID.$orderid.$status.$domain.$amount.$currency );
$key1 = md5( $paydate.$domain.$key0.$appcode.$vkey );

/*echo "<br>";
echo $key1;echo "<br>";
echo $skey;echo "<br>";*/

if( $skey != $key1 ) $status= -1; // Invalid transaction.
// Merchant might issue a requery to PG to double check payment status
if ( $status == "00" ) {

    //echo "<meta http-equiv=\"refresh\" content=\"0;URL='https://razerpay.schoolscan.xyz/success.php?trans_id=".$tranID."/'\">";
    header("Location: https://razerpay.schoolscan.xyz/success.php?trans_id=".$tranID);
    if ( check_cart_amt($orderid, $amount) ) {
        /*** NOTE : this is a user-defined function which should be prepared by merchant ***/
// action to change cart status or to accept order
// you can also do further checking on the paydate as well
// write your script here .....
    }
} else {
    header("Location: https://razerpay.schoolscan.xyz/fail.php?trans_id=".$tranID);
    // failure action. Write your script here .....
    // Merchant might send query to PG using Merchant requery
    // to double check payment status for that particular order.
} //
//Merchant is recommended to implement IPN once received the payment status
// regardless the status to acknowledge the PG
?>