<?php

include("includes/db.php");



if(isset($_GET["edit_stock"])){
	
	$stock_id = $_GET['edit_stock'];
	
}

$get_stock = "select * from stock where ItemNo='$stock_id' ";

                            $run_stock = mysqli_query($con,$get_stock);

                            while($row_stock=mysqli_fetch_array($run_stock)){
								
                                $pro_id = $row_stock['ItemID'];
								$color=$row_stock["Colour"];
								$size=$row_stock["Size"];
								$qty=$row_stock["Qty"];
								$image=$row_stock["img"];
							}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock</title>
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
  
	<style>
		{
		box-sizing: border-box;
		}

		.column1 {
		float: left;
		width: 30%;
		padding: 10px;
		height:600px;

		}
		.column2 {
		float: left;
		width: 70%;
		padding: 10px;
		height:600px;
		}

		/* Clear floats after the columns */
		.row:after {
		content: "";
		display: table;
		clear: both;
		}
	</style>



</head>


<body>


<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Manage Stock
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i> Manage Stock
                </h3><!----panel-title end--->
            </div><!----panel heading end--->
		
		


		<div class="column2" >

            <div class="panel-body"><!----panel-body start--->
                <form  method="post" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->
                   
                <div class="form-group"><!----form-group start--->
				
				
                        <label class="col-md-3 control-label"> Stock ID</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemID"  value="<?php echo $stock_id ; ?> " type="text" class="form-control" required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
				
				 <div class="form-group"><!----form-group start--->
				
				
                        <label class="col-md-3 control-label"> Item ID</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemName"  value="<?php echo $pro_id; ?> " type="text" class="form-control" required required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
				
				<div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Image</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                              <img src= " <?php echo $image ; ?>" width="150px" >

                            </div><!----col-md-6 end--->
                 </div><!----form-group end--->

                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Colour</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemName"  value="<?php echo $color; ?> " type="text" class="form-control" required required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
                   
                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Size</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemName"  value="<?php echo $size; ?> " type="text" class="form-control" required required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
                   
                


                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label" name="Qty"> Quantity</label>
                            <div class="col-md-6"><!----col-md-6 start--->
                                <input name="Qty" type="text" class="form-control" value="<?php echo $qty; ?>" required>
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->

               
      
               

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!----col-md-6 start--->
                            

                                <input type="submit" class="btn btn-primary form-control" value="Update" name="Update_Stock_Qty" > 
                               
                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->
					
					 <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!----col-md-6 start--->
                            

                                <a href="update_stock.php?edit_stock=<?php echo $pro_id;?>" class="btn btn-primary form-control" value="Back"  > Back</a>
                               
                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                </form><!---form-horizontal end-->
            </div><!----panel-body end--->
		</div><!-- end of column2-->
		
		
		
		
		
		
        </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['Update_Stock_Qty'])){
	
	$qty=$_POST["Qty"];
	$update_stock = "UPDATE stock SET Qty='$qty' where ItemNo='$stock_id' ";

$run_stock_edit = mysqli_query($con,$update_stock);

if($run_stock_edit){
    echo "<script>alert('Stock has been successfully updated')</script>";
	
    echo "<script>window.open('update_stock.php?edit_stock=$pro_id','_self')</script>";
    
}else{
    echo "<script>alert('Stock updating failed)</script>";
    

}



}


?>