
<?php
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Delivery Details</title>
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
                <i class="fa fa-dashboard"></i> Dashboard / View Delivery Details
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i> View Delivery Details
                </h3><!----panel-title end--->
            </div><!----panel heading end--->




            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
                                <th>Order No</th>
                                <th>Rider Name</th>
                                <th>Rider Phone</th>
                                <th>Date</th>
                                <th>Time</th>

                                
                                <th>Update</th>
                                 <th>Delete</th>
                              
                                
								
                            </tr><!---tr end--->
                        </thead><!---thead end--->

                        <tbody><!---tbody start--->
                            <?php
                            
                            $i=0;

                            $get_Delivery = "select * from order_delivery";

                            $run_Delivery = mysqli_query($con,$get_Delivery);

                            while($row_Delivery=mysqli_fetch_array($run_Delivery)){
                                $order_no = $row_Delivery['OrderNO'];

                                $rider_name = $row_Delivery['Rider_Name'];

                                $rider_phone = $row_Delivery['Rider_Phone_No'];

                                 $date = $row_Delivery['DeliveredDate'];

                                  $time = $row_Delivery['DeliveredTime'];

                                
                               $i++;
                               ?>

                               <tr><!---tr start--->
                                    <td><?php echo $order_no; ?></td>
                                    <td><?php echo $rider_name; ?></td>
									<td><?php echo $rider_phone; ?></td>
                                    <td><?php echo $date ; ?></td>
                                    <td><?php echo $time ; ?></td>
									
                                    
                                   
                                    <td>   
                                         <a href="update_delivery.php?edit_delivery=<?php echo $order_no ; ?>">
                                        <i class="fa fa-pencil"></i> Update

                                        </a>                    
                                    </td>

                                    <td>   
                                         <a href="delete_delivery.php?delete_delivery=<?php echo $order_no ; ?>">
                                        <i class="fa fa-pencil"></i> Delete

                                        </a>                    
                                    </td>
									
									 
                               </tr><!---tr end--->


                            <?php } ?>




                            
                        </tbody><!---tbody end--->

                    </table><!----table table-striped table-bordered table-hover end--->
                </div><!----table-responsive end--->
            </div><!----panel-body end--->

        






</div>


            </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
