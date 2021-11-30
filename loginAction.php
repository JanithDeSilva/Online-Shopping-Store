<html>
<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title></title>
</head>
<body>

</body>
</html>

<?php
session_start();

$un=$_POST["C_name"];
$pw=$_POST["password"];

include("includes/db.php");

$res=mysqli_Query($con,"SELECT * from user where UserName='$un' and Password='$pw'");

$b=false;

while($row=mysqli_fetch_array($res)){
	$b=true;
	$_SESSION["user"]=$un;
	$_SESSION["userType"]=$row["UserType"];
}

if($b){
	if(isset($_SESSION["userType"])){
		if($_SESSION["userType"]=="Customer"){
			header("location:customer/customerLand.php");
		}else if($_SESSION["userType"]=="admin"){
			header("location:admin_area/index.php");
		 }else if($_SESSION["userType"]=="Banned"){
			 
			 echo 
				"<script type='text/javascript'>
				 swal({ icon:'error' ,title:'Sorry!',
			 		text:'You are Banned'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='login.php','_self';}
				 });

				 </script>";	
			//header("location:login.php");
		 }
	}
}else{
	header("location:login.php");
 }

?>