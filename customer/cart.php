<?php
session_start();
if(!isset($_SESSION["cart"])){
	$_SESSION["cart"]=array();
}

if(isset($_GET["ct"])){
if(isset($_SESSION["wish"])){
	//print_r($_SESSION["wish"]);
	foreach($_SESSION["wish"] as $k=>$v){
		
		
			$found=false;
foreach($_SESSION["cart"] as $key => $value){
	if($value[0]==$v[0]){
		
		
		$found=true;
		break;
	}
	
}

if(!$found){
	$d=array();
	foreach($v as $key => $value){
	$d[]=$value;
	
}

$_SESSION["cart"][]=$d;
}
		
	}
	//print_r($_SESSION["cart"]);
  unset($_SESSION["wish"]);
}}

 if(isset($_GET["ItemID"])){

//if(isset($_POST["cart"])){
//$_SESSION["IP"]=$_SERVER['REMOTE_ADDR'];

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
if(isset($_GET["ItemID"])){
	$found=false;
foreach($_SESSION["cart"] as $key => $value){
	if($value[0]==$_GET["ItemID"]){
		
		
		$found=true;
	}
	
}

if(!$found){
$_SESSION["cart"][]=$_SESSION["item"];
}
}


}
	
?>
<?php
if(isset($_GET["cart"])){
    
$color = $_GET['Colour'];
//$_SESSION["color"]=$color;
$size = $_GET['product_size'];
//$_SESSION["size"]=$size;
$Qty = $_GET['quantity'];
//$_SESSION["Qty"]=$Qty;
$item_id = $_GET['ItemID'];
//$_SESSION["item_id"]=$item_id;

//header("location:wishlist.php");
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
include("includes/db.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['ItemID'])){

  $item_id = $_GET['ItemID'];

  $get_product = "select * from item where ItemID='$item_id'";

  $run_product = mysqli_query($con,$get_product);

  $row_product = mysqli_fetch_array($run_product);

  //$p_cat_id = $row_product['p_cat_id'];

  $pro_title = $row_product['ItemName'];

  $pro_price = $row_product['Price'];

  $pro_desc = $row_product['Description'];

  $pro_img1 = $row_product['Product_Img1'];

  $pro_img2 = $row_product['Product_Img2'];

  $pro_img3 = $row_product['Product_Img3'];

  $pro_cat_name = $row_product['Cat_Name'];


  $get_stock_details = "select * from stock where ItemID='$item_id'";

  $run_stock_details = mysqli_query($con,$get_stock_details);

  $row_stock_details = mysqli_fetch_array($run_stock_details);

  $pro_color = $row_stock_details['Colour'];

  $pro_size = $row_stock_details['Size'];

  $pro_qty = $row_stock_details['Qty'];
  
  

  


 





}


?>


<div id="top"><!----top begin--->

  <div class="container"><!----container begin--->

    <div class="col-md-6 offer"><!--col-md-6 offer begin-->
    
    <a href="#" class="btn btn-success btn-sm">Welcome <?php 
		if(isset($_SESSION["user"])){
		echo $_SESSION["user"];
		}else{
			echo "user";
		} ?>                       </a>
     
    
    </div><!--col-md-6 offer end-->

    <div class="col-md-6"><!--col-md-6 bedin-->

    <ul class="menu"><!--ul menu begin-->
    <?php if(isset($_SESSION["user"])){

?>
        <li>
        
         <a href="my_account.php">My Account</a>
       </li>
        <?php } ?>

      <li>
        <a href="cart.php">Cart</a>
       </li>
       <li>
        <a href="wishlist.php">WishList</a>
       </li>
       <?php if(isset($_SESSION["user"])){

?>
       <li>
         <a href="../logout.php">Logout</a>
       </li>
       <?php } else{?>
        <li>
         <a href="../login.php">Login</a>
       </li>
       <?php } ?>
   </ul><!--ul menu end-->

    </div><!--col-md-6 end-->


  </div><!----container end--->

</div><!----top end--->


<div id="navbar" class="navbar navbar-default"><!----navbar navbar-default start-->

  <div class="container"><!---cont start--->

       <div class="navbar-header"><!---navbar header start--->

        <a href="customerLand.php" class="navbar-brand home"><!----navbar brand home start---->
          <img src="imgs/logo/desktop.jpg" alt="shopwise logo" class="hidden-xs"><!---desktop vision(when viewport reach xs size this imge element will be hidden )------>
          <img src="imgs/logo/mobile.jpg" alt="shopwise logo" class="visible-xs"><!---mobile vision(when viewport reach xs size this imge element will be visible )------>

        </a><!----navbar brand home start---->

       <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

          <span class="sr-only">Toggle Navigation</span>

          <i class="fa fa-align-justify"></i>

        </button>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

          <span class="sr-only">Toggle Navigation</span>

          <i class="fa fa-search"></i>
          
        </button>

       </div><!---navbar header end--->


       <div class="navbar-collapse collapse" id="navigation"><!---navbar-collapse collapse start--->

              <div class="padding-nav"><!---padding nav start--->

                  <ul class="nav navbar-nav left"><!---nav navbar-nav left start--->

                <li><!----home start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="customerLand.php">Home</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../index.php">Home</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="shop.php">Shop</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../shop.php">Shop</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="offers.php">Offers</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../offers.php">Offers</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="delivery_information.php">Delivery Info</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../delivery_information.php">Delivery Info</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="about_us.php">About Us</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../about_us.php">About Us</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="contact.php">Contact Us</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../contact.php">Contact Us</a>
                </li>
                <?php } ?>
                <li><!---shop start--->
                <?php if(isset($_SESSION["user"])){?>
                <li>
                <a href="privacy_policy.php">Privacy Policy</a>
                </li>
                <?php } else{?>
                <li>
                <a href="../privacy_policy.php">Privacy Policy</a>
                </li>
                <?php } ?>
                     

                  </ul><!---nav navbar-nav left end--->

              </div><!---padding nav end--->


        <!-- <a href="cart.php" class="btn navbar-btn btn-primary right"><!---btn navbar-btn btn-primary right start---->
         <!--     <i class="fa fa-shopping-cart"></i>

              <span>4 Items In Your Cart</span>

         </a><!---btn navbar-btn btn-primary right end---->

            <div class="navbar-collapse collapse right"><!---navbar-collapse collapse right---->

                  <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn start--->

                      <span class="sr-only">Toggle Search</span>

                      <i class="fa fa-search"></i>

                  </button><!--btn btn-primary navbar-btn end--->

            </div><!---navbar-collapse collapse right end---->


              <div class="collapse clearfix" id="search"><!--------collapse clearfix start----->

                      <form method="get" action="SearchAct.php" class="navbar-form"><!------navbar form begin------>

                            <div class="input-group"><!----input-group start---->
                          
                            <select name="sub_cat_name" class="form-control"><!----form-control start--->
                            <option>Select From Here!</option>
                            <?php 
                            $res=mysqli_query($con,"SELECT * from sub_category");
                            while($row=mysqli_fetch_array($res)){ 
                            $data=$row["Sub_Cat_Name"];   
                            ?>
                
                            <option ><?php echo $data; ?>  </option>
                            <?php } ?>
                                    
                                   
                                    
                                  

                                </select><!----form-control end--->

                                 <!-- <input type="text" class="form-control" placeholder="Search" name="user_query" required><!---required elemnts role is not directing when there is not filled the text bar-->


                                    <span class="input-group-btn"><!-----input-group-btn start---->


                                  <button type="submit" name="search" value="Search" class="btn btn-primary"><!---btn btn-primary start------>

                                      <i class="fa fa-search"></i>

                                  </button><!---btn btn-primary end------>

                                  </span><!-----input-group-btn end---->
                            </div><!----input-group end---->



                      </form><!------navbar form end------>

              </div><!--------collapse clearfix end----->


        </div><!---navbar-collapse collapse end--->

  </div><!---cont end--->

