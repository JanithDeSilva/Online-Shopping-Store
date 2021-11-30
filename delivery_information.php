


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE social media contact</title>
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
session_start();		

?>

<?php

$active='Delivery Info';
include("includes/header.php");



?>


<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                    Delivery Information                
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        


        <div class="col-md-12"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Delivery Information   </h2>

                                <p class="text-muted"><!--text-muted start---><br>
                                
                                <h4 style="text-align:left;  "><strong> | HOW WILL MY ORDER BE DELIVERED? </strong></h4>
                                    <p style="text-align:left">
                                    Your order will be delivered as per our delivery plan depending on the locations.
                                     Orders received during office working hours will be promptly
                                      dealt with and non- working days will be followed up.</p>
                                    <br>
                                    <h4 style="text-align:left; "><strong>| DO I HAVE TO BE THERE TO SIGN FOR DELIVERY?</strong></h4>
                                    <p style="text-align:left">
                                    In some instances, you will be required to provide a signature when your order is delivered. We will advise you of this at the checkout. The signature does not need to be of the account holder, just the person accepting the parcel.  If you are not available at the delivery address you could collect it at the nearest Hameedia Retail outlet by alternative arrangement.
                                    <br><br>
                                    <h4 style="text-align:left; "><strong>| DELIVERY TIME </strong></h4>
                                    <p style="text-align:left">
                                    Deliveries will be done within 3 working days.<br>
                                    Customers will be notified at the earliest possible time if there any unavoidable delays with their order.
                                </p>

                                    
                                    
                                     
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="contact.php" method="post"><!--form start------>
                        
                           
                               

                        </form><!--form end------>
                    </div><!---boxheader end--->
                </div><!---box end--->
            </div><!---col-md-9 end--->


           






        </div><!----container end---->

</div><!----content end---->


<?php
include("includes/footer.php");



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>