<?php 
	$custom_title = 'EMC Passport Support | ';
	include '../includes/header.php';
?>
	<div id="container">
		<div class="header-secondary-page"></div>
		<div class="header-top-dark">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="world-languages-title">
			<div class="ninehundred onesix fonttwenty">
				<h3>EMC Passport Support</h3>
				
				<!-- Google Group iFrame -->
				<iframe id="forum_embed"
				  src="javascript:void(0)"
				  scrolling="no"
				  frameborder="0"
				  width="900"
				  height="700">
				</iframe>
				<script type="text/javascript">
				  document.getElementById('forum_embed').src =
					 'https://groups.google.com/forum/embed/?place=forum/passport-support'
					 + '&showsearch=true&showpopout=true&showtabs=false'
					 + '&parenturl=' + encodeURIComponent(window.location.href);
				</script>
				
			</div>
		</div>
		
<?php include '../includes/footer.php'; ?>		