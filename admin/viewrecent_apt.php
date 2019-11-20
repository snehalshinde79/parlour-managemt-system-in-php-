<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              $query="SELECT * FROM appointments where id=(select max(id) from appointments)";
              $query_run=mysqli_query($con,$query);
            ?>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Recent Appointments</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Service</th>
                          <th>Expert</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Phone</th>
                          <th>Status</th>

                          <th>Aprrove</th>
                          <th>Reject</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                     if(mysqli_num_rows($query_run)>0)
                      {
                        while($row= mysqli_fetch_assoc($query_run))
                        {
                          ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['service_type']; ?></td>
                              <td><?php echo $row['service_expert']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><?php echo $row['status']; ?></td>
                              
                              <td>
                                <form action="approve.php" method="POST">
                                  <input type="hidden" name="approve_id" value="<?php echo $row['id'];?>">
                                  <button  type="submit" name="approve_btn"class ="btn btn-gradient-success">Approve</button>
                                </form>
                              </td>

                              <td>
                                <form action="reject.php" method="POST">
                                  <input type="hidden" name="reject_id" value="<?php echo $row['id'];?>">
                                  <button  type="submit" name="reject_btn"class ="btn btn-gradient-danger">Reject</button>
                                </form>
                              </td>
                            </tr>
                        <?php
                        }
                       }
                    else
                    {
                      echo"No Record Found";
                    }
                  ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
      
      

      
        <!-- content-wrapper ends -->


<?php 
include('include/footer.php');
include('include/script.php'); ?>