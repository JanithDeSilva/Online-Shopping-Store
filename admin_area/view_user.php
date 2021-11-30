
<?php
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Items</title>
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
include("includes/header.php");
?>


<br>
<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / View Product
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  View Product
                </h3><!----panel-title end--->
            </div><!----panel heading end--->




            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
								<th>Customer ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Home No</th>
                                <th>Street</th>
								<th>City</th>
								<th>Email</th>
								<th>Phone no</th>
                                <th>DOB</th>
								<th>Image</th>
                                <th>User Name</th>
								
                                
                            </tr><!---tr end--->
                        </thead><!---thead end--->

                        <tbody><!---tbody start--->
                            <?php
                            
                            $i=0;

                            $get_user = "select * from user where UserType='Customer' or UserType='Banned'";

                            $run_user = mysqli_query($con,$get_user);

                            while($row_user=mysqli_fetch_array($run_user)){
                                $user_id = $row_user['UserID'];

                                $user_fname = $row_user['FName'];
								$user_lname = $row_user['LName'];
								$user_home_no= $row_user['Home_no'];
								$user_street= $row_user['Street'];
								$user_city= $row_user["City"];
								$user_email= $row_user["Email"];
								$user_contact=$row_user["Phone_No"];
								$user_dob=$row_user["DOB"];
								$user_image=$row_user["Image"];
								$user_name=$row_user["UserName"];
								$type=$row_user["UserType"];

                                

                               $i++;
                               ?>

                               <tr><!---tr start--->
                                    <td><?php echo $user_id; ?></td>
                                    <td><?php echo $user_fname; ?></td>
									<td><?php echo $user_lname; ?></td>
									<td><?php echo $user_home_no; ?></td>
									<td><?php echo $user_street; ?></td>
									<td><?php echo $user_city; ?></td>
									<td> <?php echo $user_email ;?></td>
									<td> <?php echo $user_contact ;?></td>
									<td> <?php echo $user_dob ;?></td>
                                    <td><img src="<?php echo "../".$user_image;?>" width="90" height="90"></td>
                                    <td> <?php echo $user_name ;?></td>
									
									<td>  
									<?php if ($type == 'Banned') {echo "Active user";?>
									<a href="bann_user.php?active_id=<?php echo $user_id; ?>"> <i class="fa fa-pencil"></i><?php }
                        
						
						 else {echo "Bann User";?>
									<a href="bann_user.php?bann_id=<?php echo $user_id; ?>"> <i class="fa fa-pencil"></i><?php }?>
                        

                        </a>                    
                 </td>
									
									
                               </tr><!---tr end--->


                            <?php } ?>




                            
                        </tbody><!---tbody end--->

                    </table><!----table table-striped table-bordered table-hover end--->
                </div><!----table-responsive end--->
            </div><!----panel-body end--->

        






</div>


            </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
