<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE login</title>
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
$active='Shop';
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
                        Login                    
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->







        </div><!---col-md-3 end--->




            <div class="col-md-6"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Login Here</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    If you have any questions, feel free to contact us. Our customer Service works <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="loginAction.php" method="post" enctype="multipart/form-data"><!--form start------>
                        
                           <div class="form-group"><!--form-group start------>

                                <label>Username</label>

                                <input type="text" class="form-control" name="C_name" required>

                           </div><!--form-group end------>
                           

                            <div class="form-group"><!--form-group start------>

                                <label>Password</label>

                                <input type="password" class="form-control" name="password" required>

                            </div><!--form-group end------>

                            

                            <div class="text-center">
                                <button type="submit" name="login" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>  Login
                                </button>

                            </div>

                            <div class="text-center">
                                
                            <h5 class="text-muted">New to Shopwise?</h5><h5><a href="customer_register.php">Register Here</a></h5>
                            </div>


                               

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