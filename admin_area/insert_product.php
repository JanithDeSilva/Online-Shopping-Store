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
    <title>Insert item</title>
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
                <i class="fa fa-dashboard"></i> Dashboard / Insert 
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Insert Item
                </h3><!----panel-title end--->
            </div><!----panel heading end--->

            <div class="panel-body"><!----panel-body start--->
                <form method="post" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Title</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_title" type="text" class="form-control" required>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Category</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <select name="item_cat" class="form-control">
                                
                                <option>Select A category </option>

                                <?php
                                
                                $get_p_cats = "select * from category";
                                $run_p_cats = mysqli_query($con,$get_p_cats);

                                while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                    //$p_cat_id = $row_p_cats['Cat_ID'];
                                    $p_cat_title = $row_p_cats['Cat_Name'];


                                    echo " <option value='$p_cat_title'> $p_cat_title</option> ";
                                }
    
                               
                                ?>
                          
                                </select>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Sub  Category</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <select name="item_sub_cat" class="form-control">
                                
                                <option>Select A Sub category </option>

                                <?php
                                
                                $get_cat = "select * from sub_category";
                                $run_cat = mysqli_query($con,$get_cat);

                                while($row_cat=mysqli_fetch_array($run_cat)){
                                    //$cat_id = $row_cat['Sub_cat_ID'];
                                    $cat_title = $row_cat['Sub_Cat_Name'];


                                    echo " <option value='$cat_title'> $cat_title</option> ";
                                }
    
                               
                                ?>
                          
                                </select>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                   
				   
                   
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Image 1</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_img" type="file" class="form-control" required>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Image 2</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_img2" type="file" class="form-control" >

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Image 3</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_img3" type="file" class="form-control" >

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


  
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Price</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="item_price" type="text" class="form-control" required>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Offer </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <select name="Offer" class="form-control"><!----form-control start--->
                                    <option> Select Offer </option>
                                    <option>0</option>
                                    <?php 
                                    $res=mysqli_query($con,"SELECT * from offer ");
                                    while($row=mysqli_fetch_array($res)){ 
                                    $data=$row["OfferID"];   
                                    ?>
                                    <option><?php echo $data; ?> </option>
                                    <?php } ?>
                                </select><!----form-control end--->
                            </div><!----col-md-6 end--->
                </div><!----form-group end--->


                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Item Description</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <textarea name="item_desc" cols="19" rows="16" class="form-control"></textarea>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="submit" type="submit" value="Insert Item" class="btn btn-primary form-control">

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

if(isset($_POST['submit'])){
	
	$res=mysqli_query($con,"SELECT ItemID from item");
    //Generate a ID to item start
    $max=0;
	while($row=mysqli_fetch_array($res)){ 
		$id=$row["ItemID"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
    //Generate a ID to item end 

    $ItemID=$nextId;
	$_SESSION["ItemID"] =$ItemID;

$item_title = $_POST['item_title'];
	$_SESSION["ItemName"] =$item_title;
$item_cat = $_POST['item_cat'];//category
$item_sub_cat = $_POST['item_sub_cat'];//sub cat
$item_price = $_POST['item_price'];
$item_desc = $_POST['item_desc'];
$offer_id = $_POST['Offer'];


$item_img = $_FILES['item_img']['name'];
$item_img2 = $_FILES['item_img2']['name'];
$item_img3 = $_FILES['item_img3']['name'];

$temp_name = $_FILES['item_img']['tmp_name'];
$temp_name2 = $_FILES['item_img2']['tmp_name'];
$temp_name3 = $_FILES['item_img3']['tmp_name'];

$path1 = "items/".$item_img;
$path2 = "items/".$item_img2;
$path3 = "items/".$item_img3;

$uploaded = move_uploaded_file($temp_name,$path1);
$uploaded = move_uploaded_file($temp_name2,$path2);
$uploaded = move_uploaded_file($temp_name3,$path3);

///move_uploaded_file($temp_name,"items/$item_img");
///move_uploaded_file($temp_name2,"items/$item_img2");
///move_uploaded_file($temp_name3,"items/$item_img3");

//Test=echo "ItemID, ItemID, Description, Price, Sub_Cat_Name, item_Img1, item_Img2, item_Img3, Offer_ID, Cat_Name)".$ItemID,$item_title,$item_desc,$item_price,$item_sub_cat,$path1,$path2,$path3,$offer_id,$item_cat;

//Test failed quary=$insert_item = "insert into item (ItemID, ItemName, Description, Price, Sub_Cat_Name, item_Img1, item_Img2, item_Img3, Offer_ID, Cat_Name) values ('$ItemID','$item_title','$item_desc','$item_price','$item_sub_cat','$path1','$path2','$path3','$offer_id','$item_cat')";

$run_item = mysqli_query($con,"insert into item  values ('$ItemID','$item_title','$item_desc','$item_price','$item_sub_cat','$path1','$path2','$path3','$offer_id','$item_cat')");

if($run_item){
    echo "<script>alert('item has been Inserted Successfully')</script>";
    echo "<script>window.open('addto_stock1.php?edit_stock=$ItemID','_self')</script>";

}else{
    echo "<script>alert('item saving failed')</script>";
    echo "<script>window.open('insert_product.php','_self')</script>";
}

}


?>
