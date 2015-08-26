<?php

	$email = $_POST['email'];

    if(empty($_POST['test'])) {
	
        $processed = file_get_contents('http://response.emcp.com/contacts/process.php?email='. $email);

        echo $processed;
    
    } else {
        
        echo 'Thanks!';
        
    }
	
?>