<?php
session_start();
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Items</title>
    <!--- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    --->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 


</head>


<body>

<?php 
include("includes/header.php");
?>


<br>
<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / View stock
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<br>
			<a href="view_stock.php">
			 <i class="">Back</i> 

            </a>

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  View stock
                </h3><!----panel-title end--->
            </div><!----panel heading end--->


			<a href="addto_stock.php?edit_stock=<?php if(isset($_GET['edit_stock'])){
			$edit_id = $_GET['edit_stock'];
			echo $edit_id;}?> ">
			 <i class="fa fa-pencil">Add Stock</i> 

            </a>
			

            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
							<th>Stock ID</th>
                                <th>Item ID</th>
		
									<th>Color</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Image</th>
									
									<th>Update</th>
									<th>Delete</th>
                            </tr><!---tr end--->
                        </thead><!---thead end--->



		
		
		
			<?php 

			$totalQty=0;
				
			if(isset($_GET['edit_stock'])){
			$edit_id = $_GET['edit_stock'];
			$i=0;

                            $get_stock = "select * from stock where ItemID=$edit_id";
							
							$get_name="select ItemName from item where ItemID='$edit_id'" ;
							$run_name = mysqli_query($con,$get_name);
							 while($row_name=mysqli_fetch_array($run_name)){
                                
								$name=$row_name["ItemName"];
								$_SESSION["ItemName"]=$name;
								
								
								
							 }

                            $run_stock = mysqli_query($con,$get_stock);

                            while($row_stock=mysqli_fetch_array($run_stock)){
                                
								$stock_id=$row_stock["ItemNo"];
                                $pro_id=$row_stock["ItemID"];
								
							
								$_SESSION["ItemID"]=$pro_id;
								
								
								$Color=$row_stock["Colour"];
								$Size=$row_stock["Size"];
								$Qty=$row_stock["Qty"];
								
								$totalQty=$totalQty+$Qty;
								$Image=$row_stock["img"];
                               $i++;
			?>	 
			
			
				<tr>
				 
                <td> <?php echo $stock_id; ?>  </td>
				<td> <?php echo $pro_id;    ?>     </td>
				
				
				
				<td> <?php echo $Color; ?>       </td>
				<td> <?php echo $Size; ?>        </td>
				<td> <?php echo $Qty; ?>         </td>
				<td> <img src="<?php echo $Image;?>" width="90" height="90">     </td>
				
				<td>
                                      
				<a href="delete_stock.php?delete_stock=<?php echo $stock_id; ?>" onclick="return confirm('Are you sure YOU WANT TO DELETE THIS ITEM?')">
                       <i class="fa fa-trash"></i> Delete

                </a>
                </td>
                <td>   
                   <a href="edit_stock_item_value.php?edit_stock=<?php echo $stock_id; ?>">
                        <i class="fa fa-pencil"></i> Update

                        </a>                    
                 </td>
				 
				</tr>
			<?php 
			}
			
			
			}
			
			echo "<h3 >Total Quantity Of The Item <b>".$totalQty."<b><h3>"; ?>
			
		
		</table>
</div>
		
		
		
        </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

