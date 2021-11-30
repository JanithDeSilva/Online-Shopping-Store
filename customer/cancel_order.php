<?php
session_start();
unset($_SESSION["cart"]);	
echo"<script>alert('Your Order has been cancelled!')</script>";
echo "<script>window.open('cart.php','_self')</script>";



?>