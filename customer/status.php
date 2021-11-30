<?php
include("db.php");
$order_id=$_POST["order_id"];

    $res1=mysqli_query($con,"SELECT * from cus_order where OrderNo='$order_id'");
    while($row=mysqli_fetch_assoc($res1)){
        $status=$row["Order_Status"]; 
    }
   
    $res2=mysqli_query($con,"SELECT * from order_delivery where OrderNo='$order_id'");
    while($row=mysqli_fetch_assoc($res2)){
        $Rn=$row["Rider_Name"]; 
        $RP=$row["Rider_Phone_No"]; 
        $Date=$row["DeliveredDate"]; 
        $Time=$row["DeliveredTime"]; 

    }
    ?>

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
$active='details';
include("includes/hedear_customer.php");



?>
<div id="content"><!----content start---->

<div class="container"><!----container start---->

<div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="my_account.php">My Account</a>

                    </li>
                    <li>
                        Order Status                    
                    </li>
                </ul>

        </div><!----col-md-12 end---->

    <div class="col-md-3"><!---col-md-3 start--->
    </div><!---col-md-3 end--->

  <div class="col-md-6"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                    

<h1 align="center">Order Status </h1>

<form action="" method="post"><!-----form start--->

    <div class="form-group"><!-----form-group start--->
    
        <label> <h2>Current status:</h2> </label>
        <label style="color: green; font-size:20px"><?php echo $status; ?> </label>
        <?php if($status=='Shipped'){?><br>
            <label> <h2>Delivery Details:</h2> </label><br>
        <label>Rider's Name:</label>   <input type="text" name="RN" value="<?php echo $Rn; ?>" class="form-control" disabled> 
        <label>Rider's Contact:</label>   <input type="text" name="RN" value="<?php echo $RP; ?>" class="form-control" disabled> 
        <br><label>Your Order Deliverd on <?php echo $Date;?> at <?php echo $Time;?> </label> <?php } ?>
    </div><!-----form-group end-->

</form><!-----form end--->


</div>
</div>
</div>

<div class="col-md-3"><!---col-md-3 start--->
    </div><!---col-md-3 end--->

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