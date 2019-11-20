<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              $query="SELECT * FROM contact";
              $query_run=mysqli_query($con,$query);
            ?>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Services</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                         
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
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['message']; ?></td>
                                                            
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