<?php

    require '../includes/server.php';

    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: " . $server ."world-languages/french/tes-branche/"); 
    exit;

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>EMC Corporation - T'es Branche?</title>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://www.emcp.com/teb/js-webshim/dev/extras/modernizr-custom.js"></script>
<script src="http://www.emcp.com/teb/js-webshim/dev/polyfiller.js"></script>
<script>
    $.webshims.polyfill('mediaelement');
</script>
<style>
body {
	background-color: #96609E;
}
.wrapper { 
	margin: 0 auto;
        width: 848px;	
}
</style>
</head>
<body>
<div class="wrapper">
	<div id="main">
		<video width="848" height="480" controls="controls" preload="auto" style="margin:0 auto;">
			<source src="http://www.emcp.com/teb/videos/TEB_short.mp4" type="video/mp4">
			<source src="http://www.emcp.com/teb/videos/TEB_short.ogv" type="video/ogg">
			<source src="http://www.emcp.com/teb/videos/TEB_short.webm" type='video/webm; codecs="vp8, vorbis"'>	
		</video>
	</div>
</div>
</body>
</html>