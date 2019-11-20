<?php
//include('security.php');
include('addservice.php');

?>

<?php
if(isset($_POST['add_service_btn']))
{
    $add_service_id=$_POST['service_id'];
    $add_service_title=$_POST['services'];
    
    $add_service_desc=$_POST['description'];
    $add_service_price=$_POST['price'];
    $add_service_image=$_FILES['service_image']['name'];

        $query = "INSERT INTO services (name,description,price,image) 
        VALUES ('$add_service_title','$add_service_desc','$add_service_price','$add_service_image')";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
          move_uploaded_file($_FILES["service_image"]["tmp_name"],"../uploads/services/".$_FILES["service_image"]["name"]);
          // $_SESSION['success'] =  "Data  Added ";
          // header('Location: index.php');
        ?>
          <!-- Success Modal -->
          <div class="modal fade" id="modalvoluntersuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="sucessModalCenterTitle">Serivces Added</h5>
                     
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well done !</p>
                      <p>Services Added Succesfully !</p>
                     
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewservice.php'";>Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewservice.php'";>Okay</button>
                  </div>
                  </div>
              </div>
          </div>
          <!-- failure modal -->
          <div class="modal fade" id="modalvolunterfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="failureModalCenterTitle"> Failure</h5>
                    
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                    <p>Adding Failed.Try again Later ! </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewservice.php'";>Close</button>
                    <button type="button" class="btn btn-outline-primary" onclick="location.href = 'addservice.php'";>Try Again</button>
                </div>
                </div>
            </div>
          </div>

         <?php 
          echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modalvoluntersuccess').modal('show');
          });
          </script>";
        
        }
        else
        {
            echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#modalvolunterfailure').modal('show');
            });
            </script>";
        }
}

?>
