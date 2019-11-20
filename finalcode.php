<?php 
include('database/dbconfig.php');
include('include/header.php');
include ('include/scripts.php');

if(isset($_GET['book_now_btn']))
{
	$service_expert=$_GET['service_expert'];
	$service_type=$_GET['service_type'];
	$service_date=$_GET['service_date'];
	$service_time=$_GET['service_time'];
	$service_price=$_GET['service_price'];
	$service_charge=$_GET['service_charge'];
	$service_amount=$_GET['service_amount'];

	$check="SELECT * from appointments where  service_type='$service_type' AND date='$service_date' AND time='$service_time'";
	$check_run=mysqli_query($con,$check);
	if(mysqli_num_rows($check_run)>0)
	{
		
		?>
		<!-- Success Modal -->
        <div class="modal fade" id="modalsuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="delModalCenterTitle">Appointment Failure</h5>
                      
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry...!</p>
                      <p>We already have appointment of your date & time !</p>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.href='booknow.php'";>Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'booknow.php'";>OKay</button>
                  </div>
                  </div>
              </div>
        </div>
        <?php 
        
         echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modalsuccess').modal('show');
          });
          </script>";
         // header("Location:bookcode.php");

	}

	?>

	<div class="container">
		<div class="row mt-15">
			<div class="bg-danger col-12 " style="margin-bottom: 20px;">
				<p style="font-size: 20px; font-weight:bold; letter-spacing: 2px; text-align: center;color: white; margin: 0px">
				Personal Information</p>
			</div>
		</div>
		<div class="row col-12">
			<div class="col-6" style="margin-right: 70px;">
				<div class="col-12"style="background-color: whitesmoke;">
					<form action="#" method="post">
						<div class="form-group">
							<label class="form-label">Name</label>
							<input type="text"class="form-control" name="final_name" value="" required>
						
						</div>
						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="email"class="form-control"name="final_email" value="" required>
						
						</div>
						<div class="form-group">
							<label class="form-label">Phone</label>
							<input type="text"class="form-control" name="final_phone" value="" required>
						
						</div>
						<div class="form-group">
							<label class="form-label">Notes</label>
							<input type="text"class="form-control"name="final_notes" value="" required>
						
						</div>
						<div  style="float: right;">
							<button type="submit" class="btn btn-secondary" style="padding-left: 30px; padding-right: 30px; letter-spacing: 2px;" 
							onclick="location.href = 'bookcode.php'";>Back </button>
							<button type="submit" class="btn btn-danger" style="padding-left: 20px; padding-right: 20px; letter-spacing: 2px;" name="final_book_btn">Submit </button>
						</div>
					</form>
			    </div>
		    </div>
		    <div class="col-5">
				<?php

				$query="SELECT * FROM expert where job='$service_type'";
		    	$query_run=mysqli_query($con,$query);
		        if(mysqli_num_rows($query_run)>0)
		        {
		         while($row= mysqli_fetch_assoc($query_run))           
		         {
		         	?>
				<div class="col-12" style="margin-right: 20px;">
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
		    </div>
	</div>
<!----- Code execting after submit btn clicked -->
<?php 
}
?>

<?php
if(isset($_POST['final_book_btn']))
{
	    $final_name = $_POST['final_name'];
	    $final_email = $_POST['final_email'];
	    $final_phone = $_POST['final_phone'];
	    $final_notes= $_POST['final_notes'];

	    $service_expert=$_GET['service_expert'];
		$service_type=$_GET['service_type'];
		$service_date=$_GET['service_date'];
		$service_time=$_GET['service_time'];
		$service_price=$_GET['service_price'];
		$service_charge=$_GET['service_charge'];
		$service_amount=$_GET['service_amount'];

		// inserting into appointments database
	    $query="INSERT INTO appointments (name,email,phone,notes,service_type,service_expert,date,time,price)
	    VALUES('$final_name','$final_email','$final_phone','$final_notes','$service_type','$service_expert','$service_date','$service_time','$service_amount')";
		$query_run=mysqli_query($con,$query);
	    if($query_run)
	    {
	    	?>
	    	 <!-- Success Modal -->
	    <div class="modal fade" id="modal1success" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-centered" role="document">
	            <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="sucessModalCenterTitle"> Success</h5>
	                
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <p style="color:crimson;font-size:16px; font-weight:bold;">Thank You </p>
	                <p>Your Appointment request sent succesfully </p>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"onclick="location.href = 'index.php'";>Close</button>
	                <button type="button" class="btn btn-outline-success" onclick="location.href = 'index.php'";>Okay</button>
	            </div>
	            </div>
	        </div>
	    </div>

	    <!-- failure Modal -->
	    <div class="modal fade" id="modal1failure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
	        <div class="modal-dialog modal-dialog-centered" role="document">
	            <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="failureModalCenterTitle">Failure</h5>
	                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
	                <p>We are not recieving appointment Today.Try again Later ! </p>
	                
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.href = 'index.php'";>Close</button>
	                <button type="button" class="btn btn-outline-primary" onclick="location.href = 'booknow.php'";>Try Again</button>
	            </div>
	            </div>
	        </div>
	    </div>
	    <?php

	    echo "<script type='text/javascript'>
	        $(document).ready(function(){
	        $('#modal1success').modal('show');
	        });
	        </script>";
		}
		else
		{
	    echo "<script type='text/javascript'>
	        $(document).ready(function(){
	        $('#modal1failure').modal('show');
	        });
	        </script>";
		}

}

?>