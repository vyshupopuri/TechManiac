<?php
	session_start();
	include_once('./dbconnect.php');
	if($_POST) {
		$query = sprintf("SELECT userid FROM login WHERE username='%s' AND binary password='%s'",
						mysql_real_escape_string($_POST['username']),
						mysql_real_escape_string($_POST['password'])
				);

		$result = mysql_query($query);

		if (!$result) {
			$message  = 'Invalid query: ' . mysql_error() . "\n";
			$message .= 'Whole query: ' . $query;
			die($message);
		}
		//print_r($result);
		if($row = mysql_fetch_assoc($result)) {
			$_SESSION['userid'] = $row['userid'];
			$_SESSION['username'] = $_POST['username'];
		}
		else{
			$_SESSION['error'] = 'Userid Password combination is not found';
		}
		header("location: ../index.php");
	}
?>