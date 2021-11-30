<?php
session_start();


$id=$_GET["id"];
//var_dump($_SESSION["cart"]);
 
//Delete Cat, which has the index "0".
//unset($_SESSION["cart"][$id]);
 
//var_dump it out again.
//var_dump($_SESSION["cart"]);

//header("location:cart.php");



//my edit

$id=$_GET["id"];
foreach($_SESSION["cart"] as $keys => $values)
        {
foreach($values as $k => $v)
        {

if($k == $id)
        	{
        		unset($_SESSION["cart"][$id]);
        		/*echo '<script>alert("item Removed")</script>';
        		echo '<script>window.location="cart.php"</script>';*/
				header("location:customer/cart.php");
        	}
		}
      }
?>