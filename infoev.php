<?php
session_start();
include('config/config.php');
 include('sample.php');
?>
<?php include('includes/header.php');?>
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
                 <h1 data-animation="bounceIn" data-delay="0.2s">Event attendee info</h1>
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
<form action = "receipevent.php" method="post">
<?php

for ($x = 0; $x < $quantity; $x++) {
	
echo "<h2 align = 'center'>enter info of the ticket $x+1 for the $namee event.</h5>";
?>
<div align = "center">

 Registration Number:<br>
  <input type="text" id="regno" name="<?php echo "regno$x"?>"><br>
  <?php echo "regno$x"?>
  Full Name:<br>
  <input type="text" id="name1" name="<?php echo "name$x"?>"><br>
  <?php echo "name$x"?>
<br>
<br>

<?php } ?>
<br>
<br>
<br>
<input type="submit" name="submit" class="btn btn-upper btn-primary pull-right outer-right-xs"/>
</form>
</div>
<br>



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



