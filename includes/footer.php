		<div class="stay-connected">
			<div class="ninesixty">
				<div class="signupForm">
					<form name="emailSignup" onSubmit="return ValidateForm();" method="POST" id="newsletterSignUp">
						  <div id="formContent">
                            <input type="text" name="test" id="test" class="testInput" placeholder="Leave Empty" />
                            <input type="text" id="emailInput" name="email" class="textInput" placeholder="Stay connected" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Stay connected'" />
                            <button type="submit" id="signUp" name="signUp" class="button" style="display:none">Sign Up</button>
						  </div>
					</form>
				</div>
				<p>Type your email above and hit 'Enter' to stay connected with EMC news, events, and updates.</p>
                <div class="social-icons-footer">
                    <a href="https://www.facebook.com/EMCPublishing" target="_blank">
                            <img src="<?php echo $server; ?>lib/images/social-facebook.png" alt="Facebook" />
                    </a>
                    <a href="https://twitter.com/EMCPublishing" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-twitter.png" alt="Twitter" />
                    </a>
                    <a href="https://www.linkedin.com/company/emc-publishing-llc" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-linkedin.png" alt="Linkedin" />
                    </a>
                    <a href="https://vimeo.com/emcpublishing" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-vimeo.png" alt="Vimeo" />
                    </a>
                </div>
			</div>
		</div>
		<div class="footer">
			<div class="ninesixty">
				<div class="footer-nav">
					<ul>
						<li><a href="http://store.emcp.com/about-emcp/news-and-events/">News</a></li>
						<li><a href="<?php echo $server; ?>contact/">Contact</a></li>
						<li><a href="http://store.emcp.com/customer-service">Customer Service</a></li>
						<li><a href="http://store.emcp.com/local-account-manager-locator/">Sales</a></li>
						<li><a href="http://store.emcp.com/policies-and-order-information/" class="last">Terms and Conditions</a></li>
					</ul>
				</div>
				<p>&copy; <?php echo date("Y"); ?> EMC School. All Rights Reserved.<br />
				EMC is a division of <a class="nostyle" href="http://newmountainlearning.com" target="_blank"><img src="<?php echo $server; ?>lib/images/NML_logo.png" alt="New Mountain Learning" /> New Mountain Learning, LLC</a><br />
				EMC School, 875 Montreal Way, St. Paul, MN 55102 &bull; 800-328-1452 &bull; Fax: 800-328-4564</p>
			</div>
		</div>
	</div>
<script src="<?php echo $server; ?>lib/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.flexslider.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.quote.rotator.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.validate.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.fitvids.min.js"></script>
<script src="<?php echo $server; ?>lib/js/superfish.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jquery.clingify.min.js"></script>
<script src="<?php echo $server; ?>lib/js/twitterfetcher.min.js"></script>
<script src="<?php echo $server; ?>lib/js/selectnav.min.js"></script>
<script src="<?php echo $server; ?>lib/js/jqueryDocReady.js"></script>
<script src="<?php echo $server; ?>lib/js/retina.js" type="text/javascript"></script>
<script src="<?php echo $server; ?>lib/js/sly.min.js"></script>
<script src="<?php echo $server; ?>lib/js/custom.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0023/5572.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>  
</body>
</html>