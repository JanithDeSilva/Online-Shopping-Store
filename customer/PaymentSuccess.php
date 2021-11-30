<?php 
include("db.php");
session_start();
echo"<script>alert('Your Payment has been succeed!')</script>";
echo "<script>window.open('shop.php','_self')</script>";

$OrderNo=0;
if(isset($_SESSION["OrderNo"])){
                            $OrderNo=$_SESSION["OrderNo"];
                            
                           
                                }

   if(isset($_SESSION["user"])){
                            $user=$_SESSION["user"];
                            
                           $res3=mysqli_query($con,"SELECT * from user where UserName='$user'");
						   $UserId=0;
                             while($row=mysqli_fetch_array($res3)){ 
                                $UserId=$row["UserID"]; 
                            }
                        }

						    $date=date("Y/m/d");
    $time=date("h:i:s");    
     
			$Amount=0;			   
        if(isset($_SESSION["totAmount"])){
				$Amount=$_SESSION["totAmount"];
        }
	////////////////////////



foreach($_SESSION["cart"] as $key=>$value){
	
	$res14=mysqli_query($con,"SELECT * from stock where ItemID='$value[0]' and Colour='$value[1]' and Size='$value[2]'");
	while($row=mysqli_fetch_array($res14)){ 
                                $ItemNo=$row["ItemNo"]; 
								$ItemQty=$row["Qty"];
								$newQty=$ItemQty-$value[3];
			
	$res6=mysqli_query($con,"update stock set Qty='$newQty' where ItemNo='$ItemNo'");			
	}                  
	
	$res12=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo','$ItemNo','$value[3]')");
	
	
	
}
	

	
		
		
   $res2=mysqli_query($con,"INSERT into cus_order values('$OrderNo',' $UserId','$date','$time','$Amount','Successfully ordered','Paid')");

    $res4=mysqli_query($con,"INSERT into payment values('$OrderNo','Visa Card','$Amount','$time','$date')");
		
		
		
		
		
	unset($_SESSION["cart"]);	

      
