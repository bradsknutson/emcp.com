<?php

	$email = $_POST['email'];
	
	$processed = file_get_contents('http://response.emcp.com/contacts/process.php?email='. $email);
	
	echo $processed;
	
?>