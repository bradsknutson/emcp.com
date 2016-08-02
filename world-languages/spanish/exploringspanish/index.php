<?php 
	$custom_title = 'Exploring Series | ';
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
    height: 100% !important;
}
</style>
	<div id="container" class="quechevere">
		<div class="vimeo-modal"></div>
		<div class="header-background-image exploring-spanish-bg">
			<div id="topImg"></div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
				<div class="ex-sp-left">
                    <p class="no-top">Set your students on a path to discovering and learning languages with EMC’s Exploring Series, introductory programs intended to present language and culture to young, beginning language learners. The Exploring Series is perfect for use in middle school FLEX and FLES programs. It can also be used as part of a formal 7th and 8th grade language course. With Exploring your students will get a taste of language and culture through 20 thematic units covering topics of high interest: food, music, art, literature, geography, and so much more! Engage them in listening, speaking, reading, and writing while using functional and relevant vocabulary.</p>
				</div>
				<div class="ex-sp-right">
					<img src="<?php echo $server; ?>lib/images/exploring-spanish-cover.png" alt="Exploring Spanish Program" />
				</div>
				<div class="clearfix"></div>
				<div class="tech-button-container" style="margin:20px 0 0;">
					<a class="technology-buttons transition" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea95ac29134a86ce5742d40faca4d666daee93197503b0ef54" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','Exploring Spanish Sample');" style="position:relative !important;display:inline !important;">Sample</a>
                    <p>The Exploring Series is available for Spanish, French, German, Chinese, Italian and Arabic. <a class="learn-more-link" href="http://edu.emcp.com/world-languages.html?emc_product_series=386">Click here to learn more</a> about all of the languages offered.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="no-bottom">
            <div class="ninesixty paddingbottom40" style="margin-top:15px;">
				<div id="accordion">
			<!-- 1 -->
					<h3 class="showSingle" target="1"><strong>New! For Spanish and French Revised Editions</strong></h3>
					<div id="div1" class="targetDiv">
                        <p>For Students:</p>
                        <ul>
                            <li>Student Edition Textbook</li>
                            <li>Student Edition eBook</li>
                            <li>Student Edition Workbook</li>
                            <li>Student Edition eWorkbook</li>
                        </ul>
                        <p>For Teachers:</p>
                        <ul>
                            <li>Teacher's Guide, which includes:</li>
                            <li>Unit Objectives, Lesson Plans, Teaching Suggestions, and Symtalk Activities</li>
                            <li>Textbook Answer Key</li>
                            <li>Workbook Answer Key</li>
                            <li>Check-up Written Activities Blackline Masters and Answer Key</li>
                            <li>Check-up Listening Activities Blackline Masters and Answer Key</li>
                            <li>Textbook Audio Program Script</li>
                            <li>Exploring Teacher's Guide eBook, which also includes access to:
                                <ul>
                                    <li>eWorkbook</li>
                                    <li>Textbook Audio Program files</li>
                                    <li>Check-up Listening Activities Audio files</li>
                                    <li>Symtalk Digital Symbol cards</li>
                                    <li>eVisuals</li>
                                </ul>
                            </li>
                        </ul>
                        <p>Not every component is available for every language. See <a href="<?php echo $server; ?>exploring">emcp.com/exploring</a> for more details.</p>
					</div>
			<!-- 2 -->
					<h3 class="showSingle" target="2"><strong>Program Resources</strong></h3>
					<div id="div2" class="targetDiv" style="display:none;height:560px !important;">
						<span class="sp-header">Exploring Spanish Student &copy;2017</span>
						<p class="sp-text">Set your students on a path to discovering and learning languages with
						EMC's Exploring Spanish, an introductory program intended to present
						Spanish language and culture to young, beginning language learners.</p>
						
						<br />
						<span class="sp-header">Exploring Spanish Workbook &copy;2017</span>
						<ul class="sp-landing">
							<li>Builds skills in speaking, listening, reading, and writing</li>
						</ul>
						<span class="sp-header">Exploring Spanish Teacher's Guide &copy;2017</span>
						<p class="sp-text">The Exploring Spanish Teacher's Guide contains:</p>
						<ul class="sp-landing">
							<li>Unit Objectives, Lesson Plans, Teaching Suggestions, and Symtalk Activities</li>
							<li>Textbook Answer Key</li>
							<li>Workbook Answer Key</li>
							<li>Check-up Written Activities Blackline Masters and Answer Key</li>
							<li>Check-up Listening Activities Blackline Masters and Answer Key</li>
							<li>Textbook Audio Program Script</li>
						</ul>
						<p class="sp-text">The Exploring Spanish Teacher's Guide eBook also includes access to the following:</p>
						<ul class="sp-landing">
							<li>eWorkbook</li>
							<li>Textbook Audio Program files</li>
							<li>Check-up Listening Activities Audio files</li>
							<li>Symtalk Digital Symbol cards</li>
							<li>eVisuals</li>
						</ul>
						</p>
					</div>                                                                                                 
				</div>
			</div>
		</div>
	<!-- END ACCORDION -->
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