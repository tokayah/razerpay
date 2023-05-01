<?php

// URL DEV & Live
$URL_dev = "https://sandbox.merchant.razer.com";
$URL_live = "https://pay.merchant.razer.com";
$URL_batch ="https://api.merchant.razer.com/RMS/query/q_by_tids.php";
$tIDS = "30597209|30597195";
$oIDS = "INV/T1/22-23/4582|PL-7";

$merchant_id = 'SB_schoolscan';
$amount1 = "2";
$amount2 = "350";
$amount = $amount1+$amount2;

$v_key = '4b97dc31b1ad284b004b7cf236bd422f';

$StatCode ="00";

$skey = md5($merchant_id & $oIDS & $v_key);
$VrfKey = md5($amount&$merchant_id&$TranID&$StatCode);

?>

<form action='https://api.merchant.razer.com/RMS/query/q_by_oids.php' method=POST >
<input type=hidden name=skey value='<?=$skey?>'>
<input type=submit value=' PAY NOW '>
</form>