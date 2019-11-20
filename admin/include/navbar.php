
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><p style="text-align: center; font-weight: bold; font-size: 36px;"><span style="color: red;">IN</span>STYLE</p></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><p style="text-align: center; font-weight: bold; font-size: 14px;"><span style="color: red;">IN</span>STYLE</p></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                <?php 
                  $email_login=$_SESSION['username'];
                  $sql ="SELECT * from user where email='$email_login'";
                  $sql_run=mysqli_query($con,$sql);
                  if(mysqli_num_rows($sql_run)>0)
                  {
                    while ($row=mysqli_fetch_assoc($sql_run))
                    {
                     $name=$row['username'];
                     
                      echo '<img src="img/profile/'.$row['image'].'">' 
                      ?>
                  <!-- <img src="assets/images/faces/face1.jpg" alt="image"> -->
                  <span class="availability-status online"></span>
                                  <?php
                    }
                  }
                  ?>
                </div>

                <div class="nav-profile-text">
               
                   <?php 
                  $email_login=$_SESSION['username'];
                  $sql ="SELECT * from user where email='$email_login'";
                  $sql_run=mysqli_query($con,$sql);
                  if(mysqli_num_rows($sql_run)>0)
                  {
                    while ($row=mysqli_fetch_assoc($sql_run))
                    {
                      ?>
                      <p class="mb-1 text-black"><?php echo $row['username'];?></p>
                    <?php
                    }
                  }
                  ?>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <form action="logout.php" method="post">
                  <!-- <a class="dropdown-item" href="logout.php"> --> 
                  <button type="submit" class="btn btn-outline-info"name="logout_btn"><i class="mdi mdi-logout mr-2 text-primary"></i> Signout </button>
                </form>
                
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>

            <li class="nav-item nav-logout d-none d-lg-block">
              <form action="logout.php" method="post">
               <button type="submit" name="logout_btn" style="background: white; border: none;"><i class="mdi mdi-power"></i></button>
              </form>

            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                <?php 
                  $email_login=$_SESSION['username'];
                  $sql ="SELECT * from user where email='$email_login'";
                  $sql_run=mysqli_query($con,$sql);
                  if(mysqli_num_rows($sql_run)>0)
                  {
                    while ($row=mysqli_fetch_assoc($sql_run))
                    {
                      ?>
                   <?php echo '<img src="img/profile/'.$row['image'].'">' ?>
                  <!-- <img src="assets/images/faces/face1.jpg" alt="profile"> -->
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <?php
                    }
                  }
                ?>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $name;?></span>
                  <span class="text-secondary text-small">Administrator</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">
                <span class="menu-title">Search Appointment</span>
                <i class="mdi mdi-home menu-icon  mdi mdi-magnify"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#appt" aria-expanded="false" aria-controls="appt">
                <span class="menu-title">Appointments</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-assistant menu-icon "></i>
              </a>
              <div class="collapse" id="appt">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="viewall_apt.php"> All appointment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="viewrecent_apt.php">Recent appointment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="approved_apt.php">Approved appointment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="rejected_apt.php">Rejected appointment</a></li>
                       

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-transcribe-close menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="addservice.php">Add Services</a></li>
                  <li class="nav-item"> <a class="nav-link" href="viewservice.php">View Services</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Portfolio</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-star menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basics">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="addportfolio.php">Add Portfolio</a></li>
                  <li class="nav-item"> <a class="nav-link" href="viewportfolio.php">View Portfolio</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="viewmessage.php">
                <span class="menu-title">Message</span>
                <i class="mdi mdi-tooltip-text menu-icon"></i>
              </a>
            </li>
            </li>


            
            
          </ul>
        </nav>