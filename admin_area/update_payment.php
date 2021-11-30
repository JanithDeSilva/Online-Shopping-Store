<?php
include("includes/db.php");
if(isset($_GET['edit_status'])){
    $edit_id = $_GET['edit_status'];
    echo  $edit_id;
}

$update_status = "UPDATE cus_order SET Paid_or_Unpaid='Paid' where OrderNo='$edit_id' ";

$run_status = mysqli_query($con,$update_status);

if($run_status){
    echo "<script>alert('Your status has been successfully updated')</script>";
	
    echo "<script>window.open('sales_report.php','_self')</script>";
    
}else{
    echo "<script>alert('Status updating failed)</script>";
    

}



?>




