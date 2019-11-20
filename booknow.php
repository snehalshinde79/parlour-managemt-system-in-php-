<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>INSTYLE</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to &nbsp<span style="color:red; font-weight: bold;">IN</span>STYLE</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Sat: 9.00 to 5.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: +91-888-4444-333</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off ">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><span style="color: red; font-weight: bold;">IN</span>STYLE</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="index.php#about">About Us</a></li>
                                    <li><a href="index.php#services">Services</a></li>
                                    <li><a href="index.php#portfolio">Portfolio</a></li>
                                    <li><a href="index.php#expert">our Expert</a></li>
                                    <li><a href="indx.php#contact">Contact</a></li>
                                </ul>

                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                  <a href="booknow.php" class="btn akame-btn active">Make An Appointment</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Booking Area Start -->

 	<div id="booking" class="section" style="background-color: white;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-5">
						<div class="booking-cta">
							<h2>The <span style="color: crimson">beauty </span>is not luxurious imagination</h2>
							<p style="font-weight:bold; color:white; font-size: 20px;">Get your Booking Done in one step</p>
						</div>
					</div>
                </div>
                <div class="row">
					<div class="col-12 col-md-12 col-sm-6 col-xl-12">
						<div class="booking-form">
							<form action="bookcode.php" method="post" style="background-color: whitesmoke">
                                <?php 
                                    include('database/dbconfig.php');
                                     $query="SELECT name FROM services";
                                          $query_run=mysqli_query($con,$query);
                                        ?>
                                <div class="row">
    								<div class="form-group col-4 col-sm-4" style="margin-left: 45px;">
    									<span class="form-label">Services</span>
    										<select class="form-control" name="services" required>
    											<option value="" selected disabled>Select Services</option>
                                                    <?php
                                                    if(mysqli_num_rows($query_run)>0)
                                                    {
                                                        while($row= mysqli_fetch_assoc($query_run))
                                                        {
                                                        ?>
    											         <option value="<?php echo $row['name']; ?>" name="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                                         <?php 
                                                        }
                                                    }
                                                    ?>

    										</select>
    								</div>

									<div class="col-4 col-sm-4">
										<div class="form-group">
											<span  for="shootdate"class="form-label">Booking Date</span>
										    <input class="form-control"required type="date" name="shootdate" id="shootdate" title="Choose your desired date" min="<?php echo date('Y-m-d'); ?>"/>
										</div>
									</div>
                                     
        							<!-- <div class="col-2">
										<div class="form-group">
											<span class="form-label">Booking Time</span>
											<input class="form-control" type="time" required>
										</div>
									</div> -->

    								<div class="form-btn col-3 col-sm-3" style="margin-right: 20px;"><br/>
    									<button type="submit"class="btn btn-danger btn-lg btn-block" name="check_now_btn">Check Availibility</button>
    								</div>
                                </div>
						  </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking Area End -->

    <?php include('include/footer.php'); ?>

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
