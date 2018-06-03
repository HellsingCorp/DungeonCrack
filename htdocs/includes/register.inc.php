<?php

if($_POST) {
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	if($password != $confirm) {
		$error = 'Passwords do not match!';	
	} else {
        require_once 'dbh.inc.php';		// our database settings
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass)
			or die('Error connecting to mysql');
		mysqli_select_db($conn,$dbname);
		$query = sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s')",
			mysqli_real_escape_string($conn,$_POST['username']));
		$result = mysqli_query($conn,$query);
		list($count) = mysqli_fetch_row($result);
		if($count >= 1) { 
			$error = 'that username is taken.';
		} else {
			$query = sprintf("INSERT INTO users(username,password) VALUES ('%s','%s')",
				mysqli_real_escape_string($conn,$_POST['username']),
				mysqli_real_escape_string($conn,$password));
			$result = mysqli_query($conn,$query);
			$userID = mysqli_insert_id($conn);
			require_once 'stats.php';
			setStat('atk',$userID,'5');
			setStat('def',$userID,'5');
			setStat('mag',$userID,'5');
			$message = 'Congratulations, you registered successfully!';
		}
	}	
}
?>