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
  
 


</head>


<body>




<?php
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
                    Offers                  
                    </li>
                </ul>

        </div><!----col-md-12 end---->



        
        <div class="col-md-12"><!---col-md-12 start--->
            <div class="social-box">
    <div class="container">
     	<div class="row">
			 
			    <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-tags fa-3x" aria-hidden="true"></i>
						<div class="box-title">
            <?php 
                     $res=mysqli_query($con,"SELECT * from offer where OfferID='1'");
                    while($row=mysqli_fetch_array($res)){ 
                    $name=$row["O_Name"]; 
                    $OfferID=$row["OfferID"]; 
                    ?>
                    
							
                    <h3>  <a href='offer_items.php?Offer_ID=<?php echo $OfferID;?>'><?php echo $name;?> </a></h3>
                    <?php } ?>
              <img class="card-img-top" src="imgs/offers/offer1.jpg" alt="Card image cap">
						</div>
						<!--<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>--->
						<br>
						
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12  text-center">
					<div class="box">
					    <i class="fa fa-tags fa-3x" aria-hidden="true"></i>
						<div class="box-title">
            <?php 
                     $res=mysqli_query($con,"SELECT * from offer where OfferID='2'");
                    while($row=mysqli_fetch_array($res)){ 
                    $name=$row["O_Name"]; 
                    $OfferID=$row["OfferID"]; 

                    ?>
				  <h3>  <a href='offer_items.php?Offer_ID=<?php echo $OfferID;?>'><?php echo $name;?> </a></h3>
              <?php } ?>
              <img class="card-img-top" src="imgs/offers/offer2.jpg" alt="Card image cap">
						</div>
						<!--<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>--->
						<br>
						<div class="box-btn">
						    
						</div>
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
                        <i class="fa fa-tags fa-3x" aria-hidden="true"></i>
						<div class="box-title">
            <?php 
                     $res=mysqli_query($con,"SELECT * from offer where OfferID='3'");
                    while($row=mysqli_fetch_array($res)){ 
                    $name=$row["O_Name"]; 
                    $OfferID=$row["OfferID"]; 

                    ?>
							  <h3>  <a href='offer_items.php?Offer_ID=<?php echo $OfferID;?>'><?php echo $name;?> </a></h3>
              <?php } ?>
              <img class="card-img-top" src="imgs/offers/offer3.jpg" alt="Card image cap">
						</div>
						<!--<div class="box-text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>--->
						<br>
						<div class="box-btn">
						   
						</div>
					 </div>
				</div>	 
				
				
		
		</div>		
    </div>
</div>
            </div><!---col-md-9 end--->

        


          

        


           






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