<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE social media contact</title>
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
  
 <script>
 function wishListValue(){
	 
		var iid=document.getElementById("iid").value;
		var clr=document.getElementById("clr").value;
		var size=document.getElementById("size").value;
		var qty=document.getElementById("qty").value;
		
		//var qwl=document.getElementById("addtowish").value;
		
	 
	 window.location="wishlist.php?ItemID="+iid+"&Colour="+clr+"&product_size="+size+"&quantity="+qty+"&addtowish="+true;
	 
 }
 
 
 
	function cal(){
		
		var clr=document.getElementById("clr").value;
		var size=document.getElementById("size").value;
		
		var iid=document.getElementById("iid").value;
		var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
if(xhr.readyState==4){
      document.getElementById("t").innerHTML=xhr.responseText;
	  // document.getElementById("btnList").remove();
}
		}
	
			xhr.open("GET","cal.php?clr="+clr+"&size="+size+"&iid="+iid,true);
			
	

		xhr.send(null);
		return false;
		
	
	}
	
		function validQty(){
		
		var qty=parseInt(document.getElementById("qty").value);
		
		var t=parseInt(document.getElementById("t").innerHTML.split("Availabe quantity ")[1]);
		
		if(qty>t ){
			alert("invalid Qty");
			document.getElementById("qty").value="0";
		}
		
		else if(qty==0){
			alert("invalid Qty");
			document.getElementById("qty").value="";
		}
		
	
	}
	
	
 </script>


</head>


<body>



<?php
$active='details';
include("includes/hedear_customer.php");



?>



