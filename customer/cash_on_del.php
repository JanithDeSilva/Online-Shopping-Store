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


  if(isset($_SESSION["totAmount"])){
$Amount=$_SESSION["totAmount"];
  }
		if(isset($_SESSION["user"])){
		$user=$_SESSION["user"];
		}           
    $res2 = mysqli_query($db,"SELECT * FROM user where UserName='$user'");
    while($row=mysqli_fetch_array($res2)){
      
      $fname = $row['FName']; 
      $lname = $row['LName'];
      $home = $row['Home_no'];
      $street = $row['Street'];
      $city = $row['City'];
      $email = $row['Email'];
      $contact = $row['Phone_No'];
}
  
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
                                <h2>Cash on Delivery</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    Pay your bill once you recieved your order <strong>secure</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->
<?php
//$Amount="";
    //if(isset($_POST["Checkout"])){
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
		
		
       // echo ($_SESSION["OrderNo"]);
    } 
    
   



//}

?>
      <form method="post" action="cash_on_del_success.php">
         
    
    <br><br><label>Order Id</label><br>
    <input type="text" name="order_id" value="<?php echo $_SESSION["OrderNo"]; ?>" class="form-control">
    <br><label>Currency</label><br>
    <input type="text" name="currency" value="LKR" class="form-control">
    <br><label>Amount</label><br>
    <input type="text" name="amount" value="<?php echo $Amount; ?>.00" class="form-control">  
    <br><br><label>Your Order will delivered to following address</label><br>
    <input type="text" name="first_name" value=<?php echo $fname; ?> class="form-control"><br>
    <input type="text" name="last_name" value=<?php echo $lname; ?> class="form-control"><br>
    
    <input type="text" name="email" value=<?php echo $home; ?> class="form-control"><br>
    <input type="text" name="phone" value=<?php echo $street; ?> class="form-control"><br>
    <input type="text" name="address" value=<?php echo $city; ?> class="form-control"><br>
    <br><label>Email</label><br>
    <input type="text" name="city" value=<?php echo $email; ?> class="form-control">
    <br><label>Contact</label><br>
    <input type="text" name="area" value=<?php echo $contact; ?> class="form-control"><br>
    <div class="text-center">
    <input type ="button"  Onclick="window.location='cancel_order.php'" value="Cancel" class="btn btn-danger">
    <button name="cashSuccess" class="btn btn-primary">
								Confirm order <i class="fa fa-chevron-right"></i>
								</button>
								
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