</div><!----navbar navbar-default end-->





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

                <form action=<?php
							if(isset($_SESSION["user"])){
							echo "pay.php";}
							else{
                            echo "../login.php";}
							
							?>      method="post" enctype="multipart/form-data"><!---form start---->
							
                <?php //print_r ($_SESSION["cart"] );?>
                    <h1>Shopping Cart</h1>
                    

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
									<th>Update</th>

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
					//print_r($_SESSION["cart"]);
					$TotAmount=0;
					$TotItem=0;
					$i=0;
					
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
						
                            <p><?php  $id=$value[0] ;
							$Colour=$value[1];
							$res3=mysqli_query($con,"SELECT * from  stock where ItemID='$id' && Colour='$Colour';");
                           while($row=mysqli_fetch_array($res3)){ 
						   $img=$row["img"];
						  // echo $img;
						  }?>
						   
						   <img class="img-responsive" src="../admin_area/<?php echo  $img;?>" alt="Producr 1">
                        </td>
						
                        <td>
							<?php echo $value[3];?>
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
							 <text center><input class="btn btn-warning" type="button" value="Remove" name="delete_item" style="width:80px" onclick="window.location='../removecart.php?id=<?php echo $i;?>'"></text center>
							 
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
						<td>
								<text center><input class="btn btn-danger" type="button" value="Update" name="update" style="width:80px" onclick="window.location='update_cart.php?id=<?php echo $i?>&ItemID=<?php echo $value[0];?>'"></text center>
							 
						</td>
						
                    </tr><!---tr end---->
					<?php 
					$TotAmount=$TotAmount+$subTotal;
						$i=$i+1;
						$TotItem=$TotItem+$value[3];
						
						$_SESSION["totAmount"]= $TotAmount;
						
						
				}?>
                </tbody><!---tbody end---->
                
               
              <?php/*  }
              }
			  }
                    */?>
                            
                          



                            <tfoot><!---tfoot start---->

                                <tr>
                                   <th colspan="5">Total Items<th>
                                   <th colspan="2"><?php echo $TotItem;?><th>
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
                            <input style="height: 35px;"type ="button"  Onclick="window.location='cash_on_del.php?&cod=true'" name="cod" value="Cash on Delivery" class="btn btn-primary i fa fa-shopping-cart">
						
							
							
                                <button name="Checkout" class="btn btn-primary">
								Proceed Checkout <i class="fa fa-chevron-right"></i>
								</button>
								
                            

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
                                    <th> Rs.<?php echo $TotAmount;?>.00</th>
                                </tr><!----tr end---->

                                <tr><!----tr start---->
                                    <td> Shipping & Handling</td>
                                    <th> Not Measured Yet</th>
                                </tr><!----tr end---->
                                <!---<tr><!----tr start---->
                                    <!---td> Tax</td>
                                    <th> Rs. 100.00</th>
                                </tr><!----tr end---->
                                <tr class="total"><!----tr start---->
                                    <td> Total</td>
                                    <th> Rs.<?php echo $TotAmount;?>.00</th>
                                </tr><!----tr end---->

                            </tbody><!----tbody end---->
                        </table><!----table end---->
                </div><!----table-responsive end---->

            </div><!---box end---->
        </div><!---col-md-3 end---->


        </div><!----container end---->
</div><!----content end---->



<?php
//Saving Array to DB Cart table

$res=mysqli_query($con,"SELECT CartNo from cart");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $CNo=$row["CartNo"]; 
      
        if ($max < $CNo) {
            $max = $CNo;
        }

        $nextId=$max+1;
        
        $CNo=$nextId;
        //$_SESSION["CNo"]=$CNo;
        
    } 
	
	if(isset($_SESSION["user"])){

	$UNmame=$_SESSION["user"];}

if(isset($_SESSION["user"])){
	
	foreach($_SESSION["cart"] as $keys => $values){
		$result=mysqli_query($con,"INSERT into cart  (CartNo, UserName, ItemID, Qty, NewPrice, Colour, Size)values
		('$CNo','$UNmame','$value[0]','$value[3]','$NewPrice','$value[1]','$value[2]')");
	}
	
}
///}//if is set cart end

include("includes/footer.php");



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>