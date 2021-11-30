
<?php
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
                <i class="fa fa-dashboard"></i> Dashboard / View Product
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->


<a href="index.php">
			 <i class="">Back</i> 

            </a>

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  View Stock
                </h3><!----panel-title end--->
            </div><!----panel heading end--->


			

            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
                                <th>ItemID</th>
                                <th>Item Name</th>
                                <th>Description</th>
                                <th>Price</th>
								<th>Image1</th>
								<th>Image2</th>
								<th>Image3</th>
                                <!---<th>Product Sold</th>--->
                                <th>Sub category</th>
								<th>category</th>
                                <th>Offer</th>
								
                                
                                <th>View Stock</th>
                            </tr><!---tr end--->
                        </thead><!---thead end--->

                        <tbody><!---tbody start--->
                            <?php
                            
                            $i=0;

                            $get_pro = "select * from item";

                            $run_pro = mysqli_query($con,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['ItemID'];

                                $pro_title = $row_pro['ItemName'];

                                $pro_Descript = $row_pro['Description'];

                                $pro_price = $row_pro['Price'];
								
								$pro_Image1 = $row_pro['Product_Img1'];
								$pro_Image2 = $row_pro['Product_Img2'];
								$pro_Image3 = $row_pro['Product_Img3'];
								
								$pro_category= $row_pro['Cat_Name'];
								$pro_sub_category= $row_pro['Sub_Cat_Name'];
                                $pro_offer_id1 = $row_pro['Offer_ID'];
								
								$res2=mysqli_query($con,"SELECT * from offer where OfferID='$pro_offer_id1'");	
										while($row=mysqli_fetch_array($res2)){
										$pro_offer_id=$row['O_Name']; 
										
										
												
											}

                                $pro_category= $row_pro['Cat_Name'];
								$pro_sub_category= $row_pro['Sub_Cat_Name'];

                               $i++;
                               ?>

                               <tr><!---tr start--->
                                    <td><?php echo $pro_id; ?></td>
                                    <td><?php echo $pro_title; ?></td>
									<td><?php echo $pro_Descript; ?></td>
									<td><?php echo $pro_price; ?></td>
									
                                    <td><img src="<?php echo $pro_Image1;?>" width="90" height="90"></td>
                                    <td><img src="<?php echo $pro_Image2;?>" width="90" height="90"></td>
									<td><img src="<?php echo $pro_Image3;?>" width="90" height="90"></td>
									
									<td><?php echo $pro_sub_category; ?></td>
									<td><?php echo $pro_category; ?></td>
                                    <!---<td><?php //echo $pro_offer_id; ?></td>--->
                                    <td><?php echo $pro_offer_id; ?></td>
                                    
                                    
                                    <td>   
                                        <!-- <a href="index.php?edit_product=<?php //echo $pro_id; ?>">-->
										<a href="update_stock.php?edit_stock=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> View Stock

                                        </a>                    
                                    </td>
                               </tr><!---tr end--->


                            <?php } ?>




                            
                        </tbody><!---tbody end--->

                    </table><!----table table-striped table-bordered table-hover end--->
                </div><!----table-responsive end--->
            </div><!----panel-body end--->

        






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
