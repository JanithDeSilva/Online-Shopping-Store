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



<?php
include("includes/hedear_customer.php");
?>


<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        My Account                   
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->
             <?php
                include("includes/sidebar_my_account.php");
              ?>

        </div><!---col-md-3 end--->



      <div class="col-md-9"><!---col-md-9 start--->
      
        <div class="box"><!---box start--->
        
          <?php
          
            if (isset($_GET['my_orders'])){
              include("my_orders.php");
            }
          
          ?>

          <?php
          
          if (isset($_GET['message_customer'])){
            include("message_customer.php");
          }
        
        ?>
         <?php
          
          if (isset($_GET['view_status'])){
            include("view_status.php");
          }
        
        ?>
         <?php
          
          if (isset($_GET['status'])){
            include("status.php");
          }
        
        ?>
             <?php
          
          if (isset($_GET['edit_account'])){
            include("edit_account.php");
          }
        
        ?>
        <?php
          
          if (isset($_GET['send_feedback'])){
            include("send_feedback.php");
          }
        
        ?>
         
        <?php
          
          if (isset($_GET['change_pass'])){
            include("change_pass.php");
          }
        
        ?>
         <?php
          
          if (isset($_GET['delete_account'])){
            include("delete_account.php");
          }
		  
		  
		  
		  if(isset($_GET["orderItem"])){
			  include("viewOrderItems.php");
		  }
        
        ?>

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