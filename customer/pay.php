<?php 
include("db.php");

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
include("includes/hedear_customer.php");
?>



<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="cart.php">Cart</a>

                    </li>
                    <li>
                        Payment                      
                    </li>
                </ul>

        </div><!----col-md-12 end---->


    

<div class="container">
<div class="col-md-2">
    </div>
    <div class="col-md-8"><!----col-md-8 start---->
    <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Pay Here</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    Pay with your card easily <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->
<?php
//$Amount="";
    if(isset($_POST['Checkout'])){
        if(isset($_SESSION["totAmount"])){
    $Amount=$_SESSION["totAmount"];
        }

        if(isset($_SESSION["ItemNo"])){
            $ItemNo=$_SESSION["ItemNo"];
                }
        
                if(isset($_SESSION["Qty"])){
                    $Qty=$_SESSION["Qty"];
                        }
                

    $res=mysqli_query($con,"SELECT OrderNo from cus_order");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $id=$row["OrderNo"]; 
      
        if ($max < $id) {
            $max = $id;
        }

        $nextId=$max+1;
        
        $OrderNo=$nextId;
        $_SESSION["OrderNo"]=$OrderNo;
        
    } 
    
   



}

?>
      <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
         
    <input type="hidden" name="merchant_id" value="1213817">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/myproject1/SHOPWISE_DRIVE_UPLOAD/shopwise_new_15_3_2020/customer/PaymentSuccess.php">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
    <br><br><label>Order Id</label><br>
    <input type="text" name="order_id" value="<?php echo $_SESSION["OrderNo"]; ?>" class="form-control">
    <input type="hidden" name="items" value="Door bell wireless" class="form-control"><br>
    <input type="text" name="currency" value="LKR" class="form-control"><br>
    <input type="text" name="amount" value="<?php echo $Amount; ?>.00" class="form-control">  
    <br><br><label>Customer Details</label><br>
    <input type="text" name="first_name" value="Saman" class="form-control"><br>
    <input type="text" name="last_name" value="Perera" class="form-control"><br>
    <input type="text" name="email" value="samanp@gmail.com" class="form-control"><br>
    <input type="text" name="phone" value="0771234567" class="form-control"><br>
    <input type="text" name="address" value="No.1, Galle Road" class="form-control"><br>
    <input type="text" name="city" value="Colombo" class="form-control"><br>
    <input type="text" name="area" value="Area" class="form-control"><br>
    <input type="hidden" name="country" value="Sri Lanka" class="form-control"><br><br> 
    
    <div class="text-center">
    <input type="submit" value="Buy Now" class="btn btn-primary" name="Buy">  
    </div> 
</form> 
</div></div>
</div><!----col-md-8 end--->
</div>

</div>

<div class="col-md-2">
    </div>
</div>


<?php
include("includes/footer.php");



?>


</body>