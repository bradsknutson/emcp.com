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
				<div class="aligncenter"><img src="http://www.emcp.com/lib/images/mimundo-title.png" border="0" /></div>
				<div>
                    <p>Mi Mundo Classroom is an elementary Spanish curriculum focusing on communication. It bundles a collection of our 
					leading components into one effective teaching tool that will get your students speaking Spanish after the first lesson.</p>
					
					<p>Please contact us at 800-328-1452 to place an order.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="mimundo grey-slice" style="padding:0 !important;">
			<div class="ninesixty">
				<div>
                    <h2 class="aligncenter">Symtalk</span></h2>
					<p>The Symbol Cards are at the core of the Symtalk method. Students learn to speak Spanish using self-explanatory symbols to create meaningful sentences. 
					The Symbol Cards represent all parts of speech: subjects, nouns, adverbs, prepositions, and more. The images are introduced in a meaningful sentence structure 
					which allows students to interpret them immediately while grammar is implicitly learned.</p>
				</div>
				<div class="aligncenter"><img src="http://www.emcp.com/lib/images/symtalk-card-series.png" alt="Symtalk Card Series" border="0" /></div>
				<div class="clearfix"></div>
			</div>
		</div> 
		<div class="mimundo">
			<div class="ninesixty">
				<div>
                    <h2 class="aligncenter">My Language Town</span></h2>
					<p><img src="http://www.emcp.com/lib/images/mlt-3-screens.png" alt="My Language Town " border="0" style="float:right;" />
					The visually appealing eReaders present language through unique and engaging stories that reinforce and expand language concepts. The easy-to-follow 
					dialogue format provides students with opportunities to act out the stories.<br /><br />
					
					 The easy-to-learn, catchy Spanish songs introduce and develop language concepts in a fun and engaging way.
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="mimundo grey-slice" style="padding:0 !important;">
			<div class="ninesixty">
				<div>
                    <h2 class="aligncenter">Flipgrid</span></h2>
					<p>Students demonstrate what they know by capturing short videos from any device, to post and share ideas, with classmates. Students practice 
					presentational and interpersonal communication in a safe and controlled online environment.</p>
				</div>
				<div class="aligncenter"><img src="http://www.emcp.com/lib/images/mimundo-flipgrid.png" alt="Flipgrid" border="0" /></div>
				<div class="clearfix"></div>
			</div>
		</div> 
		<div class="mimundo">
			<div class="ninesixty">
				<div>
                    <h2 class="aligncenter">Mi mundo Classroom – <span class="italic">Which level is right for my students?</span></h2>
					<p>Mi mundo is flexible. Each level is designed as an entry-level, so students who are not familiar with the program can begin at any level.</p>
				</div>
				<div class="aligncenter"><img src="http://www.emcp.com/lib/images/mimundo-flipgrid.png" alt="Flipgrid" border="0" /></div>
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