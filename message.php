<?php
session_start();
include('index.php');
include('database/dbconfig.php');


if(isset($_POST['send_msg_btn']))
{
    $msg_name = $_POST['name'];
    $msg_email = $_POST['email'];
    $msg_message = $_POST['message'];

    $query="INSERT INTO contact (name,email,message)
    VALUES('$msg_name','$msg_email','$msg_message')";
    mysqli_query($con,$query);
    ?> 
    <!-- Success Modal -->
    <div class="modal fade" id="modalsuccess" tabindex="-1" role="dialog" aria-labelledby="successModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sucessModalCenterTitle">Message Success</h5>
                
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="color:crimson;font-size:16px; font-weight:bold;">Thank You </p>
                <p>Your Message is sent Sucessfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal"onclick="location.href = 'index.php'";>Close</button>
                <button type="button" class="btn btn-outline-success" onclick="location.href = 'index.php'";>Okay</button>
            </div>
            </div>
        </div>
    </div>

    <!-- failure Modal -->
    <div class="modal fade" id="modalfailure" tabindex="-1" role="dialog" aria-labelledby="failureModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="failureModalCenterTitle">Message Failure</h5>
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="color:crimson;font-size:16px; font-weight:bold;">Sorry Sir !</p>
                <p>Your Message is not sent Sucessfully.Try again Later ! </p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal" onclick="location.href = 'index.php'";>Close</button>
                <button type="button" class="btn btn-outline-primary" onclick="location.href = 'index.php#contact'";>Try Again</button>
            </div>
            </div>
        </div>
    </div>
    <?php
    echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#modalsuccess').modal('show');
        });
        </script>";
}
else
{
    echo "<script type='text/javascript'>
        $(document).ready(function(){
        $('#modalfailure').modal('show');
        });
        </script>";
    
}

?>

