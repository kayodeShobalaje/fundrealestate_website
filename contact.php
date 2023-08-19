<!DOCTYPE html>
<html lang="zxx">
    
<head>
    <meta charset="utf-8" />
    <title>Contact Us | Fundrealestate - Real Estate Funders Negotiation Software</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Fundrealestate,real estate, funding, negotiation,Nigeria" name="keywords" />
    <meta content="Kayode Shobalaje" name="author" />

    <!-- CSS Files
================================================== -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="src/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="src/css/particles.css" rel="stylesheet" type="text/css" />
    <link href="src/css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <!-- <link id="colors" href="css/colors/scheme-02.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" /> -->

    <!-- site icon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- site data -->
    <meta property="og:title" content="Fundrealestate - Real Estate Funders Negotiation Software">
    <meta property="og:description" content="Fundrealestate - Nigeria's first and only Real Estate Funders Negotiation Software">
    <meta property="og:image" content="https://fundrealestate.ng/src/img/1200.jpg">
    <meta name="twitter:title" content="FundRealEstate">
    <meta name="twitter:site" content="@fundrealestate">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Fundrealestate - Nigeria's first and only Real Estate Funders Negotiation Software">
    <meta name="twitter:image" content="https://fundrealestate.ng/src/img/1200.jpg">
</head>
<body>

    <div class="header-menu p-4">
        <div class="row">
            <div class="col-md-2">
                <a href="./"><img src="src/img/white-logo.png" class="phnx" alt="Fundrealestate logo"></a>
            </div>
            <div class="col-md-7 p-u-10 text-center">
                <ul class="menu_center">
                    <li><a href="./#features" class="btn-custom no-border">Features</a></li>
                    <li><a href="./#howItWorks" class="btn-custom no-border">How It Works</a></li>
                    <li><a href="about" class="btn-custom no-border">About</a></li>
                    <li><a href="#" class="btn-custom no-border active">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 text-right mobile-login p-u-10">
                <div class="menu_right">
                    <a href="https://fundrealestate.ng/portal/login" class="btn-custom no-border">Login</a>
                    <a href="https://fundrealestate.ng/portal/login/register" class="btn-custom">Sign Up for free</a>
                </div>

                <a href="javascript:void(0)" class="mobile-menu"><i data-feather="align-left"></i></a>
            </div>
        </div>
    </div>

    <div class="menu_mobile">
        <a href="./"><img src="src/img/white-logo.png" class="phnx" alt="Fundrealestate logo"></a>
        <a href="javascript:void(0)" class="closex"><i data-feather="x"></i></a>
        <div class="clearfix"></div>

        <div class="pd_in">
            <h6 class="text-white">MENU</h6>
            <ul class="menu_c m-t-40">
                <li><a href="./#features" class="btn-custom no-border">Features</a></li>
                <li><a href="./#howItWorks" class="btn-custom no-border">How It Works</a></li>
                <li><a href="about" class="btn-custom no-border">About</a></li>
                <li><a href="#" class="btn-custom no-border active">Contact</a></li>
                <li><a href="https://fundrealestate.ng/portal/login" class="btn-custom no-border">Login</a></li>
                <li><a href="https://fundrealestate.ng/portal/login/register" class="btn-custom no-border">Sign up for free</a></li>
            </ul>
        </div>
    </div>

    <div class="container_cstm bghj cstm_bg">
        <div class="flt">
            <div class="black_circle"></div>
            
        </div>
        <div class="row hbox">
            <div class="col-md-12 text-center p-4 m-b-20">
                <h1 class="header-text mb-text wow fadeIn fadeInUp" data-wow-duration="2s"><span class="text-circle">Contact</span></h1>
                <div class="small_text wow bounceInUp">Have Question ? Get in touch!</div>
            </div>
        </div>
    </div>

    <div class="container text-center m-b-50">
        
    </div>


    <div class="container">
        <div class="row m-t-20 m-b-50">
            <div class="col-md-6 text-center">
                <img src="src/img/contact.svg" alt="">
            </div>
            <div class="col-md-6">
                <h1 class="hdipo ttsx m-t-50 m-b-50">Talk to us!</h1>

                <form action="#" method="post" class="p-2">
                    <?php
                    if (isset($_POST['sendmsg'])){
                        $TEST_SERVER = 'localhost';
                        $TEST_USERNAME = 'root';
                        $TEST_PASSWORD = '';
                        $TEST_DATABASE = 'fundrealestate';
                        
                        $PROD_SERVER = 'localhost';
                        $PROD_USERNAME = 'fundrea1_por';
                        $PROD_PASSWORD = 'iOqhy;)Prc?N';
                        $PROD_DATABASE = 'fundrea1_portal';

                        $con=mysqli_connect($TEST_SERVER,$TEST_USERNAME,$TEST_PASSWORD,$TEST_DATABASE);// Check connection

                        // $con=mysqli_connect($PROD_SERVER,$PROD_USERNAME,$PROD_PASSWORD,$PROD_DATABASE);// Check connection
                        if (mysqli_connect_errno()){  
                            echo "Failed to connect to MySQL: ".mysqli_connect_error();
                        } else{
                            //echo 'successfully connected';
                        }

                        $name = addslashes($_POST['fullname']);
                        $email = $_POST['email'];
                        $subject = addslashes($_POST['subject']);
                        $msg = addslashes($_POST['msg']);
                        $now = Date('y-m-d h:i:s');

                        // print_r($_POST);

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            // invalid emailaddress
                            echo '<div class="alert alert-danger"><strong>Error:</strong> Email Address entered is invalid</div>';
                        } else{
                            $q=mysqli_query($con,"select * from contact where email_address='$email' AND subject='$subject'");
                            $n=mysqli_num_rows($q);

                            if ($n>0){
                                echo '<div class="alert alert-warning"><strong>NOTICE:</strong> You have sent this message before and it has been logged already</div>';
                            } else {
                                $qqq=mysqli_query($con,"INSERT INTO contact(fullname,email_address,subject,msg,date_created) values('$name','$email','$subject','$msg','$now')");

                                if ($qqq){
                                    echo '<div class="alert alert-success"><strong>Thanks!</strong> Messaged logged successfully</div>';
                                } else{
                                    echo '<div class="alert alert-danger"><strong>Error:</strong> Unable to log your message, Please try again later.</div>';
                                }
                            }
                        }

                    }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fullname" class="text-white">Full Name*</label>
                            <input type="text" name="fullname" id="fullname" class="formcontrol" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="text-white">Email Address*</label>
                            <input type="email" name="email" id="email" class="formcontrol" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-md-12">
                            <label for="subject" class="text-white">Subject*</label>
                            <input type="text" name="subject" id="subject" class="formcontrol" placeholder="Your Subject" required>
                        </div>
                        <div class="col-md-12 m-t-20 m-b-20">
                            <label for="msg" class="text-white">Message*</label>
                            <textarea name="msg" id="msg" class="formcontrol" placeholder="Please enter your message here" rows="10" required></textarea>
                        </div>
                        <div class="col-md-12 m-t-20 m-b-20">
                            <button class="btn btn-success btn-lg" name="sendmsg" id="sendmsg">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <img src="src/img/fundrealestate_bg.jpg" class="page_bg" alt="">

    <br><br>
    <div class="curves m-t-50 m-b-50">&nbsp;</div>

    <div class="container m-t-40 p-4 pfdi_dhj">

        <div class="row">
            <div class="col-md-4 text-center p-4">
                <div class="hexagon"><i data-feather="phone"></i> </div>
                <h4 class="text-gy">Phone Number</h4>
                <h5 class="text-white djbsds"><strong>+234 (81) 689 0 2512</strong></h5>
            </div>
            <div class="col-md-4 text-center p-4">
                <div class="hexagon"><i data-feather="mail"></i> </div>
                <h4 class="text-gy">Email Address</h4>
                <h5 class="text-white djbsds"><strong>info@fundrealestate.ng</strong></h5>
                <h5 class="text-white djbsds"><strong>contact@fundrealestate.ng</strong></h5>
            </div>
            <div class="col-md-4 text-center p-4">
                <div class="hexagon"><i data-feather="map-pin"></i> </div>
                <h4 class="text-gy">Office Address</h4>
                <h5 class="text-white djbsds"><strong>12b admiralty road, lekki,<br>lagos state, Nigeria</strong></h5>
            </div>
        </div>

    </div>


    <div class="container strbxx mb-14 other_p">
        <div class="get_started text-center">
            <div class="text-white small_text m-b-20">BECOME A FUNDER</div>
            <h1 class="text-white ttsx m-b-20">We are trustedby over 5000+ people. Get a <span class="text-circle">Property</span> funded today.</h1>
            <section class="m-b-50 text-white">We are a company that brings real estate funding in your own terms.</section>
            <a href="https://fundrealestate.ng/portal/login/register" class="btn-custom">Get Started</a>
        </div>
    </div>


