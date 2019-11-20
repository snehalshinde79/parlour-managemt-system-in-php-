<?php
include('security.php');
include('include/header.php'); 
include('include/navbar.php');

?>

 <!-- start of main body-->
        <div class="main-panel">
          <div class="content-wrapper"> 
              <!-- form controlling search -->
            <div class="search-field d-none d-md-block">
              <form class="d-flex align-items-center h-100" action="" method="POST">
                <div class="input-group col-6">
                  <div class="input-group-prepend">
                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                  </div>
                  <input type="text"  name="input_id" class="form-control border-0" placeholder="Search Appointment ">
                </div>  
                  <button type="submit" class="btn btn-gradient-danger" name="search_now">Search Now</button>   
              </form>
            </div>
            <br/>
            <br/>

<?php
//code to search the appointments by any attributes
if(isset($_POST['search_now']))
{
  $input_id=$_POST['input_id'];
  
  $query=" SELECT * FROM appointments where id like '%".$input_id."%' OR name like '%".$input_id."%' OR email like '%".$input_id."%'   
  OR phone like '%".$input_id."%' OR service_type like '%".$input_id."%' OR service_expert like '%".$input_id."%' OR 
  date like '%".$input_id."%' OR time like '%".$input_id."%' ";
  $query_run=mysqli_query($con,$query);
  ?>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Matching Results</h4>
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

                          <th>Action</th>
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
                                    <form action="" method="POST">
                                      <input type="hidden" name="search_view_id" value="<?php echo $row['id'];?>">
                                      <button  type="submit" name="search_view_btn"class ="btn btn-gradient-success">View</button>
                                    </form>
                                 </td>
                             
                                </tr>
                            <?php
                            }
                          }
                        else
                          {
                            echo"No Match Found";
                          }
                        ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>

<?php
include('include/footer.php');
}
?>

<?php
// code to view the searched appointments
if(isset($_POST['search_view_btn']))
{
  $search_id=$_POST['search_view_id'];
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
                    <h4 class="card-title">View Appointments Details</h4>
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
                          <th>Price</th><td>Rs. &nbsp<?php echo $row['price']; ?></td>
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
  include('include/footer.php');
}
?>        
<?php include('include/script.php'); ?>
          </div>
        </div>