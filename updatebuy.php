<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$P_ID=$_POST['P_ID'];
	$C_ID=$_POST['C_ID'];
    $B_QTY=$_POST['B_QTY'];
	$B_DATE=$_POST['B_DATE'];
 
	mysqli_query($conn,"update `buy` set C_ID='$C_ID', B_QTY='$B_QTY',B_DATE='$B_DATE' where P_ID='$id'");
	header('location:buy.php');
?>