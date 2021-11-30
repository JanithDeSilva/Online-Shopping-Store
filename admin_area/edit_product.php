<?php
include("includes/db.php");
?>

<?php

if(isset($_GET['edit_product'])){
    $edit_id = $_GET['edit_product'];

    $get_p = "select * from item where ItemID='$edit_id'";

    $run_edit = mysqli_query($con,$get_p);

    $row_edit = mysqli_fetch_array($run_edit);


    $p_id = $row_edit['ItemID'];

    $p_title = $row_edit['ItemName'];

    $p_desc = $row_edit['Description'];

    $price = $row_edit['Price'];

    $p_image1 = $row_edit['Product_Img1'];

    $p_image2 = $row_edit['Product_Img2'];

    $p_image3 = $row_edit['Product_Img3'];


    $p_offer_id = $row_edit['Offer_ID'];

    $p_sub_cat = $row_edit['Sub_Cat_Name'];
	
	$p_cat = $row_edit['Cat_Name'];
}

    


    

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Product</title>
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
//include("includes/header.php");
?>
<br>


<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Update Item
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Update Item
                </h3><!----panel-title end--->
            </div><!----panel heading end--->

            <div class="panel-body"><!----panel-body start--->
                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Item Name</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Category</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <select name="product_cat" class="form-control">
                                
                                <option value="<?php echo $p_cat; ?>"> <?php  echo $p_cat ; ?>  </option>

                                <?php
                                
									$get_p_cats = "select * from category";
									$run_p_cats = mysqli_query($con,$get_p_cats);

									while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                    //$p_cat_id = $row_p_cats['Cat_ID'];
                                    $p_cat= $row_p_cats['Cat_Name'];


                                    echo " <option value='$p_cat'> $p_cat</option> ";
                                }
    
                               
                                ?>
                          
                                </select>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Sub Category</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <select name="cat" class="form-control">
                                
                                <option value="<?php $p_sub_cat; ?>"><?php  echo $p_sub_cat; ?> </option>

                                <?php
                                
                                $get_cat = "select * from sub_category";
                                $run_cat = mysqli_query($con,$get_cat);

                                while($row_cat=mysqli_fetch_array($run_cat)){
                                    $cat_id = $row_cat['Sub_Cat_ID'];
                                    $p_sub_cat = $row_cat['Sub_Cat_Name'];


                                    echo " <option value='$p_sub_cat'> $p_sub_cat</option> ";
                                }
    
                               
                                ?>
                          
                                </select>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                   
                   
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Product Image 1</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="product_img" type="file" class="form-control" >

                                <br>

                                <img width="70" height="70" src="<?php echo $p_image1; ?> " alt="<?php echo $p_image1; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Product Image 2</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="product_img2" type="file" class="form-control" >


                                <br>

                                <img width="70" height="70" src="<?php echo $p_image2; ?> " alt="<?php echo $p_image2; ?>">
                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Product Image 3</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="product_img3" type="file" class="form-control" >


                                <br>

                                <img width="70" height="70" src="<?php echo $p_image3; ?> " alt="<?php echo $p_image3; ?>">
                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


  
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Product Price</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="product_price" type="text" class="form-control" required value="<?php echo $price; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Offer ID</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="offer_id" type="text" class="form-control" required value="<?php echo $p_offer_id; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Product Description</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <textarea name="product_desc" cols="19" rows="16" class="form-control">
                                <?php echo $p_desc; ?>
                                </textarea>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="update" type="submit" value="Update Product" class="btn btn-primary form-control"  onclick="return confirm('Are you sure YOU WANT TO MAKE THESE CHANGES TO THIS ITEM?')">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


                   





                </form><!---form-horizontal end-->
            </div><!----panel-body end--->

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

if(isset($_POST['update'])){

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $offer_id = $_POST['offer_id'];

	
        $product_img = $_FILES['product_img']['name'];
     
        $temp_name = $_FILES['product_img']['tmp_name'];
   
		$path1 = "items/".$product_img;
		
		$uploaded = move_uploaded_file($temp_name,$path1);
		
        
        $product_img2 = $_FILES['product_img2']['name'];
     
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        
		$path2 = "items/".$product_img2;
		
		$uploaded = move_uploaded_file($temp_name2,$path2);
		

        $product_img3 = $_FILES['product_img3']['name'];
        
        $temp_name = $_FILES['product_img3']['tmp_name'];
        
		$path3 = "items/".$product_img3;
	
        $uploaded = move_uploaded_file($temp_name,$path1);
		
		if($path1=="items/"){
			$path1=$p_image1;
			
		}
		
		if($path2=="items/"){
			$path2=$p_image2;
			
		}
		
		if($path3=="items/"){
			$path3=$p_image3;
			
		}
		
	
$update_product = "UPDATE item SET ItemName='$product_title', Description='$product_desc', Price='$product_price', Product_Img1='$path1', Product_Img2='$path2', Product_Img3='$path3', Sub_Cat_Name='$cat', Cat_Name='$product_cat', Offer_ID='$offer_id' where ItemID='$edit_id' ";

$run_product = mysqli_query($con,$update_product);

if($run_product){
    echo "<script>alert('Your Product has been successfully updated')</script>";
	
    echo "<script>window.open('index.php?view_products','_self')</script>";
    
}else{
    echo "<script>alert('Product updating failed)</script>";
    

}

}


?>
