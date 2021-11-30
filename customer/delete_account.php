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
    if(isset($_POST["delete"])){
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }
        $res=mysqli_query($con,"SELECT * from user where UserName='$user'");
                            while($row=mysqli_fetch_array($res)){ 
                            $Id=$row["UserID"];
                            }
        $delete_user = "delete from user where UserID='$Id'";

        $run_delete = mysqli_query($con,$delete_user);

        if($run_delete){
           unset($_SESSION['user']);
            //echo "<script>alert('Account has been deleted')</script>";
           // echo "<script>window.open('../index.php','_self')</script>";

           echo 
	"<script type='text/javascript'>
			 swal({ icon:'success' ,title:'',
			 		text:'account deletion success'}).then
			 (okey =>{
			 	if(okey){
			  window.location.href ='../login.php','_self';}
			 });

		 </script>";

		}
    }

	?>

<center><!---center start--->


<h1> Do You Really want to Delete Your Account ? </h1>

    <form action="delete_account.php" method="post"><!---form start--->

        <input type="submit" name="delete" value="Yes, I want to Delete" class="btn btn-danger">
        <input type="submit" name="No" value="No, I don't want to Delete" class="btn btn-primary">

    </form><!---form end--->

</center><!---center end--->