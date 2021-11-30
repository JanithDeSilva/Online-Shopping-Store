

<html>
<head>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title></title>
</head>
<body>

</body>
</html>
<?php
include("includes/db.php");
if(isset($_GET['bann_id'])){
	$id=$_GET['bann_id'];
	
	$res=mysqli_query($con,"update user set UserType='Banned' where UserID='$id'");	
										
			if ($res){
				echo 
				"<script type='text/javascript'>
				 swal({ icon:'success' ,title:'',
			 		text:'Customer $id is Banned'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='view_user.php','_self';}
				 });

				 </script>";		
			}
}
if(isset($_GET['active_id'])){
	$id=$_GET['active_id'];
	
	$res=mysqli_query($con,"update user set UserType='Customer' where UserID='$id'");	
										
			if ($res){
				echo 
				"<script type='text/javascript'>
				 swal({ icon:'success' ,title:'',
			 		text:'Customer $id is Actived'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='view_user.php','_self';}
				 });

				 </script>";		
			}
}
						
												
											

?>