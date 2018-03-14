<?php 
	$custom_title = 'Heritage Speaker | ';
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
	<div id="container" class="heritage">
		<div class="header-background-image heritage-bg">
			<div id="topImg">
                <div class="tech-button-container">
                    <a class="technology-buttons qc-sample transition" href="<?php echo $server; ?>world-languages/spanish/heritage/sample/" onClick="ga('send', 'event', 'Call To Action Button','click','Heritage Sample');" target="_blank">Sample</a>
                </div>              
			</div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
				<div class="aligncenter"><h2>Heritage Speaker Bundle</h2></div>
				<div>
                    <p class="no-top">
					Our Heritage Speaker Bundle is a set of three components offering a digital supplement for heritage and native Spanish speakers, 
					authentic cultural immersion, and a video capture and collaboration tool. The bundle includes both <span class="italic">Espa&ntilde;ol para hispanohablantes 
					nativos</span> eBooks our digital supplement designed to address the needs of heritage and native speakers, as well as provide practice 
					for the AP* Spanish Language and Culture Exam, our authentic visual culture immersion tool (continuously updated throughout the 
					school year) <a class="learn-more-link" href="https://www.emcp.com/technology/iculture/">iCulture</a>, as well as our video 
					capture and collaboration tool called <a class="learn-more-link" href="https://www.emcp.com/flipgrid/new/">Flipgrid</a>.
					</p>
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