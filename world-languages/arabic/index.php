<?php 
	header("HTTP/1.1 301 Moved Permanently"); 
	header('Location: https://store.emcp.com/'. basename(getcwd())  );
	exit;
	
	include '../../includes/header.php';
?>

		
<?php include '../../includes/footer.php'; ?>		