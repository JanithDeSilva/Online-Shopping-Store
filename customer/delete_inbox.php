<?php
include("includes/db.php");
?>

<?php

    if(isset($_GET['del_inbox'])){
        
        $delete_mno = $_GET['del_inbox'];
    

        $delete_inbox = "delete from message where MNO='$delete_mno'";
      

        $run_delete = mysqli_query($con,$delete_inbox);

        if($run_delete){
            echo "<script>alert('One message has been deleted')</script>";
            echo "<script>window.open('view_inbox.php','_self')</script>";
        }
    }


    
?>