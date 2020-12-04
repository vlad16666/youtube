<?php 
	$connect = mysqli_connect("127.0.0.1","root","","yotube"); 
	$zapros_vstavit = "SELECT * FROM users WHERE name = '{$_POST['name']}' AND password = '{$_POST['password']}'";
	$query = mysqli_query($connect,$zapros_vstavit);
	$stroka = $query->fetch_assoc();
	if ($query->num_rows == 0) {
		header("Location: index.php");
	}else{
		header("Location: home.php?id={$stroka['id']}");
	}
	
?>