
<?php 
	$custom_title = 'Tennesee Review | ';
	include '../includes/header.php';
?>
	<div id="container" class="msreview-landing">
		<div class="header-background-image tnreview-landing-bg">
			<div id="topImg">
                <div class="tech-button-container">
                    <a class="technology-buttons msreview-sample transition" href="http://emc.bookshelf.emcp.com" onclick="ga('send', 'event', 'Call To Action Button','click','TN Review');" target="_blank">Access Samples Here!</a>
                </div>
            </div>
		</div>
		<div class="header-top">
			<?php include '../includes/nav.php'; ?>
		</div>
		<div class="white-slice top-slice">
            <div class="seveneighty">
                <p>Welcome Tennessee Academic Reviewers,</p>
                <p>EMC School has submitted sample materials for the Tennessee 2018 adoption.<br />
				Please access our digital samples by clicking <a href="https://emc.bookshelf.emcp.com/" target="_blank" class="learn-more-link" style="font-size:24px;">here</a>, 
				then click "Login" and use the respective usernames and passwords provided to the Adoption Coordinator. For System Requirements and User-Guides, please click 
				<a href="http://support.emcp.com/support/emc-multiplatform-ebooks/#requirements-entries-tab" target="_blank" class="learn-more-link" style="font-size:24px;">here</a>.
				</p>
            </div>            
        </div>
        <div class="dark-grey-slice paddingtop20 paddingbottom40">
            <div class="seveneighty">
                <h2 class="textcenter marginbottom0">Passport</h2>
                <p class="textcenter nomargin nopadding marginbottom15">Our content and so much more!</p>
                <div class="left-block">
                    <img src="https://www.emcp.com/lib/images/texas-passport.png" alt="Passport">
                </div>
                <div class="right-block">
                    <p>Provide 21st century experiences that will help students build relationships and prepare them for what lies far beyond your classroom walls.
					For a self-guided Passport tour, click <a href="https://www.emcp.com/passport/tour/" target="_blank" style="font-size:20px;color:#fff;text-decoration:underline;">here</a>.
					</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="connect-slice">
            <div class="ninesixty">
                <div class="emc-connect-logo emc-connect-content">
                    <a href="https://connect.emcp.com" target="_blank"><img src="<?php echo $server; ?>lib/images/emc-connect-black.png" alt="EMC Connect" class="paddingtop40" /></a>
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