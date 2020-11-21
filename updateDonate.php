<?php 
	$con = mysqli_connect('127.0.0.1','root','','KickStarter');
	$id = $_GET['id'];
	$don = $_GET['don'];
	$don = $don + 10;
	mysqli_query($con,"UPDATE Projects SET donated='{$don}' WHERE id = '{$id}' ");

	header("Location: index.php"); 
 ?>