<?php
include("db.php");
if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];}
    $res1=mysqli_query($con,"SELECT * from user where UserName='$user'");
    while($row=mysqli_fetch_assoc($res1)){
        $Cus_ID=$row["UserID"]; 
    }
   
    
    ?>





<center><!-----center start------>

<h1>My Orders</h1>

<p class="lead"> Your orders on one place</p>

<p class="text-muted">

    If you have any questions, feel free to <a href="../contact.php">Contact us</a>. Our Customer Service Work <strong>24/7</strong>
</p>

</center><!-----center end------>


<hr>

<div class="table-responsive"><!-----tabel-responsive start------>


<table class="table table-bordered table-hover"><!-----table table-bordered table-hover start------>
    
        <thead><!-----thead start------>
        
            <tr><!-----tr start------>
                <th>Order No:</th>
                <th>Order Date:</th>
                <th>Order Time:</th>
                <th>Paid / Unpaid:</th>
                <th>Current Status:</th>
				
				
               


            </tr><!-----tr end------>

        </thead><!-----thead end------>


        <tbody><!-----tbody start------>
        
          
		   <?php
           $res2=mysqli_query($con,"SELECT * from cus_order where Cus_ID='$Cus_ID'");
           while($row=mysqli_fetch_assoc($res2)){
			   ?>
			   
			   <?php
           $OrderNo=$row["OrderNo"]; 
           $Ordered_Date=$row["Ordered_Date"]; 
           $Ordered_Time=$row["Ordered_Time"];
           $Order_Status=$row["Order_Status"]; 
           $Paid_or_Unpaid=$row["Paid_or_Unpaid"]; ?>

            <tr>
            <th><input type="text"  class="form-control" name="OrderNo" value="<?php echo $OrderNo; ?>" readonly="readonly"/></th>
                <th><?php echo $Ordered_Date; ?></th>
                <th><?php echo $Ordered_Time; ?></th>
                <?php if($Paid_or_Unpaid=='Paid'){ ?>
                <th><h5 style="color: teal"><?php echo $Paid_or_Unpaid; ?> </h5></th>
                <?php }if($Paid_or_Unpaid=='Unpaid'){ ?>
                <th><h5 style="color: red"><?php echo $Paid_or_Unpaid; ?> </h5></th>
                <?php } ?>
                <th><?php echo $Order_Status; ?></th>
               
			   
			  

          
		 <!--  <input type="hidden"  name="OrderNo" value="<?php// echo $OrderNo; ?>" readonly="readonly"/>
		  <input type="hidden" name="my_orders" value="true">
               <th><button type="submit" value="orderItem" name="orderItem"  >View</button><th>-->
            
             <td>   
                                        <!-- <a href="index.php?edit_product=<?php //echo $pro_id; ?>">-->
										<a href="my_account.php?OrderNo=<?php echo $OrderNo; ?>&orderItem=true">
                                        <i class="fa fa-pencil" name="orderItem" ></i> View My Order

                                        </a>                    
                                    </td>
            
            </tr>
			
		   <?php }?>
		

			
           
           
           
           
           
            
        </tbody><!-----tbody start------>
    
    </table><!-----table table-bordered table-hover end------>

</div><!-----tabel-responsive end------>
