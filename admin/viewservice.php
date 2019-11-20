<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              $query="SELECT * FROM services";
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
                          <th>Description</th>
                          <th>Price</th>
                          <th>Image</th>
 
                          <th>Delete</th>
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
                              <td><?php echo $row['description']; ?></td>
                              <td><?php echo $row['price']; ?></td>
                              <td><?php echo '<img src="../uploads/services/'.$row['image'].'" width="100px;" height="100px;">' ?></td>


                              <td>
                                <form action="deleteservice.php" method="POST">
                                  <input type="hidden" name="del_service_id" value="<?php echo $row['id'];?>">
                                  <button  type="submit" name="delete_service_btn"class ="btn btn-danger">DELETE</button>
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