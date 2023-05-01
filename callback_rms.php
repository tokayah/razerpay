<?php


// URL DEV & Live
$URL_dev = "https://sandbox.merchant.razer.com";
$URL_live = "https://pay.merchant.razer.com";
$URL_batch ="https://api.merchant.razer.com/RMS/query/q_by_tids.php";
$tIDS = "1518151913|1518163766";
//$tIDS = "30597209|30597195";
//$oIDS = "INV/T1/22-23/4582|PL-7"; // multiple
//$order_id = "IV-23-AF";// single


//// Order ID (1)
$amount = "300.00"; // applicable for order id, not transaction

//$merchant_id = 'SB_schoolscan'; // known as domain
$merchant_id = 'sekolahtinta'; // known as domain
$v_key = '593f86df10d5d9529e2c30bb8da13736';

//$StatCode ="00";
//$skey = md5($merchant_id & $oIDS & $v_key);
//print_r($skey);die;
//$VrfKey = md5($amount&$merchant_id&$TranID&$StatCode);

//$v_code = gen_hash($amount,$merchant_id,$order_id,$v_key); // order id
$v_code = gen_hash_transaction($merchant_id,$tIDS,$v_key); // transaction id

?>

<form action='https://api.merchant.razer.com/RMS/query/q_by_tids.php' method=POST >

<input type=hidden name=amount value='<?php echo $amount ?>'>
<input type=hidden name=tIDs value='<?php echo $tIDS ?>'>
<input type=hidden name=domain value='<?php echo $merchant_id ?>'>
<input type=hidden name=skey value='<?php echo $v_code ?>'>
<input type=submit value=' PAY NOW '>
<!-- <input type=submit value=' PAY NOW '>
<input type=hidden name=skey value='785a3696f93c5a6f91dbdda2ed6c445d'>
<input type=hidden name=delimiter value='|'>
<input type=hidden name=domain value='SB_schoolscan'>
<input type=hidden name=oIDs value='INV/T1/22-23/4582|PL-7'>
<input type=submit value=' PAY NOW '> -->
</form>

<?php

function gen_hash_transaction($merchant_id,$oid,$vkey){
    $merchantID = $merchant_id;
    $orderid = $oid;
    $verifykey = $vkey;
    $vcode = md5( $merchantID.$orderid.$verifykey );
    return $vcode;
}

function gen_hash($amount,$merchant_id,$oid,$vkey){
    $amount = $amount;
    $merchantID = $merchant_id;
    $orderid = $oid;
    $verifykey = $vkey;
    $vcode = md5( $amount.$merchantID.$orderid.$verifykey );
    return $vcode;
}

?>