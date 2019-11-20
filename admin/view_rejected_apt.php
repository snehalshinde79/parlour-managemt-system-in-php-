<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
<?php
// code to view the searched appointments
if(isset($_POST['view_rejected_btn']))
{
  $search_id=$_POST['view_rejected_id'];
  $sql1="SELECT * from appointments where id='$search_id'";
  $sql1_run=mysqli_query($con,$sql1);
  if(mysqli_num_rows($sql1_run)>0)
  {
    while ($row=mysqli_fetch_assoc($sql1_run))
    {
      ?>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                         <h4 class="card-title">View Appointments Details</h4>
                      </div>
                      <div class="col-6">
                        <button style="float:right;margin-bottom: 10px;"class="btn btn-gradient-primary" onclick="location.href ='rejected_apt.php' ";>Return</button>
                      </div>
                    </div>
                    
                                      
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <th>ID</th> <td><?php echo $row['id']; ?></td>
                        </tr>

                        <tr>
                          <th>Name</th><td><?php echo $row['name']; ?></td>
                        </tr>

                        <tr>
                          <th>Service</th> <td><?php echo $row['service_type']; ?></td>
                        </tr>

                        <tr>
                          <th>Expert</th> <td><?php echo $row['service_expert']; ?></td>
                        </tr>

                        <tr>
                          <th>Date</th><td><?php echo $row['date']; ?></td>
                        </tr>

                        <tr>
                          <th>Time</th> <td><?php echo $row['time']; ?></td>
                        </tr>

                        <tr>
                          <th>Phone</th><td><?php echo $row['phone']; ?></td>
                        </tr>

                        <tr>
                          <th>Status</th>
                          <?php 
                            $status= $row['status']; 
                            if($status=="Approved")
                            {
                              ?>
                               <td><button class="btn btn-gradient-success"><?php echo $row['status']; ?></button></td> 
                            <?php
                            }
                            else
                            {
                              ?>
                               <td><button class="btn btn-gradient-danger"><?php echo $row['status']; ?></button></td> 
                              <?php
                            }
                            ?>
                        </tr>
                        <!-- <tr>
                          <th>Action</th>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    <?php  
    }
  }
}
?> 
<?php 
include('include/footer.php');
include('include/script.php'); ?>

      
      </div>
    </div>
  
        <!-- content-wrapper ends -->