<?php
session_start();
//$_SESSION["IP"]=$_SERVER['REMOTE_ADDR'];
if(!isset($_SESSION["wish"])){
	$_SESSION["wish"]=array();
}
	$_SESSION["item1"]=array();

if(isset($_GET["ItemID"])){
	$_SESSION["item1"][]= $_GET['ItemID'];}
if(isset($_GET["Colour"])){
	$_SESSION["item1"][]= $_GET['Colour'];
	
	}

//$_SESSION["color"]=$color;
//echo $_SESSION["color"];
if(isset($_GET["product_size"])){
	$_SESSION["item1"][] = $_GET['product_size'];}

//$_SESSION["size"]=$size;
if(isset($_GET["quantity"])){
	$_SESSION["item1"][]= $_GET['quantity'];
	//unitPrice
$_SESSION["item1"][]= 100;
}

$_SESSION["wish"]=$_SESSION["item1"];
if(isset($_GET["ItemID"])){
	
	$found=false;
foreach($_SESSION["wish"] as $key => $value){
	if($value[0]==$_GET["ItemID"]){
		$found=true;
	}
	
}
if(!$found&&count($_SESSION["item"],COUNT_NORMAL)==4){
$_SESSION["wish"][]=$_SESSION["item1"];
}
}

print_r ($_SESSION["wish"]);
print_r($_SESSION["item1"]);


	
?>
<?php
if(isset($_GET["addtowish"])){
    
$color = $_GET['Colour'];

$size = $_GET['product_size'];

$Qty = $_GET['quantity'];

$item_id = $_GET['ItemID'];


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
    
      <a href="#" class="btn btn-success btn-sm">Welcome</a>
     
    
    </div><!--col-md-6 offer end-->

    <div class="col-md-6"><!--col-md-6 bedin-->

        <ul class="menu"><!--ul menu begin-->

            <li>
              <a href="cart.php">Cart</a>
            </li>

            <li>
              <a href="customer_register.php">Register</a>
            </li>

            <li>
              <a href="../Login.php">Login</a>
            </li>
        </ul><!--ul menu end-->

    </div><!--col-md-6 end-->


  </div><!----container end--->

</div><!----top end--->


<div id="navbar" class="navbar navbar-default"><!----navbar navbar-default start-->

  <div class="container"><!---cont start--->

       <div class="navbar-header"><!---navbar header start--->

        <a href="index.php" class="navbar-brand home"><!----navbar brand home start---->
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

                      <li class="<?php if($active=='Home') echo"active";  ?>">
                      <a href="index.php?home">Home</a>
                      </li>

                      <li class="<?php if($active=='Shop') echo"active";  ?>">
                      <a href="shop.php?home">Shop</a>
                      </li>

                      


                      <li class="<?php if($active=='Offers') echo"active";  ?>">
                      <a href="offers.php?home">Offers</a>
                      </li>

                      <li class="<?php if($active=='Delivery Info') echo"active";  ?>">
                       <a href="delivery_information.php">Delivery Info</a>
                      </li>
                      <li class="<?php if($active=='About Us') echo"active";  ?>">
                       <a href="about_us.php">About Us</a>
                      </li>
                      <li class="<?php if($active=='Contact Us') echo"active";  ?>">
                        <a href="contact.php">Contact Us</a>
                      </li>
                      <li class="<?php if($active=='Privacy Policy') echo"active";  ?>">
                        <a href="privacy_policy.php">Privacy Policy</a>
                    </li>


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
							echo "cart.php";}
							else{
                            echo "../login.php";}
							
							?>      method="post" enctype="multipart/form-data"><!---form start---->
							
                <?php print_r ($_SESSION["wish"] );?>
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
							
							
                            $totAmount1=0;
                            $totItem=0;
                            
							?>
                     
                    <tbody><!---tbody start---->
					
					<?php
					//print_r($_SESSION["cart"]);
					$TotAmount1=0;
					$TotItem=0;
					$i=0;
					
					foreach($_SESSION["item1"] as $key => $value){
					
						print_r($value);
						
					?>
					
                    <tr><!---tr start---->

						
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
					$TotAmount1=$TotAmount1+$subTotal;
						$i=$i+1;
						$TotItem=$TotItem+4;
						
						$_SESSION["totAmount1"]= $TotAmount1;
						
						
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
                                   <th colspan="2"><?php echo $TotAmount1;?><th>
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
							
							
                                <button name="Checkout"  class="btn btn-primary">
								Add to cart <i class="fa fa-chevron-right"></i>
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
                                    <th> Rs.<?php echo $_SESSION["totAmount1"];?>.00</th>
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
                                    <th> Rs.<?php echo $totAmount1;?>.00</th>
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

/*$res=mysqli_query($con,"SELECT CartNo from cart");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $CNo=$row["CartNo"]; 
      
        if ($max < $CNo) {
            $max = $CNo;
        }

        $nextId=$max+1;
        
        $CNo=$nextId;
        //$_SESSION["CNo"]=$CNo;
        
    } */
	
/*	if(isset($_SESSION["user"])){

	$UNmame=$_SESSION["user"];}

if(isset($_SESSION["user"])){
	
	foreach($_SESSION["wish"] as $keys => $values){
		$result=mysqli_query($con,"INSERT into cart  (CartNo, UserName, ItemID, Qty, NewPrice, Colour, Size)values
		('$CNo','$UNmame','$value[0]','$value[3]','$NewPrice','$value[1]','$value[2]')");
	}

}*/


include("includes/footer.php");



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>