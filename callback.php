<?php

$vkey ="3397795b72ba29601250d286e093b76b";

$nbcb = $_POST['nbcb'];
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
 * To verify the data integrity sending by PG
 ************************************************************/

$key0 = md5( $tranID.$orderid.$status.$domain.$amount.$currency );
$key1 = md5( $paydate.$domain.$key0.$appcode.$vkey );
if( $skey != $key1 ) $status= -1; // Invalid transaction
if ( $status == "00" ) {
    if ( check_cart_amt($orderid, $amount) ) {
// write your script here .....
    }
} else {
// failure action
// write your script here .....
} if
( $nbcb==1 ) {
//callback IPN feedback to notified PG
    echo "CBTOKEN:MPSTATOK"; exit;
}else{
//normal IPN and redirection
}
?>