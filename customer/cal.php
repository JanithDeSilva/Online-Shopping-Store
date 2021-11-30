<?php
session_start();

include("db.php");
$clr=$_GET["clr"];
$size=$_GET["size"];
$iid=$_GET["iid"];
								$res5=mysqli_query($con,"SELECT * from stock where ItemID='$iid' and Colour='$clr' and Size='$size'");
								$ItemQty=0;
								while($row=mysqli_fetch_array($res5)){ 
                                $ItemNo=$row["ItemNo"]; 
								$ItemQty=$row["Qty"];
								
								}
								 $_SESSION["Qty"]=$ItemQty;
								 echo "Availabe quantity ".$ItemQty;

								/* 
$QtyErr="";
$errCount=0;
if( isset($_GET["quantity"])){
	$QtyTest=$_GET["quantity"];
}
if (isset($_SESSION["Qty"])){
	$availableQty=$_SESSION["Qty"];
	
}
if($QtyTest>$availableQty){
$QtyErr="Quantity not available";



$errCount=$errCount+1;
header("location:details.php?QtyErr='$QtyErr'");

}
 */
		?>