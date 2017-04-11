<?php
    header("HTTP/1.0 404 Not Found");
	$custom_title = 'Page Not Found | ';
	include 'includes/header.php';
?>
	<div id="container">
		<div class="header-secondary-page"></div>
		<div class="header-top-dark">
			<?php include 'includes/nav.php'; ?>
		</div>
		<div class="home-first" style="padding: 50px 0px;background:#FFF;">
			<div class="ninehundred">
				<span class="large-red">The page you were looking for could not be found.</span> The menu bar at the top of this page will help you find what you are looking for.
			</div>
		</div>
	
<?php include 'includes/footer.php'; ?>