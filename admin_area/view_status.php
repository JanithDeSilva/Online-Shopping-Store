
<?php
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Status</title>
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
                <i class="fa fa-dashboard"></i> Dashboard / View Status
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  View Status
                </h3><!----panel-title end--->
            </div><!----panel heading end--->




            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
                                <th>OrderID</th>
                                <th>Status</th>
                               

                                <th>Status Update</th>
                              
                                
								
                            </tr><!---tr end--->
                        </thead><!---thead end--->

                        <tbody><!---tbody start--->
                            <?php
                            
                            $i=0;

                            $get_status = "select * from cus_order ";

                            $run_status = mysqli_query($con,$get_status);

                            while($row_status=mysqli_fetch_array($run_status)){
                                $order_id = $row_status['OrderNo'];

                                $status = $row_status['Order_Status'];

                                
                               $i++;
                               ?>

                               <tr><!---tr start--->
                                    <td><?php echo  $order_id; ?></td>
									<?php if($status=='Shipped'){ ?>
                                    <td style="background-color:teal"><h4 style="color: white"><?php echo   $status; ?></h4></td>
									<?php }if($status=='Successfully ordered'){ ?>
                                    <td style="background-color:orange"><h4 style="color: white"><?php echo   $status; ?></h4></td>
									
									<?php }  if($status=='Successfully delivered'){ ?>
                                    <td style="background-color:green"><h4 style="color: white"><?php echo   $status; ?></h4></td>  
                                   <?php } ?>
                                    <td>   
									
									
                                         <a href="update_status.php?edit_status=<?php echo  $order_id; ?>">
                                        <i class="fa fa-pencil"></i> Update

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
