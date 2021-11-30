

<?php
include("includes/db.php");


 if(isset($_GET["orderItem"])){
				$Uname=$_SESSION["user"];
				$OrderNo=$_GET["OrderNo"];
				
				echo "<h3>Order No= $OrderNo</h3><br>";
				echo "<div class='panel-body'>";
				echo "<div class='table-responsive'>";
				echo "<div class='table table-striped table-bordered table-hover'>";
				 $result=mysqli_query($con,"SELECT * from order_includes_item where OrderNO='$OrderNo'");
				 echo "<table border=1><th>Item</th><th>Quantity</th><th>Your Feedback</th>";
				 while($row=mysqli_fetch_array($result)){
			  
						$ItemId=$row["ItemID"]; 
						$Qty=$row["Qty"];
				 
				 
				  $result1=mysqli_query($con,"SELECT * from stock where ItemNo='$ItemId'");
				 
				 while($row=mysqli_fetch_array($result1)){
			  
					$img=$row["img"]; 
					
					
				 ?>
				 <tr>
				 <td>
				 <?php //echo $img; ?> 
				 
				 
				 <img src="../admin_area/<?php echo $img ?>" width="100px" >
				 </td>
				 
				 <td> <?php echo $Qty; ?></td>
				 
				  <td> 
				 <?php
				 
				 $b=true;
				 $feedbresult=mysqli_query($con,"select * from feedback where UserName='$Uname' and ItemID='$ItemId'");
						if($feedbresult){
							$b=false;
							while($row=mysqli_fetch_array($feedbresult)){
								
								$feedback=$row["FeedBack"];
								$fno=$row["FNO"];
								
							echo $feedback;
							?>
							
							<button onClick="window.location='deletefeedback.php?FNO=<?php echo $fno;?>'">delete</button>
							
							
							
							
						<?php	
							echo "<br>";echo "<br>";
						}}
						
						
						
				 ?>
				</td>
				 <td>
				 
				 <?php //if($b){ ?>
				  <input class="form-control" type="button" onClick="window.location='my_account.php?send_feedback=true&ItemId=<?php echo $ItemId?>'" value="Give Feedback">
				<?php //} ?>
				 
				 </td>
				 
				 
				 </tr>
				<?php
			}}}
				?>
				
		</table>
</div>
		</div>
		</div>

     