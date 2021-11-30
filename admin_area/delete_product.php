
<?php
include("includes/db.php");
?>

<?php

    if(isset($_GET['delete_product'])){
		
		$delete_id = $_GET['delete_product'];
		
		
        $delete_id = $_GET['delete_product'];

        $delete_pro = "delete from item where ItemID='$delete_id'";
		$delete_pro1 = "delete from stock where ItemID='$delete_id'";

        $run_delete = mysqli_query($con,$delete_pro);
		$run_delete1 = mysqli_query($con,$delete_pro1);

        if($run_delete && $run_delete ){
            echo "<script>alert('One product has been deleted')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
		}
    }


    
?>