<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Shop                      
                    </li>
                    <li>
                        <a href="shop.php?ItemID=<?php echo $item_id; ?>"><?php echo  $pro_title; ?></a>                 
                    </li>

                    <li>
                        <?php echo $pro_title;?> 
                        
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->
             <?php
                include("includes/sidebar.php");
              ?>

        </div><!---col-md-3 end--->




        <div class="col-md-9"><!---col-md-9 start------>
        <div id="productMain" class="row"><!---row start------>
            <div class="col-sm-6"><!---col-sm-6 start------>
                <div id="mainImage"><!---mainImage start------>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel"><!---carousel slide start------>
                        <ol class="carousel-indicators"><!---carousel-indicators start------>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol><!---carousel-indicators end------>

                        <div class="carousel-inner"><!---carousel-inner start------>
                            <div class="item active">
                                <center><img class="img-responsive" src="../admin_area/<?php echo $pro_img1 ?>" alt="Product 1"></center>
                            </div>
                            <div class="item">
                                <center><img class="img-responsive" src="../admin_area/<?php echo $pro_img2 ?>" alt="Product 2"></center>
                            </div>
                            <div class="item">
                                <center><img class="img-responsive" src="../admin_area/<?php echo $pro_img3 ?>" alt="Product 3"></center>
                            </div>
                        </div><!---carousel-inner end------>


                        <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-----left carousel-control start---->
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a><!-----left carousel-control end---->
                        <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-----right carousel-control start---->
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a><!-----right carousel-control end---->

                        
                    </div><!---carousel slide end------>
                </div><!---mainImage end------>
            </div><!---col-sm-6 end------>


                <div class="col-sm-6"><!-------col-sm-6 start------->
                    <div class="box"><!-------box start------->
                        <h1 class="text-center"><?php echo $pro_title; ?></h1>

                        <?php add_cart();
                       
                        
                        ?>
                       
					<!--SUBMIT VALUE TO cart.php File USING GET METHOD-->
					
                        <form action="cart.php" class="form-horizontal" method="GET"><!---form-horizontal start--->

                        <div class="form-group"><!--------form-group start------->
                              <!--  <label class="col-md-5 control-label">Product ID</label>--->

                                <div class="col-md-7">
                                   <!-- <input class="form-control" type="text" name="ItemID" value="<?php //echo $item_id; ?>">-->
                                    
									
									
                                    <input class="form-control" type="hidden" name="ItemID" value="<?php echo $item_id; ?>">
                                        
                                    
                                </div>

                            </div><!--------form-group end------->

                            <div class="form-group"><!---form-group start--->
                                <label for="" class="col-md-5 control-label">Product Color</label>

                                <div class="col-md-7"><!---col-md-7 start----->
                               <input type="text" id="iid" value="<?php echo $item_id;?>" hidden  required>
                                    <!---select start----->
                                    <select name="Colour" class="form-control" id="clr" onchange="cal()" required>
                                    <option value='1'>Select a colour</option>
                                

                                <?php
                                
                               
                                $res1 = mysqli_query($db,"SELECT * FROM stock where ItemID='$item_id'");
                                $colour1='';
                                $colour='';
                                while($row=mysqli_fetch_array($res1)){
									$colour= $row['Colour'];
									if($colour!="$colour1"){
									 echo " <option value='$colour'>$colour</option> ";
									}
									$colour1=$colour;
								}
                                ?>
                          
                                </select>
                                <!---select end----->
								
								

                                </div><!---col-md-7 end----->
                            </div><!---form-group end--->
                            
                            <div class="form-group"><!--------form-group start------->
                                <label class="col-md-5 control-label">Product Size</label>

                                <div class="col-md-7">
                                    <select name="product_size" class="form-control" oninput="setCustomValidity('')"
                                    oninvalid="setCustomValidity('Must Pick One size for the product')" id="size" onchange="cal()" required>
                                         <option disabled selected>Select A Size</option>
                                         <?php
                                
                               
                                $res1 = mysqli_query($db,"SELECT * FROM stock where ItemID='$item_id'");
                                $size1='';
                                while($row=mysqli_fetch_array($res1)){
                                    $size= $row['Size'];
                                    if($size!="$size1"){
                                    echo " <option value='$size'>$size</option> ";
                                    }
                                    $size1=$size;
                        
                            }
                            
                                ?>
                                    </select>
                                </div>

                            </div><!--------form-group end------->


                            <div class="form-group"><!--------form-group start------->
                                <label class="col-md-5 control-label">Product Quantity</label>

                                <div class="col-md-7">
								
								
								<span id="t"></span>
								
                                    <input class="form-control" type="text" name="quantity" placeholder="Product quantity" id="qty" onkeyup="validQty()">
                                        
                                    </select>
                                </div>

                            </div><!--------form-group end------->
                            <?php 
                            $res1 = mysqli_query($db,"SELECT * FROM item WHERE ItemID='$item_id'");
                            while($row=mysqli_fetch_array($res1)){
                                $offer_id = $row['Offer_ID'];
                            $res2 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                            while($row=mysqli_fetch_array($res2)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
                                $NewPrice=$pro_price - $Amount;
                                
                                ?>
                            
                           
                            

                           
                                 <h4 class='price'>

                     Rs. <?php echo $NewPrice?> /= 
                <span style='color:red;font-size:20px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block'> Rs. <?php echo $pro_price ?> /= </span>

                </h4>
                           

                            <!---<p class="price"> Rs <?php //echo $NewPrice ?> /= </p>--->
                           
                            <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart" type="submit"> Add to cart </button></p>      
                            <!--<p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart" > Add to wishlist </button></p>-->
							<!-- <button onclick="window.location.href.wishlist.php?ItemID=<?php //echo'$item_id'?>?Colour=<?php// echo'$colour'?>?product_size=<?php //echo '$size'?>?quantity='quantity'">Add to wishliste</button>-->
						
						
						
						
						
			<!--	<form action="wishlist.php" method="GET">
								<input type="hidden" name="ItemID" value="5" >
								<input type="hidden"  name="Colour" value="Red" >
								<input type="hidden"  name="product_size" value="S" >
								<input type="hidden" name="quantity" value="4" >
								<input type ="submit" name="addtowish"  value="Add to wishlist" class="btn btn-primary i fa fa-shopping-cart">
						</form>>-->

					<input type ="button" name="addtowish"  id="addtowish" onclick="wishListValue()" value="addtowish" class="btn btn-primary i fa fa-shopping-cart">
					
					
			<?php }}?>		
			
                        </form><!---form-horizontal end-->


                </div><!-------box end------->



            <div class="box" id="thumbs"><!----bow start--->


            <div class="col-xs-4"><!----col-xs-4 start--->
                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!----thumb start--->
                    <img src="../admin_area/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                    </a><!----thumb end--->
                    </div><!----col-xs-4 end--->

                    <div class="col-xs-4"><!----col-xs-4 start--->
                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!----thumb start--->
                    <img src="../admin_area/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                    </a><!----thumb end--->
                    </div><!----col-xs-4 end--->

                    <div class="col-xs-4"><!----col-xs-4 start--->
                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!----thumb start--->
                    <img src="../admin_area/<?php echo $pro_img3; ?>" alt="product 3" class="img-responsive">
                    </a><!----thumb end--->
                    </div><!----col-xs-4 end--->
   
            </div><!----box end--->

            </div><!-------col-sm-6 end------->
 </div><!---row end------>


                <div class="box" id="details"><!---box start-->
                
                    <h4> Product Details </h4>

                    <p> <?php echo $pro_desc;?> </p>

                    
                    <hr>
                
                </div><!---box end-->


             


                 <div id="row same-high-row"><!-------row same-high-row start--->
              <div class="col-md-3 col-sm-6"><!-------col-md-3 col-sm-6 start--->
                    <div class="box same-height headline"><!-------box same-height headline start--->
                     <h3 class="text-center">Products You may be Like</h3>
                        </div><!-------box same-height headline end--->
                </div><!-------col-md-3 col-sm-6 end--->

                    
                    <?php 
                    $res1 = mysqli_query($db,"SELECT * FROM item WHERE ItemID='$item_id'");
                    while($row=mysqli_fetch_array($res1)){
                        $Sub_Cat_Name = $row['Sub_Cat_Name'];
                    $get_products = "select * from item WHERE Sub_Cat_Name='$Sub_Cat_Name' order by rand() DESC LIMIT 0,3";

                    $run_products = mysqli_query($con,$get_products);

                    while($row_products=mysqli_fetch_array($run_products)){
                            $Item_id = $row_products['ItemID'];

                            $pro_title = $row_products['Description'];

                            $pro_img1 = $row_products['Product_Img1'];

                            $pro_price = $row_products['Price'];

                            if($item_id!= $Item_id){
                            echo "
                            
                            
                            <div class='col-md-4 col-sm-6 center-responsive'>
                            
                                <div class='product same-height'>
                                    <a href='details.php?ItemID=$Item_id'>
                                        <img class='img-responsive' src='../admin_area/$pro_img1'>
                                    </a>

                                    <div class='text'>
                                        <h3> <a href='details.php'?ItemID='$item_id'> $pro_title</a> </h3>
                                        <p class='price'> $pro_price </p>

                                    </div>

                                </div>
                            </div>
                            
                            
                            ";
                            }
                    }       
                    }
                    
                    ?>

                </div><!-------row same-high-row end--->


            </div><!---col-md-9 end------>   
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