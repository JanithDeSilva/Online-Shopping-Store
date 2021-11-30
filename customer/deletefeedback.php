<?php
include("includes/db.php");
 if(isset($_GET['FNO'])){
        
        $delete_Fno = $_GET['FNO'];
    

        $delete_fno = "delete from feedback where FNO='$delete_Fno'";
      

        $run_delete = mysqli_query($con,$delete_fno);

        if($run_delete){
            echo "<script>alert('One feedback has been deleted')</script>";
            echo "<script>window.open('my_account.php','_self')</script>";
        }
    }



?>