<?php
session_start();


$id=$_GET["id"];


$id=$_GET["id"];
foreach($_SESSION["wish"] as $keys => $values)
        {
foreach($values as $k => $v)
        {

if($k == $id)
        	{
        		unset($_SESSION["wish"][$id]);
        		
				header("location:customer/wishlist.php");
        	}
		}
      }
?>