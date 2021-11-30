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
include("includes/db.php");
if (isset($_SESSION['user'])){
$user = $_SESSION['user'];
}



		if (isset($_POST['ChangePw']))
		{
		
		
		$oldpassword = $_POST['old_pass'];
  			echo $oldpassword ;

		$newpassword = ($_POST['new_pass']);
		echo $newpassword;
		$repeatnewpassword = ($_POST['new_pass_again']);
		echo $repeatnewpassword;
		
		//check pass against db
	/*	$connect = mysql_connect("localhost","root","");
		mysql_select_db("shopwise");
		*/
		$queryget = mysqli_query($con,"SELECT Password FROM user WHERE UserName='$user'") ;
		while($row = mysqli_fetch_assoc($queryget)){
		
		$oldpassworddb = $row['Password'];}
	echo $oldpassworddb ;
		
			}
		
		//check pass
		if ($oldpassword==$oldpassworddb)
		{
		
		
		
		//check twonew pass
		if ($newpassword==$repeatnewpassword)
		{
		//success
		//change pass in db

		
				$querychange = mysqli_query($con,"
				UPDATE user SET password='$newpassword' WHERE UserName='$user'
				");


				
				
		
		
		
		if(	$querychange ){
				//echo "<script>alert('Password Successfully Changed')</script>";
				//echo "<script>window.open('../login.php','_self')</script>";
				echo 
				"<script type='text/javascript'>
				 swal({ icon:'success' ,title:'',
			 		text:'Password Changed Successfully'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='../login.php','_self';}
				 });

				 </script>";		
			}
		}

		else{
				//echo "<script>alert('New password Did not match')</script>";
				//echo "<script>window.open('change_pass.php','_self')</script>";	
				echo 
				"<script type='text/javascript'>
				 swal({ icon:'error' ,title:'',
			 		text:'New password Did not match'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='my_account.php','_self';}
				 });

				 </script>";	
		}
}
		else{

			//echo "<script>alert('Incorrect old password')</script>";
        	//echo "<script>window.open('change_pass.php','_self')</script>";	
			//	die("New Pass don't match");
			echo 
				"<script type='text/javascript'>
				 swal({ icon:'error' ,title:'',
			 		text:'Incorrect old password'}).then
			 	(okey =>{
			 		if(okey){
			 	 window.location.href ='my_account.php','_self';}
				 });

				 </script>";
				
	
}


		?>