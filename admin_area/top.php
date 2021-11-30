
<h1 align="center"> Find top customer of the month</h1>

<form action="top_customer.php" method="post"><!-----form start--->

    <div class="form-group"><!-----form-group start--->
    
        <label> month: </label>
        <input type="text" name="m" class="form-control" required>
    
	
	
    </div><!-----form-group end-->

    <input type="submit" class="btn btn-primary form-control" value="Add" name="Stock" >

</form><!-----form end--->

<?php
include("includes/db.php");
session_start();
$res1=mysqli_query($con,"SELECT * from cus_order");

	if (isset($_POST["Stock"])){
$M=$_POST["m"];

//echo $M; echo "<br>";
	$MaxAmount=0;

		
                             while($row=mysqli_fetch_array($res1)){ 
                                $date1=$row["Ordered_Date"]; 
								 $date2=$row["Ordered_Date"]; 
								//echo $date2; echo "<br>";
								
								$date1 = explode('-', $date1);
									$month = $date1[1];
									//echo $month; 
									
									
									$day   = $date1[2];
									$year  = $date1[0];
									
									if($month==$M){
										//echo "<br>";
										//echo $month; echo "<br>";
									$res2=mysqli_query($con,"SELECT * from cus_order where Ordered_Date='$date2'");	
										while($row=mysqli_fetch_array($res2)){
										//$cusID=$row["Cus_ID"]; 
										
										//echo $cusID;
										$Amount=$row["Total_Amount"]; 	
											if($Amount>$MaxAmount){
												$MaxAmount=$Amount;
												
											}
											
										}
										
									}
								
                            }
							$res2=mysqli_query($con,"SELECT * from cus_order where Total_Amount='$MaxAmount'");	
										while($row=mysqli_fetch_array($res2)){
										$cusID=$row["Cus_ID"]; 
										//echo $cusID;
										$res3=mysqli_query($con,"SELECT * from user where UserID='$cusID'");	
										while($row=mysqli_fetch_array($res3)){
										$Fname=$row["FName"]; 
										$Lname=$row["LName"]; 
										echo $Fname." ".$Lname;
										//echo $Fname;
										}
										//echo $cusID;
										
	} 
	
										
	}



?>
