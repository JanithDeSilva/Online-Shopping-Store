<?php
include("includes/db.php");
?>

<?php

if(isset($_GET['edit_delivery'])){
    $edit_no = $_GET['edit_delivery'];




    $get_delivery = "select * from order_delivery where OrderNO='$edit_no'";

    $run_edit = mysqli_query($con, $get_delivery);

    $row_edit = mysqli_fetch_array($run_edit);


    $order_no = $row_edit['OrderNO'];

    $rider_name = $row_edit['Rider_Name'];

    $rider_phone = $row_edit['Rider_Phone_No'];

    $date = $row_edit['DeliveredDate'];

    $time = $row_edit['DeliveredTime'];

}

    


    

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Delivery</title>
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
                <i class="fa fa-dashboard"></i> Dashboard / Update Delivery
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Update Delivery 
                </h3><!----panel-title end--->
            </div><!----panel heading end--->

            <div class="panel-body"><!----panel-body start--->
                <form method="POST" class="form-horizontal" enctype="multipart/form-data"><!---form-horizontal start--->



                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Rider Name</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="rider_name" type="text" class="form-control" required value="<?php echo $rider_name; ?>">

                            </div><!----col-md-6 end--->
                    </div><!----form-group end--->

                    
                    
                   
                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Rider Phone Number</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="rider_phone" type="text" class="form-control" required value="<?php echo $rider_phone; ?>">

                            </div><!----col-md-6 end--->
                        </div>

                   
                            <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> Delivered Date</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="date" type="text" class="form-control" required value="<?php echo $date; ?>">

                            </div><!----col-md-6 end--->
                            </div>


                             <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label">Delivered Time</label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="time" type="text" class="form-control" required value="<?php echo $time; ?>">

                            </div><!----col-md-6 end--->
                            </div>




                    </div><!----form-group end--->

                    <div class="form-group"><!----form-group start--->
                        <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6"><!----col-md-6 start--->

                                <input name="update" type="submit" value="Update Delivery" class="btn btn-primary form-control"  onclick="return confirm('Are you sure YOU WANT TO MAKE THESE CHANGES TO THIS DETAILS?')">

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

        $rider_name = $_POST['rider_name'];
        $rider_phone = $_POST['rider_phone'];
        $date=$_POST['date'];
        $time=$_POST['time']; 


$update_delivery = "UPDATE order_delivery SET Rider_Name='$rider_name', Rider_Phone_No='$rider_phone' , DeliveredDate='$date' , DeliveredTime='$time' where OrderNO='$edit_no'";

$run_delivery = mysqli_query($con,$update_delivery);

if($run_delivery){
    echo "<script>alert('Your delivery details have been successfully updated')</script>";
	
    echo "<script>window.open('view_delivery.php','_self')</script>";
    
}else{
    echo "<script>alert('Deliver updating failed)</script>";
    

}

}


?>
