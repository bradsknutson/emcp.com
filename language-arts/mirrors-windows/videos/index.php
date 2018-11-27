<?php 
	$custom_title = 'Mirrors & Windows | Videos';
	include '../../../includes/header.php';
?>
	<div id="container" class="mw">
		<div class="vimeo-modal"></div>
		<div class="header-background-image mw-new-bg">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
                <div class="header-hero-hover"></div>
                <a class="technology-buttons passport-sample transition" href="<?php echo $server; ?>language-arts/mirrors-windows/sample/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','MW Sample');">Sample</a>
				&nbsp;&nbsp;
				<a class="technology-buttons passport-sample transition" href="<?php echo $server; ?>language-arts/mirrors-windows/passport/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','Passport');" style="margin-left:200px !important;">New! Passport for ELA</a>
			</div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first paddingtop20 paddingbottom20">
			<div class="ninesixty" style="padding-bottom:10px;">
				<div style="width:700px;margin:0 auto;">
                    <p class="no-top">
					Listen to what you your colleagues are saying about their Mirrors &amp; Windows experience and why they chose it for their ELA curriculum.
					</p>
				</div>
				<div class="clearfix"></div>
				<div>
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/300380241?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:50px 0 20px 20px;text-align:center;">
						<strong>What do you love about the program?</strong>
					</div>
				</div>
				<div class="clearfix"></div>
				<div style="margin-top:25px;">
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/300380241?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:50px 0 20px 20px;text-align:center;">
						<strong>Why choose Mirrors &amp; Windows?</strong>
					</div>
				</div>
				<div class="clearfix"></div>
				<div style="margin-top:25px;">
					<div style="float:left;width:500px;">
						<iframe src="https://player.vimeo.com/video/300380241?title=0&byline=0&portrait=0" width="500" height="278" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div style="float:left;width:400px;padding:50px 0 20px 20px;text-align:center;">
						<strong>Kelly McCoig, Supervisor of Secondary English on Mirrors &amp; Windows?</strong>
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