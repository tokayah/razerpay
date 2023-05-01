<?php

// URL DEV & Live
$URL_dev = "https://sandbox.merchant.razer.com";
$URL_live = "https://pay.merchant.razer.com";

$random = rand();
$merchant_id = 'SB_schoolscan';
$amount = '1.01';
$oid = 'INV/XX'.$random;
$name = 'Muhamad Azam';
$email = 'azam@schoolscan.xyz';
$mobile = '0182117929';
$description = 'Invoice testing';
$country = 'MY';
$v_key = '4b97dc31b1ad284b004b7cf236bd422f';
$v_code = gen_hash($amount,$merchant_id,$oid,$v_key);

//echo $amount;echo "<br>";echo $merchant_id;echo "<br>";echo $oid;echo "<br>";echo $v_key;echo "<br>";
//gen_hash($amount,$merchant_id,$oid,$v_key);die;

function gen_hash($amount,$merchant_id,$oid,$vkey){
    $amount = $amount;
    $merchantID = $merchant_id;
    $orderid = $oid;
    $verifykey = $vkey;
    $vcode = md5( $amount.$merchantID.$orderid.$verifykey );
    return $vcode;
}

?>

<form action='<?=$URL_dev?>/RMS/pay/SB_schoolscan/?' method=POST >
<input type=hidden name=merchant_id value='<?=$merchant_id?>'>
<input type=hidden name=amount value='<?=$amount?>'>
<input type=hidden name=orderid value='<?=$oid?>'>
<input type=hidden name=bill_name value='<?=$name?>'>
<input type=hidden name=bill_email value='<?=$email?>'>
<input type=hidden name=bill_mobile value='<?=$mobile?>'>
<input type=hidden name=bill_desc value='<?=$description?>'>
<input type=hidden name=country value='<?=$country?>'>
<input type=hidden name=vcode value='<?=$v_code?>'>
<input type=submit value=' PAY NOW '>
</form>