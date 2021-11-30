<html>
<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title></title>
</head>
<body>

</body>
</html>
<?php 
include("db.php");
session_start();
echo 
	"<script type='text/javascript'>
			 swal({ icon:'success' ,title:'',
			 		text:'Your Order has been successfully placed. Check status to track the order!'}).then
			 (okey =>{
			 	if(okey){
			  window.location.href ='cart.php','_self';}
			 });

		 </script>";

$OrderNo=0;
if(isset($_SESSION["OrderNo"])){
                            $OrderNo=$_SESSION["OrderNo"];
}
$cart=array();
if(isset($_SESSION["cart"])){
    $cart=$_SESSION["cart"];
}

   if(isset($_SESSION["user"])){
                            $user=$_SESSION["user"];
                            
                           $res3=mysqli_query($con,"SELECT * from user where UserName='$user'");
						   $UserId=0;
                             while($row=mysqli_fetch_array($res3)){ 
                                $UserId=$row["UserID"]; 
                            }
                        }

						    $date=date("Y/m/d");
    $time=date("h:i:s");    
     
			$Amount=0;			   
        if(isset($_SESSION["totAmount"])){
				$Amount=$_SESSION["totAmount"];
        }
	////////////////////////



foreach($cart as $key=>$value){
	
	$res14=mysqli_query($con,"SELECT * from stock where ItemID='$value[0]' and Colour='$value[1]' and Size='$value[2]'");
	while($row=mysqli_fetch_array($res14)){ 
                                $ItemNo=$row["ItemNo"]; 
								$ItemQty=$row["Qty"];
								$newQty=$ItemQty-$value[3];
			
	$res6=mysqli_query($con,"update stock set Qty='$newQty' where ItemNo='$ItemNo'");			
	}                  
	
	$res12=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo','$ItemNo','$value[3]')");
	
	
	
}
	

	
		
		
   $res2=mysqli_query($con,"INSERT into cus_order values('$OrderNo',' $UserId','$date','$time','$Amount','Successfully ordered','Unpaid')");

    $res4=mysqli_query($con,"INSERT into payment values('$OrderNo','Visa Card','$Amount','$time','$date')");
		
		
		
		
		
	unset($_SESSION["cart"]);	

      

        

 
?>


