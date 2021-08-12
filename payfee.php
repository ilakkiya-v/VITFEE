<?php 
session_start();
include('config/config.php');
$sql = "SELECT * FROM stud_fee WHERE regno = '" . $_SESSION['regno'] . "'";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
$tuition = $row['tuitionfee'];
$hostel = $row['hostelfee'];
}
$total = $tuition + $hostel ;

	if (isset($_POST['submit'])) {

		mysqli_query($db,"INSERT INTO payfee(regno, paymentMethod, fee_or_event, amount) VALUES ('".$_SESSION['regno']."','".$_POST['paymethod']."','Tuition/Hostel fee',$total)");
		mysqli_query($db, "UPDATE stud_fee SET hostelfee= 0,tuitionfee= 0 WHERE regno = '".$_SESSION['regno']."'");
		
		header('location:receiptfee.php');
	}
	

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clubs | Events</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>

<body>
  
    <!-- Preloader Start -->
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="welcome.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" ><a href="welcome.php">Home</a></li>
                                            <li><a href="courses.php">Events</a></li>
                                                <li><a href="profile.php">Profile</a></li>
                                                <li><a href="#">Payment</a>
                                                    <ul class="submenu">
                                                        <li><a href="regeve.php">events payment</a></li>
                                                        <li><a href="fee.php">Tuition payments</a></li>
                                                        <li><a href="payments.php">Payments Done</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="chatbot.php">Chatbot</a></li>
                                            <!-- Button -->
                                            
                                            <li class="button-header"><a href="logout.php" class="btn btn3">Log out</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>  
               <!-- Mobile Menu -->
               <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Header End -->
<main>
   <!--? slider Area Start-->
   <section class="slider-area slider-area2">
     <div class="slider-active">
       <!-- Single Slider -->
       <div class="single-slider slider-height2">
         <div class="container">
           <div class="row">
             <div class="col-xl-8 col-lg-11 col-md-12">
               <div class="hero__caption hero__caption2">
                 <h1 data-animation="bounceIn" data-delay="0.2s">Company insights</h1>
                 <!-- breadcrumb Start-->
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="courses.php">Events</a></li> 
                  </ol>
               </nav>
               <!-- breadcrumb End -->
            </div>
         </div>
      </div>
   </div>          
</div>
</div>
</section>


					<h2>Choose Payment Method</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Select your Payment Method
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
	    <form name="payment" method="post">
	    <input type="radio" name="paymethod" value="UPI" checked="checked"/> UPI
	     <input type="radio" name="paymethod" value="Internet Banking"/>Internet Banking</a>
	     <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card </a><br /><br />
	     <input type="submit" value="submit" name="submit" class="btn btn-primary">
	    	

	    </form>		
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
					
<!-- footer-bottom area -->
<div class="footer-bottom-area">
   <div class="container">
     <div class="footer-border">
       <div class="row d-flex align-items-center">
         <div class="col-xl-12 ">
           <div class="footer-copy-right text-center">
             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- Footer End-->
</div>
</footer> 
<!-- Scroll Up -->

<div id="back-top" >
   <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>				
</body>
</html>