<br><br>

<div class="footer m-b-50 m-t-40">
    <div class="container">
        <div class="text-center">
            <img src="src/img/white-logo.png" class="phnx" alt="Fundrealestate logo">
        </div><br><br>
        <div class="row">
            <div class="col-md-4 p-2 xxc">
                <a href="https://fundrealestate.ng"><h4 class="text-white"><i data-feather="globe"></i> fundrealestate.ng</h4></a>
            </div>
            <div class="col-md-4 p-2 text-center">
                <small class="text-yellow">Follow Us on our social media</small>
                <h4 class="text-white m-t-10"><i data-feather="facebook"></i> <i data-feather="instagram"></i> <i data-feather="twitter"></i> fundrealestate.ng</h4>
            </div>
            <div class="col-md-4 text-center p-2">
                <img src="src/img/cashgain_logo.png" class="dkjhdds" alt="">
            </div>
        </div>

        <div class="text-center text-white m-t-50 m-b-50">
            <small>All Rights Reserved &copy; 2023 <strong>Fundrealestate</strong></small>
        </div>
    </div>

</div>

<br><br>

<!-- <script src="src/js/metaballs.js"></script> -->
<script src="src/js/jquery-3.2.1.min.js"></script>
<script src="src/js/feather.min.js"></script>
<script src="src/js/index.js"></script>
<script src="src/js/wow.min.js"></script>
<script>
    new WOW().init();
    feather.replace();
</script>
</body>
</html>