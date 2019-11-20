<?php 
include('database/dbconfig.php');
include('include/header.php');?>

<style type="text/css">
		#timediv .btn {
			  border: none;
			  outline: none;
			  padding: 10px 16px;
			  background-color: #f1f1f1;
			  cursor: pointer;
			}

			/* Style the active class (and buttons on mouse-over) */
		#timediv .active, .btn:hover {
			  background-color: crimson;
			  color: white;
			}
</style>

	<!--- Check Availbility --->
 	<div id="booking" class="section" style="background-color: whitesmoke; padding-top: 10px; padding-bottom: 10px;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 col-sm-6 col-xl-12">
						<div class="booking-form">
							<form action="#" method="post">
                                <?php 
                                     $querys="SELECT name FROM services";
                                          $querys_run=mysqli_query($con,$querys);
                                        ?>
                                <div class="row">
    								<div class="form-group col-4 col-sm-4">
    									<span class="form-label">Services</span>
    										<select class="form-control" name="services" required>
    											<option value="" selected disabled>Select Services</option>
                                                    <?php
                                                    if(mysqli_num_rows($querys_run)>0)
                                                    {
                                                        while($row= mysqli_fetch_assoc($querys_run))
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
                                     
    								<div class="form-btn col-4 col-sm-4"><br/>
    									<button type="submit"class="btn btn-outline-danger btn-lg btn-block" name="check_now_btn">Check Availibility</button>
    								</div>
                                </div>
						  </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
if(isset($_POST['check_now_btn']))
{
	$services_type=$_POST['services'];
	$services_date=$_POST['shootdate'];	
    ?>

    <!--- Booking Container  -->
	<div class="container">
		<div class="row mt-15">
			<div class="bg-danger col-12 ">
				<p style="font-size: 20px; font-weight:bold; letter-spacing: 2px; text-align: center;color: white; margin: 0px">
				Booking Overview</p>
			</div>
		</div>
		
		<div class="row mt-15">
		<?php

			$query="SELECT * FROM expert where job='$services_type'";
	    	$query_run=mysqli_query($con,$query);
	        if(mysqli_num_rows($query_run)>0)
	        {
	         while($row= mysqli_fetch_assoc($query_run))           
	         {
	         	?>
			<div class="col-4" style="margin-right: 20px;">
				<div class="card" style="width: 18rem;">
				 	<?php echo '<img src="uploads/expert/'.$row['image'].'" class="card-img-top" width="250px;" height="250px;">' ?>
				  	<div class="card-body">
				  		<?php $sename=$row['name']; ?>
				  		<?php $stype=$row['job'];?>
				    	<p class="card-text" style="text-align: center; font-weight: bold;font-size: 22px;"><?php echo $row['name']; ?></p>
				     	<p class="card-text" style="text-align: center; font-weight: bold;font-size: 16px;">Profession: &nbsp<?php echo $row['job']; ?></p>
				  	</div>
				</div>
			</div>
			<?php
			 }
			}
		   ?>	
			<!-- choose booking timings-- -->
			<div class="col-4 bg-white" style="margin-right: 70px;">
				<p class="bg-gray text-dark mt-2 pt-1 pb-1 text-center">Booking Details</p>

				<p class="bg-gray text-dark mt-2 pt-1 pb-1">&nbsp&nbsp 
					Services Expert  : &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $sename ?> </p>


				<p class="bg-gray text-dark mt-2 pt-1 pb-1">&nbsp&nbsp 
					Services Type : &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $services_type ?> </p>

				<p class="bg-gray text-dark mt-2 pt-1 pb-1">&nbsp&nbsp 
					Booking Date  : &nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $services_date ?> </p>

				<p class="bg-gray text-dark mt-2 pt-1 pb-1">&nbsp&nbsp 
					Choose Time of Slot : </p><br/>
				<!-- 	<?php 

					$sql= "SELECT * from booking where date= '$services_date' and services='$services_type'";
					$sql_query=mysql_query($con,$sql);
					if(mysqli_num_rows($sql_query)>0)
					{
						while ($row=mysqli_fetch_assoc($sql_query))
						 {
							
						}
					}
				?> -->
				
				

				<div id="timediv">
					<button type="button"class="btn" value ="9:00AM-12-00AM" style="margin-right: 30px;">9:00AM-12-00AM</button>

					<button type="button" class="btn" value="2:00PM-5-00PM">2:00PM-5-00PM</button>
				
				</div>
				

			</div>


			<!-- booking summary ---- -->
			<div class="col-3 bg-gray">
				<p class="bg-dark text-white mt-2 pt-1 pb-1 text-center">Booking Summary</p>
				<?php

	   			$query1="SELECT * FROM services where name='$services_type'";
	    		$query1_run=mysqli_query($con,$query1);
	   	        if(mysqli_num_rows($query1_run)>0)
		        {
		         while($row= mysqli_fetch_assoc($query1_run))           
		         {
		         	
		         	$price=$row['price'];
		         	$sprice=($price*5)/100;
		         	$fprice=$price+$sprice;
		         	?>
		         	<p class="bg-white text-dark mt-3 pt-1 pb-1">&nbsp&nbsp 
						Booking Date :<span  style="float: right; margin-right: 30px;"><?php echo $services_date ?></span> </p>

					<p class="bg-dark text-white mt-3 pt-1 pb-1">&nbsp&nbsp&nbsp 
						Amount: <span  style="float: right; margin-right: 30px;">Rs &nbsp<?php echo $price;?>.00</span> </p>

				
					<p class="bg-white text-dark mt-3 pt-1 pb-1">&nbsp&nbsp&nbsp 
						Service Charge :<span  style="float: right; margin-right: 40px;"> Rs &nbsp<?php echo $sprice; ?>.00</span> </p>

					<p class="bg-dark text-white mt-3 pt-1 pb-1">&nbsp&nbsp&nbsp 
						Total Amount :<span  style="float: right; margin-right: 30px;"> Rs &nbsp<?php echo $fprice; ?>.00</span></p>

				<?php 
				 }
				}
				?>
				<hr/>
				<?php include('include/script.php'); ?>
				<script type="text/javascript">
					$("button").click(function() {
					    var fired_btn = $(this).val();
					    document.getElementById("mytime").value=fired_btn;
					     // alert(fired_btn);
				});
				</script>
				
			
				
				<br/>
				<div class="float-right">

				
					<form action="finalcode.php" method="get">

						<input type="hidden" value="<?php echo $sename;?>" name="service_expert">
						<input type="hidden" value="<?php echo $services_type;?>" name="service_type">
						<input type="hidden" value="<?php echo $services_date;?>" name="service_date">
						<input type="hidden" id="mytime" name="service_time">
						<input type="hidden" value="<?php echo $price;?>" name="service_price">
						<input type="hidden" value="<?php echo $sprice;?>" name="service_charge">
						<input type="hidden" value="<?php echo $fprice;?>" name="service_amount">
						<!-- back button -->
						<button class="btn btn-dark"  name="back_now_btn" 
						style="padding-left: 30px; padding-right: 30px; margin-right: 10px;"
						onclick="location.href ='booknow.php'";>Back</button>
						<!--- next button -->
						<button  type="submit" class="btn btn-danger" name="book_now_btn"
						style="padding-left: 30px; padding-right: 30px;">Next</button>


					</form>
				</div>
			</div>

		</div>

	</div>


<?php
}

?>
			<script type="text/javascript">
				// Get the container element
				var btnContainer = document.getElementById("timediv");

				// Get all buttons with class="btn" inside the container
				var btns = btnContainer.getElementsByClassName("btn");

				// Loop through the buttons and add the active class to the current/clicked button
				for (var i = 0; i < btns.length; i++) {
				  btns[i].addEventListener("click", function() {
				    var current = document.getElementsByClassName("active");

				    // If there's no active class
				    if (current.length > 0) {
				      current[0].className = current[0].className.replace(" active", "");
				    }

				    // Add the active class to the current/clicked button
				    this.className += " active";
				  });
				}
			</script>
