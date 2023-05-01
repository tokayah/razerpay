<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="RAZER FOR ALL YAHOO">
    <meta name="keywords"       content="ctie,razer,payment gateway">
    <meta name="author"         content="ctie">
    <title>RAZERPAY</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/normalize.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

// RECEIPT
$rec_no = $_GET['trans_id'];

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

<!-- Navigation area starts -->
<div class="menu-area navbar-fixed-top">
    <div class="container">
        <div class="row">

            <!-- Navigation starts -->
            <div class="col-md-12">
                <div class="mainmenu">
                    <div class="navbar navbar-nobg">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="https://razerpay.schoolscan.xyz/"><span>RAZER</span>PAY</a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smooth_scroll" href="https://razerpay.schoolscan.xyz/">HOME</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation ends -->

        </div>
    </div>
</div>
<!-- Navigation area ends -->


<section id="action" class="action-area section-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Payment Successful. <br>We have receive your payment. Thank you very much.</h2>
            </div>
        </div>
    </div>
</section>

<!-- Price area starts -->
<section id="pricing" class="pricing-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Receipt Details : REC/<?php echo $rec_no;?></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="price-item" data-connectors="1">
                    <div class="info">
                        <p class="level">Personal</p>
                    </div>
                    <div class="features">
                        <ul>
                            <li>15 Users</li>
                            <li class="even">10 Projects</li>
                            <li>30 GB of Storage</li>
                            <li class="even">5 Workspaces</li>
                            <li>Private Forums</li>
                            <li class="even">Enhanced Security</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Price area ends -->


<div id="subscribe" class="subscribe-area section-big">
    <div class="container">
        <div class="subscribe-box">

        </div>
    </div>
</div>

<!-- Footer area starts -->
<footer class="footer-area">
    <div class="container">
        <p>&copy; <?php echo date("Y")?> Copyright CTIE</p>
    </div>
</footer>
<!-- Footer area ends -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.mixitup.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/main_script.js"></script>
</body>

</html>
