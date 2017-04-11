
<?php 
	$custom_title = 'Mississippi Review | ';
	include '../includes/header.php';
?>
	<div id="container" class="msreview-landing">
		<div class="header-background-image msreview-landing-bg">
			<div id="topImg">
                <div class="tech-button-container">
                    <a class="technology-buttons msreview-sample transition" href="http://emc.bookshelf.emcp.com" onclick="ga('send', 'event', 'Call To Action Button','click','MS Review');" target="_blank">Access Samples Here!</a>
                </div>
            </div>
		</div>
		<div class="header-top">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="white-slice top-slice">
            <div class="seveneighty">
                <p>Welcome Mississippi Teachers,</p>
                <p>EMC School has submitted sample materials for the Mississippi adoption.<br />
                    Please access our digital samples using the respective usernames and passwords provided to the Adoption Committee. If you have any questions, please contact your Account Manager Josh Winfield at 800-454-6048 or email <a href="mailto:jwinfield@emcp.com" class="learn-more-link">jwinfield@emcp.com</a>.</p>
            </div>            
        </div>
        <div class="dark-grey-slice paddingtop20 paddingbottom40">
            <div class="seveneighty">
                <h2 class="textcenter marginbottom0">Passport</h2>
                <p class="textcenter nomargin nopadding marginbottom15">Our content and so much more!</p>
                <div class="left-block">
                    <img src="http://www.emcp.com/lib/images/texas-passport.png" alt="Passport">
                </div>
                <div class="right-block">
                    <p>Provide 21st century experiences that will help students build relationships and prepare them for what lies far beyond your classroom walls.
					For a self-guided Passport tour, click <a href="http://www.emcp.com/passport/tour/" target="_blank" style="font-size:20px;color:#fff;text-decoration:underline;">here</a>.
					</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="connect-slice">
            <div class="ninesixty">
                <div class="emc-connect-logo emc-connect-content">
                    <a href="http://connect.emcp.com" target="_blank"><img src="<?php echo $server; ?>lib/images/emc-connect-black.png" alt="EMC Connect" class="paddingtop40" /></a>
                    <p class="emc-connect-content">Tips, resources, trends, and more!</p>
                </div>
                <div class="emc-connect-posts">
                    <?php include '../includes/home.php'; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php'; ?>