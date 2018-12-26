<?php 
	$custom_title = 'Italian Language Programs | ';
	include '../../includes/header.php';
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
	<div id="container" class="italian">
		<div class="vimeo-modal"></div>
		<div class="header-background-image italian-bg">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
                <div class="tech-button-container">
                    <!--
					<a class="technology-buttons qc-sample transition" href="<?php echo $server; ?>world-languages/italian/sample/" onClick="ga('send', 'event', 'Call To Action Button','click','Italian Sample');" target="_blank">Sample</a>
					-->
					<a class="technology-buttons qc-sample transition" href="https://drive.google.com/file/d/0B2BRD_gaMsOKYnJYX1dEWUZubHc/view?usp=sharing" onClick="ga('send', 'event', 'Call To Action Button','click','Sample Chapter');" target="_blank" style="margin-left:100px !important;">Preview a Sample Chapter</a>
				</div>
				<div class="header-hero-hover"></div>                
			</div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
				<div class="italian-left">
                    <p class="no-top"><span class="bold">Welcome to <span class="italic">Amici d'Italia</span></span>, a 3-level Italian program for the 21st century classroom! Watch your students discover the Italian Language in a whole new way. Available in fall 2017.</p>
				</div>
				<div class="italian-right">
					<img src="<?php echo $server; ?>lib/images/italian-hero.png" alt="Italian Program" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
        
        <div class="redefining no-bottom">
            <div class="ninesixty paddingbottom40" style="margin-top:15px;">
				<div id="accordion">
			<!-- 1 -->
					<h3 class="showSingle" target="2"><strong>Key Features</strong></h3>
					<div id="div2" class="targetDiv" style="display:none;">
                        Amici d'Italia is specifically designed to engage high school students in learning the Italian language. Unit features:
						<ul class="lineheight1p75">
							<li>Vocabulary and grammar presented in context
							<li>Clear and concise grammar explanations
							<li>Ample vocabulary and grammar practice
							<li>Communication activities in the presentational, interpersonal, and interpretive modes
							<li>Activities devoted to the four skills: listening, speaking, reading, writing
							<li>Cultural narratives that focus on the products, perspectives, and practices of the Italian culture
						</ul>
					</div>
			<!-- 3 -->
					<h3 class="showSingle" target="4"><strong>Program Components</strong></h3>
					<div id="div4" class="targetDiv" style="display:none;">
                        <div class="one-half first textalignleft">
                            <p class="bold">For students:</p>
                            <ul class="lineheight1p75">
								<li>Textbook (print and digital)</li>
								<li>Workbook (print and digital)</li>
								<li>Textbook audio files</li>
								<li>Workbook audio files</li>
                            </ul>
                        </div>
                        <div class="one-half last textalignleft">
                            <p class="bold">For teachers:</p>
							<p>Teacher's Guide (print and digital), which includes:</p>
                            <ul class="lineheight1p75">
                                <li>Textbook Activities Answer Key</li>
								<li>Workbook Answer Key and listening activities transcript</li>
								<li>Entrance Test</li>
								<li>Unit Assessments provided in two versions</li> 
								<li>Units Skill Tests with audio files for listening comprehension</li>
								<li>Cumulative Linguistic Competence Tests</li>
								<li>Remedial Unit Assessments</li>
								<li>Dramatization scripts</li>
								<li>Audio Program Manager</li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ACCORDION -->   


		<div class="ninesixty no-bottom no-top">
            <h2 style="margin:0 0 25px 0;text-align:center;font-weight:bold;">Related Italian Resources</h2>
        </div>
		
		<?php include '../../includes/wl-footer-links.php'; ?> 
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
<?php include '../../includes/footer.php'; ?>