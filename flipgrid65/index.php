<?php 
	$custom_title = 'Flipgrid - $65 | ';
	include '../includes/header.php';
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
    height: 250px !important;
}
</style>
	<div id="container" class="passport-landing">
		<div class="header-secondary-page"></div>
		<div class="header-top-dark">
			<?php include '../includes/nav.php'; ?>
		</div>
        <div class="f65-header">
            <div class="f65-container">
                <a class="technology-buttons f65-buy transition" href="https://edu.emcp.com/classroom-technology/flipgrid.html" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','Flipgrid 65 Buy');">Buy</a>
            </div>
        </div>
        <div class="f65 grey-slice">
            <div class="ninehundred" style="padding-top:0px;">
                <p><strong>Flipgrid<sup style="font-size:16px;">TM</sup> is simple.</strong> Try for yourself. Click the green button below and tell the world why you love to teach. (Don't worry, you'll be asked to post the video before it becomes visible to others)</p>
                <iframe src="https://flipgrid.com/#84ee7b7d" width="900" height="600" frameborder="0"></iframe>
            </div>
        </div>
        <div class="redefining">
            <div class="ninesixty">
                <h3>How it works:</h3>
                <p>Flipgrid<sup style="font-size:12px;">TM</sup> is a video-discussion and collaboration tool where teachers create short, discussion-style questions that students respond to through recorded videos. Students share their thoughts with classmates on selected topics to drive engagement and interaction among students.</p>
                
                <div id="accordion">
			<!-- 1 -->
					<h3 class="showSingle" target="1"><strong>1. Create Grids of Questions</strong></h2>
					<div id="div1" class="targetDiv" style="display:none;">
						<p>Unlimited questions per grid. Unlimited responses per question.<br />Grids can be classes, teams, conference attendees or any collection of people interested in a common strand of topics. Each grid can hold an unlimited number of text or video questions.</p>

                        <p>Questions are short video or text-based prompts meant to get a group of people discussing a topic. Each question can hold an unlimited number of video responses.</p>
					</div>
			<!-- 2 -->
					<h3 class="showSingle" target="2"><strong>2. Receive video responses</strong></h2>
					<div id="div2" class="targetDiv" style="display:none;">
						<p>Recipients of your question first snap a thumbnail photo, record a video response, and then submit their video.</p>

                        <p>They can use the Flipgrid iPad, iPhone, or Android app to record, view, like, and share video responses.</p>

                        <p>No accounts are needed to respond. We handle the security and leave the privacy settings up to you.</p>
					</div>
			<!-- 3 -->
					<h3 class="showSingle" target="3"><strong>3. Everyone views and shares</strong></h2>
					<div id="div3" class="targetDiv" style="display:none;">
                        <p><strong>Flipgrid automatically adapts to the correct size.</strong> Whether you have 10 members of your sales team, 25 students in your high school class, or 500+ conference attendees, Flipgrid automatically adapts to the number of response videos.</p>
					</div>
			
				</div>

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
<?php include '../../includes/footer.php'; ?>
<?php include '../includes/footer.php'; ?>