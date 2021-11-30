
<?php
include("includes/db.php");
?>

<?php

    if(isset($_GET['delete_stock'])){
		
		$delete_id = $_GET['delete_stock'];
		
		
       

        
		$delete_stock = "delete from stock where ItemNo='$delete_id'";

        $run_delete = mysqli_query($con,$delete_stock);
		

        if($run_delete){}
            echo "<script>alert('One item in stock  has been deleted')</script>";
            echo "<script>window.open('index.php?view_stock','_self')</script>";
		
    }


 
    
?>













