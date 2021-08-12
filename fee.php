<?php
session_start();
include('config/config.php');


$sql = "SELECT * FROM stud_fee WHERE regno = '" . $_SESSION['regno'] . "'";
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($result)){
$reg = $row['regno'];
$name = $row['name'];
$tuition = $row['tuitionfee'];
$hostel = $row['hostelfee'];
$status = $row['status'];
$img = $row['image'];

}
			?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/profile.css">
<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="welcome.php" >Fee payment</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              
              
            
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="assets/img/gallery/<?php echo $img; ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo "$name";?></span>
                </div>
              </div>
            </a>
            
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/gallery/campus.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo "$name";?></h1> 
            <p class="text-white mt-0 mb-5">This is your fee page. kindly check the fee to be paid and continue with the payment before deadline</p>
            <a href="payfee.php" class="btn btn-info">Pay the Fee</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assets/img/gallery/<?php echo $img; ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Fee details</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Fee information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Regno</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="<?php echo "$reg";?>" value="<?php echo "$reg";?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo "$name";?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Fee information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Tuition fee</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo "$tuition"; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Hostel Fee</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php echo "$hostel";?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Hosteller/Day Scholar</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="<?php echo"$status";?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
             
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        
      </div>
    </div>
  </footer>
</body>
