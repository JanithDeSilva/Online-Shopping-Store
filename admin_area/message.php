<?php

session_start();
include("includes/db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages</title>
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


<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / Manage Messages
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i> Manage Messages
                </h3><!----panel-title end--->
            </div><!----panel heading end--->
<hr><br>
<!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Message                     
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->






        </div><!---col-md-3 end--->




            <div class="col-md-12"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Feel free to Contact Us</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    If you have any questions, feel free to contact us. Our customer Service works <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="" method="post"><!--form start------>
                        
                           
                            <div class="form-group"><!--form-group start------>

                                <label>Message</label>

                                <textarea name="message" class="form-control"></textarea>

                            </div><!--form-group end------>

                            <div class="text-center">
                                <button type="submit" name="Messagesubmit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>  Send Message
                                </button>

                            </div>
                               

                        </form><!--form end------>
                    </div><!---boxheader end--->
                </div><!---box end--->
            </div><!---col-md-9 end--->






        </div><!----container end---->

</div><!----content end---->
                               

                        </form><!--form end------>
                    </div><!---boxheader end--->
                </div><!---box end--->
            </div><!---col-md-9 end--->



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


if(isset($_POST["Messagesubmit"])){
    
$res=mysqli_query($con,"SELECT MNO FROM message");
    $max=0;
    
    while($row=mysqli_fetch_array($res)){ 
        
        $mno=$row["MNO"]; 
      
        if ($max < $mno) {
            $max = $mno;
        }
}
        $nextId=$max+1;
        
    $MNO=$nextId;
    
    
    $date=date("Y/m/d");
    $time=date("h:i:s");     
    $msg=$_POST["message"];
    
    $id="1";

    if(isset($_GET['cus_id'])){
    $cus_id = $_GET['cus_id'];

    $res=mysqli_query($con,"SELECT * from user where UserID='$cus_id'");
                                    while($row=mysqli_fetch_array($res)){ 
                                    $cus_name=$row["UserName"];   
                                   }


    
}



    
    
  $message_sent = mysqli_query($con,"insert into message values ('$MNO','$date','$time','$msg','$id','$cus_name')");

if($message_sent){
    echo "<script>alert('Message sent Successfully')</script>";
    echo "<script>window.open('message.php','_self')</script>";

}else{
    echo "<script>alert('Message sent Failed')</script>";
    echo "<script>window.open('message.php','_self')</script>";
}




}   

?>