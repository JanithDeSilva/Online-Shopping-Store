<?php
include("includes/db.php");
include("functions/functions.php");
session_start();	


      
    if($_SESSION["user"]==''){
      header("location:../login.php");
    }
		
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
    <!---  <a href="checkout.php">4 Items In Your Cart | Total Price: Rs.3000</a>-->
     
    
    </div><!--col-md-6 offer end-->

    <div class="col-md-6"><!--col-md-6 bedin-->

    <ul class="menu"><!--ul menu begin-->
        
        <li>
         <a href="my_account.php">My Account</a>
       </li>
      <li>
        <a href="cart.php">Cart</a>
       </li>
       <li>
        <a href="wishlist.php">WishList</a>
       </li>
       <li>
         <a href="../logout.php">Logout</a>
       </li>
  
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

                  <li>
                        <a href="customerLand.php">Home</a>
                      </li>
                      <li >
                       <a href="shop.php">Shop</a>
                      </li>
                      <li>
                       <a href="offers.php">Offers</a>
                      </li>
                      <li>
                       <a href="delivery_information.php">Delivery Info</a>
                      </li>
                      <li>
                       <a href="about_us.php">About Us</a>
                      </li>
                      <!---<li>
                       <a href="customer/my_account.php">My Account</a>
                      </li>--->
                      
                      
                      
                      <li>
                        <a href="contact.php">Contact Us</a>
                      </li>
                      <li>
                        <a href="privacy_policy.php">Privacy Policy</a>
                      </li>

                  </ul><!---nav navbar-nav left end--->

              </div><!---padding nav end--->


         <a href="cart.php" class="btn navbar-btn btn-primary right"><!---btn navbar-btn btn-primary right start---->
           <i class="fa fa-shopping-cart"></i>

             <!--- <span>4 Items In Your Cart</span>-->

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