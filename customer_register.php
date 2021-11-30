<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE customer register</title>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <style>
	.error{color:#FF0000;}
 </style>


</head>


<body>



<?php
$active='customer_register';
include("includes/header.php");


// variable declaration
$nameErr="";
$lnameErr="";
$contactErr="";
$UserNameErr="";
$cityErr="";
$passworderd1="";
$passworderd2="";
$passwordConfErr="";
$DOBErr="";
 
$FnameTest="";
$LnameTest="";
$contactTest="";
$UserNameTest="";
$CityTest="";
$PasswordTest="";
$DOBTest="";

$errCount=0;


	$ID="";
	$FName="";
	$LName="";
	$HomeN0="";
	$Street="";
	$City="";
	$Email="";
	$Contact="";
	$DOB="";
	

	$UserName="";
	$Password="";
	$Re_Password="";
	$UserType="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	//first name validate
		$FnameTest=test_input($_POST["C_Fname"]);
		
		if(!preg_match("/^[a-zA-Z]*$/",$FnameTest)){
			$nameErr="Only Letters Allowed";
			$errCount=$errCount+1;


		}
		
		else {
			$FName=$_POST["C_Fname"];
	
		}
		
		//last name validate
		$LnameTest=test_input($_POST["C_Lname"]);
		
		if(!preg_match("/^[a-zA-Z]*$/",$LnameTest)){
			$lnameErr="Only Letters Allowed";
			$errCount=$errCount+1;


		}
		
		else {
			$LName=$_POST["C_Lname"];
	
		}
		
		//phone number validation
		$contactTest=test_input($_POST["Contact"]);
		$conLen=strlen($contactTest);
		
		if(!preg_match("/^[0-9]*$/",$contactTest)|| $conLen!=10 ){
			$contactErr="Please enter valid Phone number";
			$errCount=$errCount+1;


		}
		
		else {
			$Contact=$_POST["Contact"];
	
		}
		
		
		
		//city validate
		$CityTest=test_input($_POST["City"]);
		
		if(!preg_match("/^[a-zA-Z]*$/",$CityTest)){
			$cityErr="Only Letters Allowed";
			$errCount=$errCount+1;


		}
		
		else {
			$City=$_POST["City"];
	
		}
		
		
		//date of birth validate
		
		/*$DOBTest=$_POST["DOB"];
		
		$today=date("m/d/Y") ;
		echo $today;
		if($DOBTest<$today){
			$DOBErr="Please enter valid date";
			$errCount=$errCount+1;
			
		}
		else{
				$DOB=$_POST["DOB"];
		}
		*/
		
		$DOB=$_POST["DOB"];
		
		
		
		
		
		
		//User Name validate
		$UserNameTest=$_POST["Username"];
		
		
		$result=mysqli_query($con,"SELECT * from user where UserName='$UserNameTest'");
		
		if(mysqli_num_rows($result)!=0){
		
		$UserNameErr="This User Name has already taken. Please select another name";
		$errCount=$errCount+1;
		}
		
		else {
			$UserName=$_POST["Username"];
	
		}
        
		
          //password validate
		  $PasswordTest=test_input($_POST["Password"]);
		
		/*if(!preg_match("/^[a-zA-Z0-9]*$/",$PasswordTest)){
			$passworderd1="include both letters and numbers Letters Allowed";
			$errCount=$errCount+1;


		}*/
		$len=strlen($PasswordTest);
		if($len!=5){
			$passworderd2="Password length is incorrect ";
			$errCount=$errCount+1;
			
		}
		
		else {
			 $Password=$_POST["Password"];
	
		}
		 
		 
		 $Re_Password=$_POST["Password1"];
		 if($Password!=$Re_Password){
			 $passwordConfErr="Password do not match";
			 $errCount=$errCount+1;
		 }
		  
		
		
		 


$res=mysqli_query($con,"SELECT UserID from user");
    //Generate a ID to id start
    $max=0;
	while($row=mysqli_fetch_array($res)){ 
		$id=$row["UserID"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
    //Generate a ID to item end 

    $ID=$nextId;
	//$ID="19";
	
	
	
	
	$HomeN0=$_POST["Home_No"];
	$Street=$_POST["Street"];
	
	$Email=$_POST["Email"];
	

	
	

	
	
	$UserType="Customer";

	
	
$name=$_FILES["C_image"]["name"];
$img=$_FILES["C_image"]["tmp_name"];
$path="ProfilePic/".$name;

$uploaded=move_uploaded_file($img,$path);
/*if($uploaded){
	echo("Successfully uploaded");
	
}else{
	echo("uploading Failed");
}
*/



	
	

	// register user if there are no errors in the form
	if ($errCount== 0) {
		//$Password = md5($Password);//encrypt the password before saving in the database
		
		
			$query = "INSERT INTO user (UserID, FName, LName, Home_no, Street, City, Email, Phone_No, DOB, Image, UserName, Password, UserType) 
					  VALUES('$ID','$FName','$LName','$HomeN0','$Street','$City','$Email','$Contact','$DOB','$path','$UserName','$Password','$UserType')";
			$a=mysqli_query($con, $query);


			/*echo $ID;  echo "<br>";
			echo $FName;echo "<br>";
			echo $LName;echo "<br>";
			echo $HomeN0;echo "<br>";
			echo $Street;echo "<br>";
			echo $City;echo "<br>";
			echo $Email;echo "<br>";
			echo $Contact;echo "<br>";
			echo $DOB;echo "<br>";
			echo $path;echo "<br>";
			echo $UserName;echo "<br>";
			echo $Password;echo "<br>";
			echo $UserType;echo "<br>";

			echo "INSERT INTO user (UserID, FName, LName, Home_no, Street, City, Email, Phone_No, DOB, Image, UserName, Password, UserType) 
			VALUES('$ID','$FName','$LName','$HomeN0','$Street','$City','$Email','$Contact','$DOB','$path','$UserName','$Password','$UserType')";*/
if($a){
	
	/*echo
	"<script>swal({
				title: 'Congradulations',
				text: 'You have  Successfully registered',
				icon: 'success', }).then
				
				(okey=>{
				window.location.href='login.php','_self';}
				});
	</script>";
*/
		
		 echo "<script>alert('You have  Successfully registerde')</script>";
         echo "<script>window.open('login.php','_self')</script>";		
}


	}
	}
	
	
	
	
	
	
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	


    
   







?>



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




            <div class="col-md-7"><!---col-md-9 start--->
                <div class="box"><!---box start--->
                    <div class="box-header"><!---boxheader start--->
                        <center><!--center start--->
                                <h2>Register A New Acoount</h2>

                                <p class="text-muted"><!--text-muted start--->
                                    If you have any questions, feel free to contact us. Our customer Service works <strong>24/7</strong>
                                </p><!--text-muted end--->
                        </center><!--center end--->

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data"><!--form start------>
                        
                           <!---<div class="form-group"><!--form-group start------>

                           <!--  <label>Customer ID</label>

                                <input type="text" class="form-control" name="C_ID" required>

                           </div><!--form-group end------>
                           <div class="form-group"><!--form-group start------>

                                <label>First Name</label>
								<span >( Ex:David )</span>
                                <input type="text" class="form-control" name="C_Fname"  value="<?php echo $FnameTest ?>" required>
								
								<span class="error">*<?php echo $nameErr;?></span>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Last Name</label>
								<span >( Ex:Siva )</span>
                                <input type="text" class="form-control" name="C_Lname"  value="<?php echo $LnameTest ?>"  required>
								<span class="error">*<?php echo $lnameErr;?></span>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Home Number</label>

                                <input type="text" class="form-control" name="Home_No"  value="<?php echo $HomeN0; ?>" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Street</label>

                                <input type="text" class="form-control" name="Street"  value="<?php echo $Street ?>" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>City</label>

                                <input type="text" class="form-control" name="City" value="<?php echo $CityTest ?>" required>
								<span class="error">*<?php echo $cityErr;?></span>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Email</label>

                                <input type="email" class="form-control" name="Email" value="<?php echo $Email; ?>"  required>
								<span class="error">*</span>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                                <label>Phone Number</label>
								<span >( Ex:077XXXXXXX)</span>
                                <input type="text" class="form-control" name="Contact" min="10" maxlength="10" value="<?php echo $contactTest ?>"  required>
								<span class="error">*<?php echo $contactErr;?></span>

                            </div><!--form-group end------>

                            <div class="form-group"><!--form-group start------>

                                <label>Your Profile Picture</label>

                                <input type="file" class="form-control form-height-custom" name="C_image" required>

                            </div><!--form-group end------>
                            <div class="form-group"><!--form-group start------>

                            <label>Date of Birth</label>
                              <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"  value="<?php echo 	$DOB; ?>" name="DOB">
								
                              </div><!--form-group end------>

                              <div class="form-group"><!--form-group start------>

                                <label>Username</label>

                                <input type="text" class="form-control" name="Username" value="<?php echo  $UserNameTest ;?>" required>
								<span class="error">*<?php echo $UserNameErr;?></span>

                            </div><!--form-group end------>

                            <div class="form-group"><!--form-group start------>

                                <label>Password</label>
								<span >( Password length must be 5)</span>
								
                                <input type="password" class="form-control" name="Password" required>
								
								<span class="error">*<?php echo $passworderd2;?></span>

                            </div><!--form-group end------>
							
							
							 <div class="form-group"><!--form-group start------>

                                <label>Confirm Password</label>

                                <input type="password" class="form-control" name="Password1" required>
								<span class="error">*<?php echo $passwordConfErr;?></span>

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