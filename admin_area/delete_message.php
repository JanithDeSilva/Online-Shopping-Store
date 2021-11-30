<?php
include("includes/db.php");
?>

<?php

    if(isset($_GET['del_msg'])){
        
        $delete_mno = $_GET['del_msg'];
    

        $delete_msg = "delete from message where MNO='$delete_mno'";
      

        $run_delete = mysqli_query($con,$delete_msg);

        if($run_delete){
            echo "<script>alert('One message has been deleted')</script>";
            echo "<script>window.open('view_message.php','_self')</script>";
        }
    }


    
?>