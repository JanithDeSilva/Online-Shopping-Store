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
		
		
	<div class="column1">
	<h3>Relavent Item's Images<h3>
	<?php
	
	if(isset($_GET['edit_stock'])){
	$edit_id = $_GET['edit_stock'];}
	
	$get_pro = "select * from item where ItemID='$edit_id' ";

                            $run_pro = mysqli_query($con,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){
                                
								
								$pro_Image1 = $row_pro['Product_Img1'];
								$pro_Image2 = $row_pro['Product_Img2'];
								$pro_Image3 = $row_pro['Product_Img3'];
								
								
	?>
	<img src="<?php echo $pro_Image1?> " width="100px"> 
	<img src="<?php echo $pro_Image2?>" width="100px"> 
	<img src="<?php echo $pro_Image3?>" width="100px"> 
	
	<?php } ?>
	</div>

		<div class="column2" >

            <div class="panel-body"><!----panel-body start--->
                <form  method="post" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->
                   
                <div class="form-group"><!----form-group start--->
				
				
                        <label class="col-md-3 control-label"> Item ID</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemID"  value="<?php  
								if(isset($_GET['edit_stock'])){
								$edit_id = $_GET['edit_stock'];
								echo $edit_id;
								
								}
								?>" type="text" class="form-control" required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
				
				 <div class="form-group"><!----form-group start--->
				
				
                        <label class="col-md-3 control-label"> Item Name</label>
                            <div class="col-md-6"><!----col-md-6 start--->
							
							
								<input name="ItemName"  value="<?php  
								if(isset($_SESSION["ItemName"])){
									$ItemName=$_SESSION["ItemName"];
									echo $ItemName;}?>" type="text" class="form-control" required required readonly="readonly">
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
				
				<div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Image</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_img" type="file" class="form-control" required>

                            </div><!----col-md-6 end--->
                 </div><!----form-group end--->

                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Colour</label>
                            <div class="col-md-6"><!----col-md-6 start--->
                                <select name="Colour" class="form-control"><!----form-control start--->
                                    <option> Select colour </option>
                                    <?php 
                                    $res=mysqli_query($con,"SELECT * from colour ");
                                    while($row=mysqli_fetch_array($res)){ 
                                    $data=$row["Colour"];   
                                    ?>
                                    <option><?php echo $data; ?> </option>
                                    <?php } ?>
                                </select><!----form-control end--->
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
                   
                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Size</label>
                            <div class="col-md-6"><!----col-md-6 start--->
                                <select name="Size" class="form-control"><!----form-control start--->
                                    <option> Select a size </option>
                                    <?php 
                                    $res=mysqli_query($con,"SELECT * from size ");
                                    while($row=mysqli_fetch_array($res)){ 
                                    $data=$row["Size"];   
                                    ?>
                                    <option><?php echo $data; ?> </option>
                                    <?php } ?>
                                </select><!----form-control end--->
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->
                   
                


                <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label" name="Qty"> Quantity</label>
                            <div class="col-md-6"><!----col-md-6 start--->
                                <input name="Qty" type="text" class="form-control" required>
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->

               
      
               

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!----col-md-6 start--->
                            

                                <input type="submit" class="btn btn-primary form-control" value="Add" name="Stock" > 
                               
                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->
					
					 <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"></label>
                            <div class="col-md-6"><!----col-md-6 start--->
                            

                                <a href="update_stock.php?edit_stock=<?php echo $edit_id; ?>" class="btn btn-primary form-control" value="Back"  > Back</a>
                               
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

if(isset($_POST['Stock'])){
	
	$res=mysqli_query($con,"SELECT ItemNo from stock");
    //Generate a ID to stock start
    $max=0;
	while($row=mysqli_fetch_array($res)){ 
		$id=$row["ItemNo"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
    //Generate a ID to stock end 

    $ItemNo=$nextId;

$itemID = $_POST['ItemID'];
$item_color = $_POST['Colour'];
$item_size = $_POST['Size'];
$item_qty = $_POST['Qty'];

$item_img = $_FILES['item_img']['name'];
$temp_name = $_FILES['item_img']['tmp_name'];
$path = "items/".$item_img;
$uploaded = move_uploaded_file($temp_name,$path);

//test
//echo $ItemNo,$itemID,$item_color,$item_size ,$item_qty;


$run_stock = mysqli_query($con,"insert into stock  values ('$ItemNo','$itemID','$item_color','$item_size','$item_qty','$path')");

if($run_stock){
    echo "<script>alert('item has been Inserted Successfully')</script>";
    echo "<script>window.open('update_stock.php?edit_stock= $itemID','_self')</script>";

}else{
    echo "<script>alert('item saving failed')</script>";
    echo "<script>window.open('update_stock.php?edit_stock= $itemID','_self')</script>";
}

}


?>