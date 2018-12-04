<?php 
	$custom_title = 'Mirrors & Windows | Videos';
	include '../../../includes/header.php';
?>
	<div id="container" class="mw">
		<div class="vimeo-modal"></div>
		<div class="header-background-image mw-testimonials-new-bg">
			<div id="topImg"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first paddingtop20 paddingbottom20" style="margin-top:305px !important;">
			<div class="ninesixty" style="padding-bottom:10px;">
				<div style="width:700px;margin:0 auto;">
					<p>
						<a class="mw-link" href="http://pages.exacttarget.com/elavasr1819/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','MW Sample');" style="">Sample</a>
						&nbsp;&nbsp;
						<a class="mw-link" href="<?php echo $server; ?>language-arts/mirrors-windows/passport/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','Passport');" style="">New! Passport for ELA</a>
						&nbsp;&nbsp;
						<a class="mw-link mw-landing-text" style="cursor:pointer;">Program Overview</a>
					</p>
                    <h3 class="no-top">
					Listen to what educators are saying about their Mirrors &amp; Windows experience and why they chose it for their ELA curriculum.
					</h3>
				</div>
				<div class="clearfix"></div>
				<div>
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/296090243?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:10px 0 20px 20px;">
						<strong>Why Choose <span class="italic">Mirrors &amp; Windows</span>?</strong><br />
						Secondary English supervisor Kelly McCoig discusses how her district in Virginia benefits from EMC School's English Language arts program  
						<span class="italic">Mirrors &amp; Windows: Connecting with Literature</span>.
					</div>
				</div>
				<div class="clearfix"></div>
				<div style="margin-top:25px;">
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/300380241?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:10px 0 20px 20px;">
						<strong>Let's talk program resources.</strong><br />
						Teachers talk about the vast resources available within EMC School's 6-12<sup>th</sup> grade, 7-Level English Language arts program 
						<span class="italic">Mirrors &amp; Windows: Connecting with Literature</span>.
					</div>
				</div>
				<div class="clearfix"></div>
				<div style="margin-top:25px;">
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/299938535?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:10px 0 20px 20px;">
						<strong>Diversity, adaptability and technology.</strong><br />
						Teachers talk about the diversity, adaptability, and technology integration offered by EMC School's English Language arts program, 
						which is available in both print and digital formats and powered by their state-of-the-art learning environment, Passport<sup>&reg;</sup>.
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- END NEW-->
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
<script type="text/javascript">
$('.showLink').click(function() {
  //$('.hideme').hide();  
  if ($(this).hasClass('active')) {    
    $(this).removeClass('active');
    $('.hideme').slideUp();
  } else {
    $('.hideme').slideUp();
    $('.showBtn').removeClass('active');
    $(this).addClass('active');
    $(this).next().filter('.hideme').slideDown();
  }
});
</script>
<style>
.hideme {
  display: none;  
}
</style>
<?php include '../../../includes/footer.php'; ?>