
<?php
include("includes/db.php");
?>
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
//session_start();		

?>


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
                        Contact Us                     
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->






        </div><!---col-md-3 end--->




            
                     
            <div class="col-md-12"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Send Your Message</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    If you have any questions, feel free to contact us. Our customer Service works <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="message_us.php" method="POST" enctype="multipart/form-data"><!--form start------>
                        


                        

                            <div class="form-group"><!--form-group start------>

                            <label>Message</label>

                            <input type="textarea" class="form-control" name="message" required>

                            </div><!--form-group end------>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>  Send Messsage
                                </button>

                            </div>
                               

                        </form><!--form end------>


                          <?php
                           /* if(isset($_POST['submit'])){
                              ///admin recieves message with this///
                              
                              
                              $sender_message = $_POST['message'];


                              $reciever_email = "janithlakshanmadusha@gmail.com";

                              //mail($reciever_email,$sender_name, $sender_subject,$sender_message,$sender_email);

                              /// auto reply to sender with this//

                              $email  = $_POST['email'];

                              $subject = "Welcome to Shopwsie website";

                              $msg = "Thanks for contacting us! We will reply your message as soon as possible.";

                              $from =  "janithlakshanmadusha@gmail.com";

                              mail($email,$subject,$msg,$from);


                              echo "
                              
                              <h2> Your message has sent successfully </h2>
                              
                              ";

                            */
                          ?>


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

<?php


if(isset($_POST["submit"])){
    
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
    
if( isset($_SESSION["user"])){
    $id=$_SESSION["user"];

    $res=mysqli_query($con,"SELECT * from user where UserName='$id'");
                                    while($row=mysqli_fetch_array($res)){ 
                                    $cus_id=$row["UserID"];   
                                   }
}


    
    $r_by="Admin";

    
    
  $message_sent = mysqli_query($con,"insert into message values ('$MNO','$date','$time','$msg','$cus_id','$r_by')");

if($message_sent){
    echo "<script>alert('Message sent Successfully')</script>";
    echo "<script>window.open('message_us.php','_self')</script>";

}else{
    echo "<script>alert('Message sent Failed')</script>";
    echo "<script>window.open('message_us.php','_self')</script>";
}




}   

?>