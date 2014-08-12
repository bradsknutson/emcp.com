<?php 
	include '../../../includes/header.php';
?>
	<div id="container">
		<div class="header-secondary-page"></div>
		<div class="header-top-dark">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="world-language-nav black">
			<div class="ninehundred no-bottom">
				<?php include '../../../includes/wl-nav.php'; ?>
				<div class="clearfix"></div>
				<p class="onesix">EMC's robust multiplatform Spanish products provide students with innovative learning solutions and technology that prepares them to be lifelong language learners who appreciate cultural diversity. Educators love EMC's efficient and helpful customer support and teacher resources. With EMC's Spanish educational solutions, you'll love what you teach even more.</p>
			</div>
		</div>
		<?php 
			if($wlroot == TRUE) {
				include 'slider.php';
			} else {
				include '../slider.php';
			}
		?>
		
<?php include '../../../includes/footer.php'; ?>		