<?php
include('viewportfolio.php');

if(isset($_POST['delete_portfolio_btn']))
{
    $del_id=$_POST['del_portfolio_id'];

    $query="DELETE FROM portfolio WHERE id='$del_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
    ?>
     <!-- Success Modal -->
        <div class="modal fade" id="modaldelsuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="delModalCenterTitle"> Delete Success</h5>
                      
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Well Done !</p>
                      <p>Information is Successfully Deleted !</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewportfolio.php'"; data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewportfolio.php'";>OKay</button>
                  </div>
                  </div>
              </div>
        </div>

        <!-- Failure Modal ---  -->
        <div class="modal fade" id="modaldelfailure" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="delModalCenterTitle">Deletion Failure</h5>
                    
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p style="color:crimson;font-size:16px; font-weight:bold;">Opps !></p>
                      <p>Information is not successfully Deleted. Try again Later!</p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" onclick="location.href = 'viewportfolio.php'";>data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-primary" onclick="location.href = 'viewportfolio.php'";>Try Again</button>
                  </div>
                  </div>
              </div>
        </div>
        
        <?php 
          echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modaldelsuccess').modal('show');
          });
          </script>";

    }
    else
    {
        echo "<script type='text/javascript'>
          $(document).ready(function(){
          $('#modaldelfailure').modal('show');
          });
          </script>";
        
    }
}
?>

