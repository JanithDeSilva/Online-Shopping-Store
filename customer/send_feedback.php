
<html>
<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title></title>
</head>
<body>



<h1 align="center"> Send Feedback </h1>

<form  method="post" ><!-----form start--->

    
    <div class="form-group"><!-----form-group start--->
    
    </div><!-----form-group end-->
    <div class="form-group"><!-----form-group start--->
	
	
	<?php $id=$_GET["ItemId"]; ?>
	<input type="hidden" name="ItemId" value=<?php echo $id; ?>>
    
        <label> Feedback Here: </label>
        <input type="text" name="feedback" class="form-control" required>
    
    </div><!-----form-group end-->

    



<div cl="text-center"><!-----text-center start--->

    <button type="submit" name="send_feedback" class="btn btn-primary"><!-----btn btn-primary start--->

    <i class="fa fa-user-md"></i> Send
    
    </button><!-----btn btn-primary end--->

</div><!-----text-center end--->


</form><!-----form end--->

</body>
</html>
<?php 

include("includes/db.php");

if(isset($_POST["send_feedback"])){
	
	
	$res=mysqli_query($con,"SELECT FNO from feedback");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $FNO=$row["FNO"]; 
      
        if ($max < $FNO) {
            $max = $FNO;
        }

        $nextId=$max+1;
        
        $FNO=$nextId;
        //$_SESSION["CNo"]=$CNo;
        
    } 
	
	
	
	$feedBack=$_POST["feedback"];
	
	$Uname=$_SESSION["user"];
	
	$ItemID=$_POST["ItemId"];
	
	$date=date("y_m_d");
	
	$time=date("h:i:sa");
	
	
	
	$result=mysqli_query($con,"INSERT into feedback  (FNO, UserName, ItemID, FeedBack, Date, Time)values('$FNO','$Uname','$ItemID','$feedBack','$date','$time') ");
	
	if($result){
		
		
				echo "<script>alert('Thank You for the Feedback')</script>";
			    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
						
			
		}

	}
	
	
		
	


?>