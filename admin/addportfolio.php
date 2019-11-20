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
                    <h4 class="card-title">Add Portfolio</h4>
                    <form action="addportfoliocode.php" method="post" enctype="multipart/form-data">
                    	<input type="hidden" name="p_id" >
                      <?php 
                           $query="SELECT name FROM services";
                                $query_run=mysqli_query($con,$query)
                          ?>
				        
                <div class="form-group col-6">
                  <label class="form-label">Portfolio Tpye</label>
                    <select class="form-control" name="portfolio" required>
                      <option value="" selected disabled class="form-control">Select Services</option>
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
                  
                </div><br/><br/><br/>

                <div class="form-group col-6">
                          <label>File upload</label>
                          <input type="file" name="portfolio_image" class="file-upload-default">
                          <div class="input-group col-xs-6">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                          </div>
                        </div>

				        <button type="submit" name="add_portfolio_btn" class="btn btn-primary">Add Portfolio</button>
				        <a href="viewportfolio.php" class="btn btn-danger">Cancel</a>

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