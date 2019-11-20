<?php
// include('security.php');
// include('include/header.php'); 
// include('include/navbar.php');
include('viewall_apt.php');
// include('include/script.php'); 
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
<?php
if(isset($_POST['reject_btn'])) 
{
	$reject_id =$_POST['reject_id'];
	$sql= "UPDATE appointments set status='Rejected' WHERE id='$reject_id'";
	$sql_run=mysqli_query($con,$sql);
	if($sql_run)
		{
			?>
			<!-- Success Modal -->
		    <div class="modal fade" id="modalappsuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
		        <div class="modal-dialog modal-dialog-centered" role="document">
		            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="sucessModalCenterTitle">Rejection Success</h5>
		                
		                <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <p style="color:crimson;font-size:16px; font-weight:bold;">Well </p>
		                <p>Appointment rejected succesfully </p>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"onclick="location.href = 'rejected_apt.php'";>Close</button>
		                <button type="button" class="btn btn-outline-success" onclick="location.href ='rejected_apt.php'";>Okay</button>
		            </div>
		            </div>
		        </div>
		    </div>

		    <!-- failure Modal -->
		    <div class="modal fade" id="modalappfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
		        <div class="modal-dialog modal-dialog-centered" role="document">
		            <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="failureModalCenterTitle">Rejection Failure</h5>
		                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
		                <p>We are facing some techincal Issue.Try again Later ! </p>
		                
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.href = 'viewrecent_apt.php'";>Close</button>
		                <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewrecent_apt.php'";>Try Again</button>
		            </div>
		            </div>
		        </div>
		    </div>
	    <?php
	        echo "<script type='text/javascript'>
          	$(document).ready(function(){
          	$('#modalappsuccess').modal('show');
          	});
          	</script>";
		}
		else
		{
			echo "<script type='text/javascript'>
          	$(document).ready(function(){
          	$('#modalappfailure').modal('show');
          	});
          	</script>";
		}
}	
?>
	</div>
</div>
<!-- content-wrapper ends -->
<?php 
// include('include/footer.php');
// include('include/script.php'); 
?>