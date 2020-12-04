<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','yotube');
		$query = mysqli_query($con, "UPDATE users SET name = '{$_GET["name"]}', email = '{$_GET["email"]}', phone = '{$_GET["phone"]}' WHERE id = {$_GET['id']} ");
		header("Location: account.php?id={$_GET["id"]}");
?>