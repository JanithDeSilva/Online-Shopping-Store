<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE index</title>
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

<div id="top"><!----top begin--->

  <div class="container"><!----container begin--->

    <div class="col-md-6 offer"><!--col-md-6 offer begin-->
    
      <a href="#" class="btn btn-success btn-sm">Welcome</a>
      <a href="checkout.php">4 Items In Your Cart | Total Price: Rs.3000</a>
    
    </div><!--col-md-6 offer end-->

    <div class="col-md-6"><!--col-md-6 bedin-->

        <ul class="menu"><!--ul menu begin-->
            <li>
              <a href="customer_register_php">Register</a>
            </li>
            <li>
              <a href="customer/my_account.php">My Account</a>
            </li>
            <li>
             <a href="cart.php">Cart</a>
            </li>
            <li>
              <a href="Login.php">Login</a>
            </li>
        </ul><!--ul menu end-->

    </div><!--col-md-6 end-->


  </div><!----container end--->

</div><!----top end--->


<div id="navbar" class="navbar navbar-default"><!----navbar navbar-default start-->

  <div class="container"><!---cont start--->

       <div class="navbar-header"><!---navbar header start--->

        <a href="index.php" class="navbar-brand home"><!----navbar brand home start---->
          <img src="imgs/logo/desktop.jpg" alt="shopwise logo" class="hidden-xs"><!---desktop vision(when viewport reach xs size this imge element will be hidden )------>
          <img src="imgs/logo/mobile.jpg" alt="shopwise logo" class="visible-xs"><!---mobile vision(when viewport reach xs size this imge element will be visible )------>

        </a><!----navbar brand home start---->

       <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

          <span class="sr-only">Toggle Navigation</span>

          <i class="fa fa-align-justify"></i>

        </button>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

          <span class="sr-only">Toggle Navigation</span>

          <i class="fa fa-search"></i>
          
        </button>

       </div><!---navbar header end--->


       <div class="navbar-collapse collapse" id="navigation"><!---navbar-collapse collapse start--->

              <div class="padding-nav"><!---padding nav start--->

                  <ul class="nav navbar-nav left"><!---nav navbar-nav left start--->

                      <li>
                        <a href="index.php">Home</a>
                      </li>
                      <li>
                       <a href="includes/shop.php">Shop</a>
                      </li>
                      <li>
                       <a href="customer/my_account.php">My Account</a>
                      </li>
                      <li>
                       <a href="cart.php">Cart</a>
                      </li>
                      <li  class="active">
                        <a href="contact.php">Contact Us</a>
                      </li>


                  </ul><!---nav navbar-nav left end--->

              </div><!---padding nav end--->


         <a href="cart.php" class="btn navbar-btn btn-primary right"><!---btn navbar-btn btn-primary right start---->
              <i class="fa fa-shopping-cart"></i>

              <span>4 Items In Your Cart</span>

         </a><!---btn navbar-btn btn-primary right end---->

            <div class="navbar-collapse collapse right"><!---navbar-collapse collapse right---->

                  <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn start--->

                      <span class="sr-only">Toggle Search</span>

                      <i class="fa fa-search"></i>

                  </button><!--btn btn-primary navbar-btn end--->

            </div><!---navbar-collapse collapse right end---->


              <div class="collapse clearfix" id="search"><!--------collapse clearfix start----->

                      <form method="get" action="results.php" class="navbar-form"><!------navbar form begin------>

                            <div class="input-group"><!----input-group start---->

                                  <input type="text" class="form-control" placeholder="Search" name="user_query" required><!---required elemnts role is not directing when there is not filled the text bar-->


                                    <span class="input-group-btn"><!-----input-group-btn start---->


                                  <button type="submit" name="search" value="Search" class="btn btn-primary"><!---btn btn-primary start------>

                                      <i class="fa fa-search"></i>

                                  </button><!---btn btn-primary end------>

                                  </span><!-----input-group-btn end---->
                            </div><!----input-group end---->



                      </form><!------navbar form end------>

              </div><!--------collapse clearfix end----->


        </div><!---navbar-collapse collapse end--->

  </div><!---cont end--->

</div><!----navbar navbar-default end-->


<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Regsiter                    
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->







        </div><!---col-md-3 end--->




            <div class="col-md-12"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Register A New Acoount</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    If you have any questions, feel free to contact us. Our customer Service works <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="customer_regsiter.php" method="post" enctype="multipart/form-data"><!--form start------>
                        
                           <div class="form-group"><!--form-group start------>

                                <label>Customer ID</label>

                                <input type="text" class="form-control" name="C_name" required>

                           </div><!--form-group end------>
                           <div class="form-group"><!--form-group start------>

                                <label>First Name</label>

                                <input type="text" class="form-control" name="f_name" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Last Name</label>

                                <input type="password" class="form-control" name="l_name" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Home Number</label>

                                <input type="text" class="form-control" name="home_no" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Street</label>

                                <input type="text" class="form-control" name="street" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>City</label>

                                <input type="text=xt" class="form-control" name="city" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Email</label>

                                <input type="text" class="form-control" name="email" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Phone Number</label>

                                <input type="text" class="form-control" name="phone_no" required>

                            </div><!--form-group end------>

                            <div class="form-group"><!--form-group start------>

                                <label>Your Profile Picture</label>

                                <input type="file" class="form-control form-height-custom" name="c_image">

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                            <label>Date of Birth</label>
                              <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">

                              </div><!--form-group end------>

                              <div class="form-group"><!--form-group start------>

                                <label>Username</label>

                                <input type="text" class="form-control" name="username" required>

                            </div><!--form-group end------>

                            <div class="form-group"><!--form-group start------>

                                <label>Password</label>

                                <input type="password" class="form-control" name="password" required>

                            </div><!--form-group end------>

                            

                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>  Regsiter
                                </button>

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