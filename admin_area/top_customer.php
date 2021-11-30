<?php
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Items</title>
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
include("includes/header.php");
?>


<br>
<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Top Customer
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Find Top Customer
                </h3><!----panel-title end--->
			</div><!----panel heading end--->

<div id="content"><!----content start---->

	<div class="container"><!----container start---->
		<div class="col-md-2">
			</div>

        <div class="col-md-8"><!----col-md-12 start---->

               
        
			
<h1 align="center"> Find top customer of the month</h1>

<form action="top_customer.php" method="post"><!-----form start--->

    <div class="form-group"><!-----form-group start--->
    
        <label>Add the Month:</label><br>
        <input type="text" name="m" class="form-control" required>
    
	
	
    </div><!-----form-group end-->

    <input type="submit" class="btn btn-primary form-control" value="Add" name="Stock" >

</form><!-----form end--->

<?php
//include("includes/db.php");
//session_start();
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
										$totoAmount=$row["Total_Amount"];
										//echo $cusID;
										$res3=mysqli_query($con,"SELECT * from user where UserID='$cusID'");	
										while($row=mysqli_fetch_array($res3)){
										$userid=$row["UserID"];
										$Fname=$row["FName"]; 
										$Lname=$row["LName"]; 
										$home=$row["Home_no"];
										$street=$row["Street"];
										$city=$row["City"];
										$email=$row["Email"];
										$contact=$row["Phone_No"];
										$img=$row["Image"];

							
										?>  <br> <br>

										<label>Top Customer of the <?php echo $M?> is : </label>

			<div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

					<thead><!---thead start--->
                            <tr style="color: teal"><!---tr start--->
                                <th>User ID</th>
                                <th>Name</th>		
                                <th>Home Number</th>
                                <th>Street</th>
								<th>City</th>
								<th>Email</th>
								<th>Contact</th>
								<th>Total Buying Amount</th>
                                <th>Image</th>
								
                                
                            </tr><!---tr end--->
						</thead><!---thead end--->
						<tbody><!---tbody end--->
								<tr>
									<td><?php echo $userid?></td>
									<td><?php echo $Fname." ".$Lname?></td>
									<td><?php echo $home?></td>
									<td><?php echo $street?></td>
									<td><?php echo $city?></td>
									<td><?php echo $email?></td>
									<td><?php echo $contact?></td>
									<td><?php echo $totoAmount?></td>
									<td><?php echo $img?></td>
								</tr>
						</tbody><!---tbody start--->
						
					</table><!---table table-striped table-bordered table-hover end--->
				</div><!----table-responsive end--->
			</div><!----panel-body end--->
										
										
										<?php
										//echo $Fname." ".$Lname;
										//echo $Fname;
										}
										//echo $cusID;
										
	} 
	
										
	}



?>
<div class="col-md-2">

			</div>
</div><!----col-md-12 end---->
</div>



	</body>

</html>