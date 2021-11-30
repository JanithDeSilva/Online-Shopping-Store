<?php //session_start();

if(isset($_SESSION['user'])){
	$Id=$_SESSION['user'];
	
}


$res=mysqli_Query($con,"SELECT * from user where UserName='$Id' ");

while($row=mysqli_fetch_array($res)){

	$img=$row["Image"];
	
}
 ?>


<div class="panel panel-default sidebar-menu"><!-----panel panel-default sidebar-menu start----->
    <div class="panel-heading"><!-----panel-heading start----->
        <center><!-----center start----->
        <img src="../<?php echo $img;?>" alt="c_image" width="200px">
        </center><!-----center end----->
        <br/>

        <h3 align="center" class="panel-title"><!---panel-title start--->
        
         <!--   Name: Mr.Ghie-->

        </h3><!---panel-title start end--->

    </div><!-----panel-heading end----->

    <div class="panel-body"><!---panel-body start--->
    
        <ul class="nav-pills nav-stacked nav"><!---nav-pills nav-stacked-nav start--->

            <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
            <a href="my_account.php?my_orders">
            
                <i class="fa fa-list"></i> My Orders

            </a>
            </li>
            <li class="<?php if(isset($_GET['message_customer'])){echo "active";} ?>">
            <a href="my_account.php?message_customer">
            
                <i class="fa fa-envelope"></i> Messages

            </a>
            </li>
            <li class="<?php if(isset($_GET['view_status.php'])){echo "active";} ?>">
            <a href="my_account.php?view_status">
            
                <i class="fa fa-truck"></i> View Status

            </a>
            </li>
            
            <li class="<?php if(isset($_GET['edit_account'])){echo "active";} ?>">
            <a href="my_account.php?edit_account">
            
                <i class="fa fa-pencil"></i> Edit Account

            </a>
            </li>
          <!--  <li class="<?php// if(isset($_GET['send_feedback'])){echo "active";} ?>">
            <a href="my_account.php?send_feedback">-->
            
                <!--<i class="fa fa-smile-wink"></i> Send Feedback

            </a>
            </li>-->
            <li class="<?php if(isset($_GET['change_pass'])){echo "active";} ?>">
            <a href="my_account.php?change_pass">
            
                <i class="fa fa-user"></i> Change Password

            </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])){echo "active";} ?>">
            <a href="my_account.php?delete_account">
            
                <i class="fa fa-trash-o"></i> Delete Account

            </a>
            </li>
            
            <a href="../logout.php">
            
                <i class="fa fa-sign-out"></i> Log Out

            </a>
            </li>
        
        </ul><!---nav-pills nav-stacked-nav end--->
    
    </div><!---panel-body end--->

</div><!-----panel panel-default sidebar-menu end----->