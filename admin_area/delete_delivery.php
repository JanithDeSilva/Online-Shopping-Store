<?php
include("includes/db.php");
?>

<?php

    if(isset($_GET['delete_delivery'])){
        
        $delete_no = $_GET['delete_delivery'];
    

        $delete_details = "delete from order_delivery where OrderNO='$delete_no'";
      

        $run_delete = mysqli_query($con,$delete_details);

        if($run_delete){
            echo "<script>alert('One delivery detail has been deleted')</script>";
            echo "<script>window.open('view_delivery.php','_self')</script>";
        }
    }


    
?>