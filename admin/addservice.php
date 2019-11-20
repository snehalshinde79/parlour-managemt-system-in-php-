<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Services</h4>
                    <form action="addservicecode.php" method="post" enctype="multipart/form-data">
                    	<input type="hidden" name="service_id" >

								<div class="form-group col-6">
									<label class="form-label">Service Name</label>
										<input type="text" name="services"  class="form-control">									
								</div>


				        <div class="form-group col-6 ">
				            <label>Service Description</label>
				            <textarea name="description" class="form-control"></textarea>
				        </div>
				        <div class="form-group col-6">
				            <label>Price</label>
				            <input type="text" name="price"  class="form-control">
				        </div>


				        <div class="form-group col-6">
	                        <label>File upload</label>
	                        <input type="file" name="service_image" class="file-upload-default">
	                        <div class="input-group col-xs-6">
	                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
	                          <span class="input-group-append">
	                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
	                          </span>
	                        </div>
                      	</div>
				        <button type="submit" name="add_service_btn" class="btn btn-primary">Add Service</button>
				        <a href="viewservice.php" class="btn btn-danger">Cancel</a>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
      
        <!-- content-wrapper ends -->


<?php 
include('include/footer.php');
include('include/script.php'); ?>