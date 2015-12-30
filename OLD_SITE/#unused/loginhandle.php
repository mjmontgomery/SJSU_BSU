<?php
	$fp = fopen('files/login/login.txt','r');
	
	$user = $_POST['user'];
	$pass = SHA1($_POST['pass']);
	
	$flag = false;
	
	while (!feof($fp)) {
		$line = fgets($fp,64);
		$field = explode ('|',$line);
		if ($user == $field[0]) {
			if ($pass == $field[1]) {
				$flag = true;
			}
		}
	}
	
	if($flag) {
		$value = "success";
		setcookie("login",$value,time()+(60*60*24));
		header ("Location: pa/index.php");
	}
	
	else {
		header ("Location: login.php?e=login");
	}
?>