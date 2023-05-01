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
                            <a class="navbar-brand" href=""><span>RAZER</span>PAY</a>
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
                                    <li class="active"><a class="smooth_scroll" href="#slider">HOME</a></li>
                                    <li><a class="smooth_scroll" href="#pricing">PRICE</a></li>
                                    <li><a class="smooth_scroll" href="#contact">CONTACT</a></li>
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



<!-- Slider area starts -->
<section id="slider" class="slider-area">
    <div class="table">
        <div class="table-cell">
            <div class="intro-text">
                <div class="container">
                    <div class="row">

                        <!-- intro image -->
                        <div class="col-md-6 col-md-push-6 col-sm-12 intro-img">
                            <img src="assets/img/slider/2.png" alt="">
                        </div>

                        <!-- intro text -->
                        <div class="col-md-6 col-md-pull-6 col-sm-12">
                            <h1>The Best Payment Gateway</h1>
                            <p>Starting at <span class="line-through">RM 5.00</span> <strong>2.00/month</strong></p>
                            <ul>
                                <li>Free MCD / KFC</li>
                                <li>1 click hehe</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-white">Get Started now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider area ends -->



<!-- Price area starts -->
<section id="pricing" class="pricing-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Choose Your Plan</h2>
                    <p>Choose our very cheap and best quality hosting services package and run your business like a boss.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="price-item" data-connectors="1">
                    <div class="info">
                        <p class="level">Personal</p>
                        <p class="price">
                            <span class="dollar">RM</span>
                            <span class="number">2</span>
                            <span>/ mon</span>
                        </p>
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
                        <input type=submit class="btn" value=' PAY NOW '>
                    </form>
                </div>
            </div>

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="price-item featured" data-connectors="1">
                    <div class="info">
                        <p class="level">Enterprise</p>
                        <p class="price">
                            <span class="dollar">RM</span>
                            <span class="number">3</span>
                            <span>/ mon</span>
                        </p>
                    </div>
                    <div class="features">
                        <ul>
                            <li>25 Users</li>
                            <li class="even">100 Projects</li>
                            <li>500 GB of Storage</li>
                            <li class="even">5 Workspaces</li>
                            <li>Private Forums</li>
                            <li class="even">Enhanced Security</li>
                        </ul>
                    </div>
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
                        <input type=submit class="btn" value=' PAY NOW '>
                    </form>
                </div>
            </div>

            <!-- Pricing Table -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="price-item" data-connectors="1">
                    <div class="info">
                        <p class="level">Business</p>
                        <p class="price">
                            <span class="dollar">RM</span>
                            <span class="number">4</span>
                            <span>/ mon</span>
                        </p>
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
                        <input type=submit class="btn" value=' PAY NOW '>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Price area ends -->


<!-- Contact area starts -->
<section id="contact" class="contact-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>Choose our very cheap and best quality hosting services package and run your business like a boss.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <!-- Contact form starts -->
                <div class="contact-form">

                    <form id="ajax-contact" action="assets/mailer.php" method="post">
                        <div class="form-group in_name">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group in_email">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group in_message">
                            <textarea rows="5" name="message" class="form-control" id="message" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                            <input type="submit" value="Send" name="submit" id="submitButton" class="btn" title="Submit Your Message!">
                        </div>
                    </form>

                    <!-- Submition status -->
                    <div id="form-messages"></div>

                </div>
                <!-- Contact form ends-->
            </div>

            <div class="col-md-6">

                <div class="address">
                    <h3 class="subtitle">Contact Info</h3>
                    <div class="address-box clearfix">
                        <p>1502 N Elm St, Fairmont, MN, 56031 <br>United States</p>
                    </div>
                    <div class="address-box clearfix">
                        <p><a href="tel:015110022">+00 123-456-789</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <p><a href="mailto:email@yourdomain.com">email@yourdomain.com</a></p>
                    </div>
                    <div class="address-box clearfix">
                        <p><a href="http://www.yourdomain.com">www.yourdomain.com</a></p>
                    </div>

                    <ul class="social-links">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                    </ul>

                </div>

            </div>


        </div>

    </div>
</section>
<!-- Contact area ends -->



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
