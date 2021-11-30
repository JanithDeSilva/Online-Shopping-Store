<?php
include("includes/db.php");
$revenue=0;
                                $get_pro = "select * from cus_order";

                                 $run_pro = mysqli_query($con,$get_pro);

                                 while($row_pro=mysqli_fetch_array($run_pro)){
                    

                                $amount = $row_pro['Total_Amount'];
                                $revenue=$revenue+$amount;
                                 }

    echo $revenue;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISEadmin area</title>
    <!--- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    --->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 


</head>

<style>


/*panel color custom*/


#paid {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  /*width: 95%;*/
}

#paid td, #paid th {
  border: 1px solid #ddd;
  padding: 8px;
}

#paid tr:nth-child(even){background-color: #f2f2f2;}

#paid tr:hover {background-color: #ddd;}

#paid th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: teal;
  color: white;
}

/*panel color custom*/


#unpaid {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  /*width: 95%;*/
}

#unpaid td, #unpaid th {
  border: 1px solid #ddd;
  padding: 8px;
}

#unpaid tr:nth-child(even){background-color: #f2f2f2;}

#unpaid tr:hover {background-color: #ddd;}

#unpaid th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: orange;
  color: white;
}


</style>
<body>

<?php 
include("includes/header.php");
?>

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Sales Report
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  Sales Report
                </h3><!----panel-title end--->
            </div><!----panel heading end---><br>
                
               



<div class="container">
    <div class="row">
 
        <div class="col-md-12">
            <div class="col-md-5">
            <h4 style="color: teal; font-weight: 1000">  Paid Orders </h4>
           
                
        <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
               <table id="paid">
                    <tr>
                        <th>Order Number</th>
                        <th>Customer ID</th>
                        <th>Ordered Date</th>
                        <th>Amount</th>
                        <th>Order Status</th>
                        <th>Paid | Unpaid</th>
                    </tr>
                                <?php
                                $i=0;
                                 $get_pro = "select * from cus_order where Paid_or_Unpaid = 'Paid' ";

                                 $run_pro = mysqli_query($con,$get_pro);

                                 while($row_pro=mysqli_fetch_array($run_pro)){
                                $orderno = $row_pro['OrderNo'];

                                $cusID = $row_pro['Cus_ID'];

                                $date = $row_pro['Ordered_Date'];

                                $amount = $row_pro['Total_Amount'];

                                $status = $row_pro['Order_Status'];

                                $pu = $row_pro['Paid_or_Unpaid'];

								$i++;
                                 
                                ?>
                    <tr>
                        <td><?php echo $orderno; ?></td>
                        <td><?php echo $cusID; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $status; ?></td>
                        <?php if($pu=='Paid'){ ?>
                        <td style="background-color:teal"><h4 style="color: white"><?php echo $pu; ?></h4></td>
                        <?php }if($pu=='Unpaid'){ ?>
                        <td style="background-color:orange"><h4 style="color: white"><?php echo   $pu; ?></h4></td>
                        <?php } ?>

                    </tr>

                                 <?php } ?>
                   
               </table>
            </div>
     </div><!----panel-body end--->
     </div><!----col-6-->

     <!---------------------------------------------->

     <div class="col-md-5">
     
     <h4 style="color: orange; font-weight: 1000">  Unpaid Orders </h4>
                
        <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
               <table id="unpaid">
                    <tr>
                        <th>Order Number</th>
                        <th>Customer ID</th>
                        <th>Ordered Date</th>
                        <th>Amount</th>
                        <th>Order Status</th>
                        <th>Paid | Unpaid</th>
                        <th>Update Payment</th>
                    </tr>
                                <?php
                                $i=0;
                                 $get_pro = "select * from cus_order where Paid_or_Unpaid = 'Unpaid' ";

                                 $run_pro = mysqli_query($con,$get_pro);

                                 while($row_pro=mysqli_fetch_array($run_pro)){
                                $orderno = $row_pro['OrderNo'];

                                $cusID = $row_pro['Cus_ID'];

                                $date = $row_pro['Ordered_Date'];

                                $amount = $row_pro['Total_Amount'];

                                $status = $row_pro['Order_Status'];

                                $pu = $row_pro['Paid_or_Unpaid'];

								$i++;
                                 
                                ?>
                    <tr>
                        <td><?php echo $orderno; ?></td>
                        <td><?php echo $cusID; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $amount; ?></td>
                        <td><?php echo $status; ?></td>
                        
                        <td><?php echo $pu; ?></h4></td>
                        
                       

                        <td>
                        <a style="font-size: 15px;" href="update_payment.php?edit_status=<?php echo  $orderno; ?>">
                                        <i class="fa fa-pencil"></i> Update

                        </a>  
                        </td>

                    </tr>

                                 <?php } ?>
                   
               </table>
            </div>
     </div><!----panel-body end--->
     </div><!----col-6-->

     <div class="col-md-2">
       
       <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h4 style="font-weight: 1000; ">
                            <span style="   font-size: 20px;"></span> Sales Revenue 
                        </h4>
                    </div>
       <i class="fa fa-money" style="font-size: 40px; color: teal"></i>
              
               
                <!-- Card #1, Starter -->
           
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;">
                            <span style="   font-size: 20px;">LKR</span> <?php echo $revenue; ?>
                        </h1>
                    </div>
                    
                </div>
            </div>
     </div>

     <!------------------------>


     
 


 




</div>

</div>
</div>




               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>