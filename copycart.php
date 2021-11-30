<?php
session_start();
//$_SESSION["IP"]=$_SERVER['REMOTE_ADDR'];
if(!isset($_SESSION["cart"])){
	$_SESSION["cart"]=array();
}
	$_SESSION["item"]=array();


if(isset($_GET["ItemID"])){
	$_SESSION["item"][]= $_GET['ItemID'];}
if(isset($_GET["Colour"])){
	$_SESSION["item"][]= $_GET['Colour'];
	
	}

//$_SESSION["color"]=$color;
//echo $_SESSION["color"];
if(isset($_GET["product_size"])){
	$_SESSION["item"][] = $_GET['product_size'];}

//$_SESSION["size"]=$size;
if(isset($_GET["quantity"])){
	$_SESSION["item"][]= $_GET['quantity'];
	
//unitPrice
$_SESSION["item"][]= 100;
}


foreach($_SESSION["cart"] as $k=>$v){
	
	if($v[0]!=$_GET['ItemID']){
		
		
   $_SESSION["cart"][]=$_SESSION["item"];
   unset($_SESSION["item"]);
	}
	
}



	
?>
<?php
if(isset($_GET["addtowish"])){
    
$color = $_GET['Colour'];
//$_SESSION["color"]=$color;
$size = $_GET['product_size'];
//$_SESSION["size"]=$size;
$Qty = $_GET['quantity'];
//$_SESSION["Qty"]=$Qty;
$item_id = $_GET['ItemID'];
//$_SESSION["item_id"]=$item_id;

header("location:wishlist.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE index</title>
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
$active='cart';
include("includes/header.php");



?>


<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Cart                      
                    </li>
                </ul>

        </div><!----col-md-12 end---->


        <div id="cart" class="col-md-9"><!---col-md-9 start---->

            <div class="box"><!---box start---->

                <form action="cart.php" method="post" enctype="multipart/form-data"><!---form start---->
                
                    <h1>Shopping Cart</h1>
                    <p class="text-muted">You currently have 3 items n your cart</p>

                    <div class="table-responsive"><!---table-responsive start---->

                        <table class="table"><!---table start---->

                            <thead><!---thead start---->
                                <tr><!---tr start---->

                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete </th>
                                    <th colspan="2">Sub Total</th>

                                </tr><!---tr end---->
								
                            </thead><!---thead end---->
                            <?php
							
							
                            $totAmount=0;
                            $totItem=0;
                            /*
                           
                            $res1=mysqli_query($con,"SELECT * from stock where Colour='$color' AND ItemID='$item_id' AND Size='$size'");
                            while($row=mysqli_fetch_array($res1)){ 
                            $ItemNo=$row["ItemNo"];
                            $ItemID=$row["ItemID"];
                            $img=$row['img'];
                            $res2 = mysqli_query($db,"SELECT * FROM item WHERE ItemID=' $ItemID'");
                            while($row=mysqli_fetch_array($res2)){
                                $pro_price= $row['Price'];
                                $ItemName= $row['ItemName'];
                                $offer_id = $row['Offer_ID'];
                               
                            $res3 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                            while($row=mysqli_fetch_array($res3)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
							$NewPrice=$pro_price - $Amount;}
                            */
							?>
                     
                    <tbody><!---tbody start---->
					
					<?php
					print_r($_SESSION["cart"]);
					$TotAmount=0;
					
					foreach($_SESSION["cart"] as $key => $value){
					?>
					
                    <tr><!---tr start---->

                        <td>
						<?php /*$res1=mysqli_query($con,"SELECT * from  stock where ItemID=$value[0] && Colour=$value[1];");
                           while($row=mysqli_fetch_array($res1)){ 
						   $img=$row["img"];}
						   */?>
                    <!--  <img class="img-responsive" src="admin_area/<?php //echo  $img;?>" alt="Producr 1">-->
					   
                        </td>
						
                        <td>
						
                            <p><?php 
							if(isset($value[0]) and $value[0]!=""){
							
							$id=$value[0] ;
							$Colour=$value[1];
							$res3=mysqli_query($con,"SELECT * from  stock where ItemID='$id' && Colour='$Colour';");
                           while($row=mysqli_fetch_array($res3)){ 
						   $img=$row["img"];
						  // echo $img;
						  }
							}
						  ?>
						   
						   <img class="img-responsive" src="admin_area/<?php echo  $img;?>" alt="Producr 1">
                        </td>
						
                        <td>
							<?php if(isset($value[3]) and $value[3]!=""){echo $value[3];}?>
                        </td>
						
                        <td>
						
						   
                        <?php  
						
						$res2 = mysqli_query($db,"SELECT * FROM item WHERE ItemID='$value[0]'");
                            while($row=mysqli_fetch_array($res2)){
                                $pro_price= $row['Price'];
                                $ItemName= $row['ItemName'];
                                $offer_id = $row['Offer_ID'];
                               
                            $res3 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                            while($row=mysqli_fetch_array($res3)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
							$NewPrice=$pro_price - $Amount;
							}}
							 echo $NewPrice;  //prise */
							 //echo $value[4];
							 ?>
                        </td> 
						
						<td>
							<?php echo $value[1]; ?>
						</td>
						
                        <td>
							<?php echo $value[2]; ?>
						</td>
							
                        <td>
							 <!--- <input type="checkbox" name="remove[]"> --->
							 <text center><input class="btn btn-warning" type="submit" value="Remove" name="delete_item" style="width:80px"></text center>
							 
							<?php/* if (isset($_GET['delete_item'])) {
										$key=array_search($value[1],$_SESSION['cart']);
									if($key!==false)
									unset($_SESSION['cart'][$key]);
									$_SESSION["cart"] = array_values($_SESSION["cart"]);
								}*/ 
									?>				
						</td>
						
                        <td>
                        <?php //$UP=$NewPrice*$Qty;echo $UP;
						
						$subTotal=$NewPrice*$value[3];
						echo 	$subTotal;
						?> 
                        </td>
						
                        <?php// $totAmount=$totAmount+$UP;
                           // $totItem=$totItem+$Qty;
                           // $_SESSION["totAmount"]= $totAmount;
                           // $_SESSION["totItem"]= $totItem;
                        ?>
						
                    </tr><!---tr end---->
					<?php 
					$TotAmount=$TotAmount+$subTotal;
				}?>
                </tbody><!---tbody end---->
                
               
              <?php/*  }
              }
			  }
                    */?>
                            
                          



                            <tfoot><!---tfoot start---->

                                <tr>
                                   <th colspan="5">Total Items<th>
                                   <th colspan="2"><?php echo $totItem;?><th>
                                </tr>

                            </tfoot><!---tfoot end---->
                            <tfoot><!---tfoot start---->

                                <tr>
                                   <th colspan="5">Total Amount<th>
                                   <th colspan="2"><?php echo $TotAmount;?><th>
                                </tr>

                            </tfoot><!---tfoot end---->


                        </table><!---table end---->


                    </div><!---table-responsive end---->
                    

                    <div class="box-footer"><!---box-footer start---->

                        <div class="pull-left"><!---pul left start-->
                            <a href="shop.php" class="btn btn-default"><!---btn btn-default start-->
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                            </a><!---btn btn-default end-->
                        </div><!---pul left end-->

                        <div class="pull-right"><!---pul right start-->
                            <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!---btn btn-default start-->
                                    <i class="fa fa-refresh"></i>Update Cart
                            </button><!---btn btn-default end-->

                            <a href="checkout.php" class="btn btn-primary">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>

                        </div><!---pul right end-->

                    </div><!---box-footer end---->
            
                </form><!---form end---->

            </div><!---box end---->

            <div id="row same-high-row"><!-------row same-high-row start--->
                   

                   
                 
                </div><!-------row same-high-row end--->

        </div><!---col-md-9 end---->



        <div class="col-md-3"><!---col-md-3 start---->
            <div id="order-summary" class="box"><!---box start---->

                <div class="box-header"><!---box-header start---->
                    <h3>Order Summary</h3>
                </div><!---box-header end---->
                <p class="text-muted"><!--text muted start-->

                    Shipping cost may vary depend on the  type of the product
                </p><!--text muted end-->

                <div class="table-responsive"><!----table-responsive start---->
                        <table class="table"><!----table start---->
                            <tbody><!----tbody start---->
                                <tr><!----tr start---->
                                    <td> Order Sub-Total</td>
                                    <th> Rs.<?php echo $totAmount;?>.00</th>
                                </tr><!----tr end---->

                                <tr><!----tr start---->
                                    <td> Shipping & Handling</td>
                                    <th> Not Measured Yet</th>
                                </tr><!----tr end---->
                                <!---<tr><!----tr start---->
                                    <<!---td> Tax</td>
                                    <th> Rs. 100.00</th>
                                </tr><!----tr end---->
                                <tr class="total"><!----tr start---->
                                    <td> Total</td>
                                    <th> Rs.<?php echo $totAmount;?>.00</th>
                                </tr><!----tr end---->

                            </tbody><!----tbody end---->
                        </table><!----table end---->
                </div><!----table-responsive end---->

            </div><!---box end---->
        </div><!---col-md-3 end---->


        </div><!----container end---->
</div><!----content end---->



<?php
include("includes/footer.php");



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>