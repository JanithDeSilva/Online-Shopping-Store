<html>
<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title></title>
</head>
<body>

</body>
</html>
<?php 

include("db.php");
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}
    if(isset($_POST["update"])){
	
    
    $c_name = $_POST['c_name'];
    $c_email=$_POST['c_email'];
    $home =$_POST['home'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $un=$_POST['un'];

    $update_stock = "UPDATE user SET FName='$c_name', Email='$c_email', Home_no = '$home', City='$c_city',Phone_No='$c_contact', UserName='$un' where UserName='$user' ";

    $run_stock_edit = mysqli_query($con,$update_stock);
    
    if($run_stock_edit){
        //echo "<script>alert('Account has been successfully updated')</script>";
        
        //echo "<script>window.open('my_account.php','_self')</script>";

        echo 
        "<script type='text/javascript'>
                 swal({ icon:'success' ,title:'',
                         text:'account updating success'}).then
                 (okey =>{
                     if(okey){
                  window.location.href ='my_account.php','_self';}
                 });
    
             </script>";

         
        
    }else{
        //echo "<script>alert('Stock updating failed)</script>";
        echo 
        "<script type='text/javascript'>
                 swal({ icon:'error' ,title:'',
                         text:'account updating failed'}).then
                 (okey =>{
                     if(okey){
                  window.location.href ='edit_account.php','_self';}
                 });
    
             </script>";
        
    
    }
    


	
}else{

$get_stock = "select * from user where UserName='$user' ";

                            $run_stock = mysqli_query($con,$get_stock);

                            while($row_stock=mysqli_fetch_array($run_stock)){
								
                                $c_name = $row_stock["FName"];
								$c_email=$row_stock["Email"];
								$home =$row_stock["Home_no"];
								$c_city=$row_stock["City"];
                                $c_contact=$row_stock["Phone_No"];
                                $un=$row_stock["UserName"];
                            }
                        }          
?>

<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data"><!-----form start--->

    <div class="form-group"><!-----form-group start--->
    
        <label> Customer Name: </label>
        <input type="text" value="<?php echo $c_name ; ?> " name="c_name" class="form-control" required>
    
    </div><!-----form-group end-->

    <div class="form-group"><!-----form-group start--->
    
    <label> Customer Email: </label>
    <input type="text" value="<?php echo $c_email ; ?> " name="c_email" class="form-control" required>

</div><!-----form-group end-->

<div class="form-group"><!-----form-group start--->
    
    <label> Home No: </label>
    <input type="text"  value="<?php echo $home ; ?> " name="home" class="form-control" required>

</div><!-----form-group end-->

<div class="form-group"><!-----form-group start--->
    
    <label> Customer City: </label>
    <input type="text" value="<?php echo $c_city ; ?> " name="c_city" class="form-control" required>

</div><!-----form-group end-->

<div class="form-group"><!-----form-group start--->
    
    <label> Customer Contact: </label>
    <input type="text" value="<?php echo $c_contact ; ?> " name="c_contact" class="form-control" required>

</div><!-----form-group end-->

<div class="form-group"><!-----form-group start--->
    
    <label> UserName: </label>
    <input type="text" value="<?php echo $un ; ?> " name="un" class="form-control" required>

</div><!-----form-group end-->




<div cl="text-center"><!-----text-center start--->

    <button name="update" class="btn btn-primary"><!-----btn btn-primary start--->

    <i class="fa fa-user-md"></i> Update Now
    
    </button><!-----btn btn-primary end--->

</div><!-----text-center end--->


</form><!-----form end--->


<?php

if(isset($_POST['update'])){
	
	$qty=$_POST["Qty"];
	$update_stock = "UPDATE stock SET Qty='$qty' where ItemNo='$stock_id' ";

$run_stock_edit = mysqli_query($con,$update_stock);

if($run_stock_edit){
    //echo "<script>alert('Stock has been successfully updated')</script>";
	
   // echo "<script>window.open('update_stock.php?edit_stock=$pro_id','_self')</script>";

   echo 
	"<script type='text/javascript'>
			 swal({ icon:'success' ,title:'',
			 		text:'account deletion success'}).then
			 (okey =>{
			 	if(okey){
			  window.location.href ='my_account.php','_self';}
			 });

		 </script>";
    
}else{
    echo "<script>alert('Stock updating failed)</script>";
    

}



}


?>