<?php
	$custom_title = 'Zh&#275;n B&agrave;ng! | ';
    $hide_elem_3 = 'TRUE';
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
	<div id="container" class="zhen-bang">
		<div class="vimeo-modal"></div>
		<div class="header-background-image zb-bg">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
                <div class="tech-button-container">
                    <!--
					<a class="technology-buttons zb-demo transition" href="<?php echo $server; ?>world-languages/chinese/zhen-bang/sample/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','ZB Sample');">Sample</a>
					-->
				</div>
				<div class="header-hero-hover"></div>
			</div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
                <div class="aligncenter">
					<h2>A Chinese program for the 21st-century student</h2>
				</div>
				<div class="conectate-left margintop40" style="width:550px !important;">
					<p class="no-top">
						Welcome to EMC's Zh<span class="font-weight:normal;">ē</span>n B&aacute;ng! program, where students interact with Chinese language and culture in awesome, everyday ways. Get students talking
						about family, friends, school, home, meals, shopping and more&ndash;conversing in pairs and groups. Zhēn B&aacute;ng! integrates language and culture
						seamlessly and provides technology resources that are easy to use for students and teachers. What an awesome way to learn the Chinese language!<br /><br />
					</p>
				</div>
				<div class="conectate-right" style="text-align:center;">
					<img src="<?php echo $server; ?>lib/images/zb-cover_new.png" alt="Zh&#275;n B&agrave;ng Chinese Program" /><br />
					<a class="learn-more-link smaller-link" href="<?php echo $server; ?>technology/passport/">Discover Zh&#275;n B&aacute;ng! in Passport</a><br />
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
