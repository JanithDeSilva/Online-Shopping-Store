<?php

session_start();
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert item</title>
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
                <i class="fa fa-dashboard"></i> Dashboard / Insert 
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Insert Offer
                </h3><!----panel-title end--->
            </div><!----panel heading end--->

            <div class="panel-body"><!----panel-body start--->
                <form method="post" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Offer Name</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="offer_name" type="text" class="form-control" required>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


                    
                   
                
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Percentage</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="percentage" type="text" class="form-control" required>

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    
                   
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="submit" type="submit" value="Insert Offer" class="btn btn-primary form-control">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->


                   
                </form><!---form-horizontal end-->
            </div><!----panel-body end--->

        </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php

if(isset($_POST['submit'])){
	
	$res=mysqli_query($con,"SELECT OfferID from offer");
    //Generate a ID to item start
    $max=0;
	while($row=mysqli_fetch_array($res)){ 
		$id=$row["OfferID"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
    //Generate a ID to item end 

    $OfferID=$nextId;
	//$_SESSION["OfferID"] =$OfferID;

$o_name = $_POST['offer_name'];
$o_percentage = $_POST['percentage'];


$run_offer = mysqli_query($con,"insert into offer values ('$OfferID','$o_name ','$o_percentage')");

if($run_offer){
    echo "<script>alert('offer has been Inserted Successfully')</script>";

}else{
    echo "<script>alert('offer saving failed')</script>";
    echo "<script>window.open('insert_offer.php','_self')</script>";
}

}


?>