/*
						if(isset($_SESSION["cart"])){
           
		   
		  
		   $count= count($_SESSION["cart"]);
		   echo $count;
		   echo"<br>";
		   
		   print_r ($_SESSION["cart"]);
           foreach($_SESSION["cart"] as $keys => $values){
			
				foreach($values as $k => $v)
        {

			if($k == 0)
        	{
				$ItemId=array();
				for($i=0;$i<$count;$i++)
        		$ItemId[$i]=$_SESSION["cart"][$i][0];
        	}
			
			if($k == 1){
				$ItemColour=array();
				for($i=0;$i<$count;$i++)
        		$ItemColour[$i]=$_SESSION["cart"][$i][1];
				
			}
			
			
			
			
			if($k == 2){
				$ItemSize=array();
				for($i=0;$i<$count;$i++)
        		$ItemSize[$i]=$_SESSION["cart"][$i][2];
				
			}
			
			if($k == 3){
				$Qt=array();
				for($i=0;$i<$count;$i++)
        		$Qt[$i]=$_SESSION["cart"][$i][3];
				
			}
		}
		
		
		
		
		
      }
	  
						}
		
		$C1=count($ItemId);
		$C2=count($ItemColour);
		$C3=count($ItemSize);
		$C4=count($Qt);
		
		print_r ($Qt);
		
		 echo"<br>";  print_r($ItemId); echo"<br>";
		   print_r($ItemColour);
		   echo"<br>";
		   print_r ($ItemSize);
		   
				echo"<br>";		
		   
		   //foreach($ItemId as $keys => $values)
			//{
				
			
				//foreach($values as $k => $v)
        //{

	$ItemId1=0;
	$ItemId2=0;
	$ItemId3=0;
	$ItemId4=0;
	
		for($i=0;$i<$C1;$i++){
			if($i == 0)
        	{
				
				
        		$ItemId1=$ItemId[0];
				echo $ItemId1;
        	}if($i == 1){
				$ItemId2=$ItemId[1];
				echo $ItemId2;
			}if($i == 2){
				$ItemId3=$ItemId[2];
				echo $ItemId2;
			}if($i == 3){
				$ItemId3=$ItemId[3];
				echo $ItemId2;
			}
			if($i == 4){
				$ItemId4=$ItemId[4];
				echo $ItemId4;
			}
		}
		   
		   
		   for($i=0;$i<$C2;$i++){
			if($i == 0)
        	{
				
				
        		$colour1=$ItemColour[0];
				echo $colour1;
        	}if($i == 1){
				$colour2=$ItemColour[1];
				echo $colour2;
			}if($i == 2){
				$colour3=$ItemColour[2];
				echo $colour3;
			}if($i == 3){
				$colour4=$ItemColour[3];
				echo $colour4;
			}
		}
		
		for($i=0;$i<$C3;$i++){
			if($i == 0)
        	{
				
				
        		$size1=$ItemSize[0];
				echo $size1;
        	}if($i == 1){
				$size2=$ItemSize[1];
				echo $size2;
			}if($i == 2){
				$size3=$ItemSize[2];
				echo $size3;
			}if($i == 3){
				$size4=$ItemSize[3];
				echo $size4;
			}
		}
		
		
		for($i=0;$i<$C4;$i++){
			if($i == 0)
        	{
				
				
        		$ItemQt1=$Qt[0];
				echo $ItemQt1;
        	}if($i == 1){
					$ItemQt2=$Qt[1];
				//echo $ItemId2;
			}if($i == 2){
				$ItemQt3=$Qt[2];
				//echo $ItemId2;
			}if($i == 3){
				$ItemQt4=$Qt[3];
				//echo $ItemId2;
			}
			
		}
		
		
		
               if($ItemId1>0){
			   $res5=mysqli_query($con,"SELECT * from stock where ItemID='$ItemId1' and Colour='$colour1' and Size='$size1'");
						while($row=mysqli_fetch_array($res5)){ 
                                $ItemNo1=$row["ItemNo"]; 
								echo $ItemNo1;
			   }}
			   echo"<br>";
			   
			    if($ItemId2>0){
			   $res6=mysqli_query($con,"SELECT * from stock where ItemID='$ItemId2' and Colour='$colour2' and Size='$size2'");
						while($row=mysqli_fetch_array($res6)){ 
                                $ItemNo2=$row["ItemNo"]; 
								echo $ItemNo2;
				}}
			   echo"<br>";
			   
			    if($ItemId3>0){
			   $res7=mysqli_query($con,"SELECT * from stock where ItemID='$ItemId3' and Colour='$colour3' and Size='$size3'");
						while($row=mysqli_fetch_array($res7)){ 
                                $ItemNo3=$row["ItemNo"]; 
								echo $ItemNo3;
				}}
			   echo"<br>";
			   
			   if($ItemId4>0){
			   $res8=mysqli_query($con,"SELECT * from stock where ItemID='$ItemId4' and Colour='$colour4' and Size='$size4'");
						while($row=mysqli_fetch_array($res8)){ 
                                $ItemNo4=$row["ItemNo"]; 
								echo $ItemNo4;
			   }}
			   echo"<br>";
			   
			   
			   
						
                        if(isset($_SESSION["user"])){
                            $user=$_SESSION["user"];
                            
                           $res3=mysqli_query($con,"SELECT * from user where UserName='$user'");
                             while($row=mysqli_fetch_array($res3)){ 
                                $UserId=$row["UserID"]; 
                            }
                        }
                
                        if(isset($_SESSION["OrderNo"])){
                            $OrderNo=$_SESSION["OrderNo"];
                            //echo $_SESSION["OrderNo"];
                           
                                }
    
        

 if($ItemId1>0){
    $res9=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo',' $ItemId1','$ItemQt1')");
 }
  if($ItemId2>0){
  $res10=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo',' $ItemId2','$ItemQt2')");}
  
   if($ItemId3>0){
   $res11=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo',' $ItemId3','$ItemQt3')");}
   
    if($ItemId4>0){
	$res12=mysqli_query($con,"INSERT into order_includes_item values('$OrderNo',' $ItemId4','$ItemQt4')");}
     
    $date=date("Y/m/d");
    $time=date("h:i:s");    
     
   $res2=mysqli_query($con,"INSERT into cus_order values('$OrderNo',' $UserId','$date','$time','$Amount','Successfully ordered','Paid')");

    $res4=mysqli_query($con,"INSERT into payment values('$OrderNo','Visa Card','$Amount','$time','$date')");
*/
?>


