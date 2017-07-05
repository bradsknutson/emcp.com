<?php 
	$custom_title = 'Meet Mi Mundo Classroom? | ';
	include '../../../includes/header.php';
?>
<style>
.ui-accordion .ui-accordion-header {
	background: #F0EFEB !important;
	font-size: 22px !important;
	padding-right: .2em !important;
}
.redefining p {
	font-size: 20px !important;
}
.ui-helper-reset {
	font-size: 18px !important;
}
.ui-widget {
	font-family: "myriad-pro", sans-serif !important;
}
.ui-accordion-content {
    height: 550px !important;
}
</style>
	<div id="container" class="quechevere">
		<div class="header-background-image mimundo-bg">
			<div id="topImg">
                <div class="tech-button-container">
                    <a class="technology-buttons qc-sample transition" href="<?php echo $server; ?>world-languages/spanish/mimundo/sample/" onClick="ga('send', 'event', 'Call To Action Button','click','Mi Mundo Sample');" target="_blank">Sample</a>
                </div>              
			</div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
				<div class="aligncenter"><h2>Meet Mi Mundo Classroom?</h2></div>
				<div>
                    <p class="no-top">Mi Mundo Classroom is an elementary Spanish curriculum focusing on communication. It bundles a collection of our 
					leading components into one effective teaching tool that will get your students speaking Spanish after the first lesson. The bundle 
					includes our visual speaking method called <a class="learn-more-link" href="http://www.emcp.com/world-languages/symtalk/">Symtalk</a>, 
					the age-appropriate and leveled <a class="learn-more-link" href="http://www.emcp.com/mylanguagetown/">My Language Town eReaders &amp; Songs</a>, as well as 
					our video capture and collaboration tool called <a class="learn-more-link" href="http://www.emcp.com/flipgrid/new/">Flipgrid</a>.</p>
					<p span class="bold">Please contact us at 800-328-1452 to place an order.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
	  active: false
    });
  });
</script>
<?php include '../../../includes/footer.php'; ?>