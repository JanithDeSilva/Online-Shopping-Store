<?php
include("includes/db.php");
?>

<?php

if(isset($_GET['edit_offer'])){
    $edit_id = $_GET['edit_offer'];




    $get_offer = "select * from offer where OfferID='$edit_id'";

    $run_edit = mysqli_query($con,$get_offer);

    $row_edit = mysqli_fetch_array($run_edit);


    $o_id = $row_edit['OfferID'];

    $o_name = $row_edit['O_Name'];

    $o_percentage = $row_edit['Percentage'];

}

    


    

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Offer</title>
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
//include("includes/header.php");
?>
<br>


<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Update Offer
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Update Offer 
                </h3><!----panel-title end--->
            </div><!----panel heading end--->

            <div class="panel-body"><!----panel-body start--->
                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->



                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Offer Name</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="offer_name" type="text" class="form-control" required value="<?php echo $o_name; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    
                    
                   
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Percentage</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="percentage" type="text" class="form-control" required value="<?php echo $o_percentage; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="update" type="submit" value="Update Offer" class="btn btn-primary form-control"  onclick="return confirm('Are you sure YOU WANT TO MAKE THESE CHANGES TO THIS OFFER?')">

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

if(isset($_POST['update'])){

        $offer_name = $_POST['offer_name'];
        $o_percentage = $_POST['percentage'];
        
	
$update_offer = "UPDATE offer SET O_Name='$offer_name', Percentage='$o_percentage' where OfferID='$edit_id' ";

$run_offer = mysqli_query($con,$update_offer);

if($run_offer){
    echo "<script>alert('Your offer has been successfully updated')</script>";
	
    echo "<script>window.open('view_offer.php','_self')</script>";
    
}else{
    echo "<script>alert('Offer updating failed)</script>";
    

}

}


?>
