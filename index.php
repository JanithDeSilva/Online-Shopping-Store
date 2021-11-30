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


<?php
session_start();		

?>

<?php
$active='Home';
include("includes/header.php");



?>








<div class="container" id="slider"><!-----slider start---->

<div class="col-md-12"><!--col-md-12 start------>

  <div class="carousel slide" id="myCarousel" data-ride="carousel"><!----carousel slide start----->

      <ol class="carousel-indicators"><!------carousel-indicators start---->

          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>

      </ol><!------carousel-indicators end---->


  <div class="carousel-inner"><!----carousel-inner start---->

        <div class="item active">

          <img src="imgs/sliders/slider2.jpg" alt="Slider Image 1">

        </div>
        <div class="item">

          <img src="imgs/sliders/slider011.jpg" alt="Slider Image 2">

        </div>
        <div class="item">

          <img src="imgs/sliders/jewe.jpg" alt="Slider Image 3">

        </div>
        <div class="item">

          <img src="imgs/sliders/slider04.jpg" alt="Slider Image 4">

        </div>

  </div><!-----carousel-inner end--->



      <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!---left carousel-control start------>

              <span class="glyphicon glyphicon-cevron-left"></span>
              <span class="sr-only">Prevoius</span>

       </a><!---left carousel-control end------>

       <a href="#myCarousel" class="right carousel-control" data-slide="next"><!---left carousel-control start------>

              <span class="glyphicon glyphicon-cevron-right"></span>
              <span class="sr-only">Next</span>

      </a><!---left carousel-control end------>


  </div><!----carousel slide end----->

</div><!--col-md-12 end------>


</div><!-----slider end---->




<!---customer servce start--->
<div class="col-md-12"><!---col-md-12 start--->
          <div class="social-box">
  <div class="container">
       <div class="row">
           
              <div class="col-lg-4 col-xs-12 text-center">
                  <div class="box">
                      <i class="fa fa-heart fa-3x" aria-hidden="true"></i>
                      <div class="box-title">
                          <h3>We Love Our Customer</h3>
                      </div>
                      <div class="box-text">
                          <span>We ensure you will recieve 100% guaranteed freidnly service from us qith high quality products. You will amazed by our customer support.</span>
                      </div>
                      <!--<div class="box-btn">
                          <a href="https://www.facebook.com/">Learn More</a>
                      </div>--->
                   </div>
              </div>	 
              
               <div class="col-lg-4 col-xs-12  text-center">
                  <div class="box">
                      <i class="fa fa-tag fa-3x" aria-hidden="true"></i>
                      <div class="box-title">
                          <h3>Best Prices from Our Store</h3>
                      </div>
                      <div class="box-text">
                          <span>Best price you can ever get will be here . All of the products are discounted. So, we invite you to do shopping with us!</span>
                      </div>
                      
                   </div>
              </div>	 
              
               <div class="col-lg-4 col-xs-12 text-center">
                  <div class="box">
                      <i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
                      <div class="box-title">
                          <h3>100% Original Products</h3>
                      </div>
                      <div class="box-text">
                          <span>You will not complain. we have zero complain upto now because of our standards we maintain . There is no any way our quality is compromising.</span>
                      </div>
                      
                   </div>
              </div>	 
              
          
      
      </div>		
  </div>
</div>
          </div><!---col-md-12 end--->
          <!---customer servce end--->






<div id="hot"><!---hot start---->

  <div class="box"><!----box start-->

      <div class="container"><!----container start-->

        <div class="col-md-12"><!---col-md-12 start----->


              <h2 style="color:#333333">
                Our Latest Products
              </h2>
              


        </div><!---col-md-12 end----->

      </div><!----container end-->

  </div><!----box end-->

</div><!---hot start---->


<div class="container"><!----product table begins-->
  <h3 class="h3">Product</h3>
  <div class="row">
   
    <?php
    
    getPro();
    
    ?>
   
          </div>
      </div>

      
     
  </div><!----product table begins-->



  




</div>
<hr>




<?php
include("includes/footer.php");



?>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>