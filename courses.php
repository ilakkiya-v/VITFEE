<?php
session_start();
include('config/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM events WHERE id={$id}";
		$query_p=mysqli_query($db,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['amt']);
		
		}else{
			$message="no such event";
		}
	}
		echo "<script>alert('event has been added to the registered event')</script>";
		echo "<script type='text/javascript'> document.location ='regeve.php'; </script>";
}?>

<?php include('includes/header.php'); ?>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our events</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                                            
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
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured events</h2>
							
                        </div>
                    </div>
					
                </div>
				<div class="row">

	<?php
$sql = "SELECT * FROM events";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){?>

                
                    <div class="col-lg-4">
					
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
							
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/<?php echo htmlentities($row['image']);?>" alt=""></a>
                                </div>
								
                                <div class="properties__caption">
                                    
                                    <h3><a href="https://vit.ac.in/hackamotiVE/"><?php echo htmlentities($row['event']);?></a></h3>
                                    <p><?php echo htmlentities($row['descr']);?>
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            
                                            
                                        </div>
                                        <div class="price">
                                            <span><?php echo htmlentities($row['amt']);?> ₹ for one</span>
                                        </div>
                                    </div>
                                    <div class="action"><a href="courses.php?page=product&action=add&id= <?php echo $row['id']; ?>" class="border-btn border-btn2">Register</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php }?>
                            </div>
								
                        </div>
					
                    </div>
               

				
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mt-40">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        
           
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
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
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