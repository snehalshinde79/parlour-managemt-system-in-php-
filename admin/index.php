<?php 
include('security.php');
include('include/header.php');
include('include/navbar.php');
?>
       <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
              
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Services<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <?php  
                      $s_query= "SELECT * FROM services";
                      $s_result=mysqli_query($con,$s_query);
                      $s_rows=mysqli_num_rows($s_result);
                    ?>
                    <h2 class="mb-5"><?php echo $s_rows;?></h2>
                    <h6 class="card-text">Running Smoothly</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Appointments<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php  
                      $a_query= "SELECT * FROM appointments";
                      $a_result=mysqli_query($con,$a_query);
                      $a_rows=mysqli_num_rows($a_result);
                    ?>
                    <h2 class="mb-5"><?php echo $a_rows;?></h2>
                    <h6 class="card-text">Updating Frequently</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Message<i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <?php  
                      $c_query= "SELECT * FROM contact";
                      $c_result=mysqli_query($con,$c_query);
                      $c_rows=mysqli_num_rows($c_result);
                    ?>
                    <h2 class="mb-5"><?php echo $c_rows;?></h2>
                    <h6 class="card-text">Reaching Back them sooner</h6>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->

<?php 
include('include/footer.php');
include('include/script.php');
?>
