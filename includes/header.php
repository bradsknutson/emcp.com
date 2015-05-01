<?php 
	require 'server.php';
	include 'functions.php';
    include 'version.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "viewport" content = "user-scalable=yes, minimum-scale=.25, maximum-scale=1.0">
    <title><?php echo $custom_title; ?>EMC Publishing, LLC</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $server; ?>lib/images/favicon.ico" type="image/x-icon" >

	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/tvi6hef.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script> 

	<!-- Add CSS -->
	<link href="<?php echo $server ?>lib/css/styles.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link href="<?php echo $server ?>lib/css/superfish.css" rel="stylesheet">
    
    <!-- Add jQuery library -->
    <script src="<?php echo $server ?>lib/js/jquery.min.js" type="text/javascript"></script>
	
    <!-- Add Royalslider -->
    <link href="<?php echo $server ?>lib/royalslider/royalslider.css" rel="stylesheet">
    <link href="<?php echo $server ?>lib/royalslider/default/rs-default.css" rel="stylesheet">
    <script src="<?php echo $server ?>lib/royalslider/jquery.easing-1.3.js"></script>
    <script src="<?php echo $server ?>lib/royalslider/jquery.royalslider.min.js"></script>
    
    <!-- Add fancyBox -->
    <link href="<?php echo $server ?>lib/js/fancybox/jquery.fancybox.css" type="text/css" rel="stylesheet" media="screen" />
    <script src="<?php echo $server ?>lib/js/fancybox/jquery.fancybox.pack.js" type="text/javascript" ></script>
	
	<!-- Add fancyBox - media helper -->
	<script type="text/javascript" src="<?php echo $server ?>lib/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>	
	
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<?php if(!empty($custom_js)) {
		echo '<!-- Custom Javascript -->';
		echo '<script src="'. $server .'lib/js/'. $custom_js .'" type="text/javascript"></script>';
	} ?>
	<?php if(!empty($custom_css)) {
		echo '<!-- Custom CSS -->';
		echo '<link href="'. $server .'lib/css/'. $custom_cs .'" rel="stylesheet">';
	} ?>
	<?php if( $nofollow == 'TRUE' ) {
        echo '<!-- noindex/nofollow -->';
		echo '<meta name="robots" content="noindex, nofollow" />';
    } ?>

	<?php include 'ga.php'; ?>
</head>
<body>