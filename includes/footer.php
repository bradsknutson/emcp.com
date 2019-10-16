		<div class="stay-connected">
			<div class="ninesixty">
				<div class="signupForm">
					<p class="footer-header">Stay Connected</p>
				</div>
                <div class="social-icons-footer">
                    <a href="https://www.facebook.com/EMCPublishing" target="_blank">
                            <img src="<?php echo $server; ?>lib/images/social-facebook.png" alt="Facebook" />
                    </a>
                    <a href="https://twitter.com/EMCSCHOOL" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-twitter.png" alt="Twitter" />
                    </a>
                    <a href="https://www.linkedin.com/company/emc-publishing-llc" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-linkedin.png" alt="Linkedin" />
                    </a>
                    <a href="https://vimeo.com/emcschool" target="_blank">
                        <img src="<?php echo $server; ?>lib/images/social-vimeo.png" alt="Vimeo" />
                    </a>
                </div>
			</div>
		</div>
		<div class="footer">
			<div class="ninesixty">
				<div class="footer-nav">
					<ul id="nf" class="nf-menu">
						<li><a target="_blank" href="https://www.emcp.com/irc/">Internet Resource Center</a></li>
						<li><a target="_blank" href="https://connect.emcp.com/">News</a></li>
						<li<?php echo get_current('about',$current); ?>><a href="<?php echo $server; ?>about/">About</a>
							<ul>
								<li><a href="<?php echo $server; ?>contact/" class="footerlink">Contact</a></li>
								<li><a target="_blank" href="https://www.carnegielearning.com/company/careers/ " class="footerlink">Career Opportunities</a></li>
								<li><a href="<?php echo $server; ?>terms/privacy.php" class="footerlink">Privacy Policy</a></li>
							</ul>
						</li>
						<!-- <li><a href="<?php echo $server; ?>contact/">Contact</a></li> -->
						<li><a target="_blank" href="https://discover.carnegielearning.com/contact-EMC-support.html">Tech Support</a></li>
						<li><a target="_blank" href="https://discover.carnegielearning.com/contact-EMC-sales.html">Sales</a></li>
						<li><a href="<?php echo $server; ?>terms/terms.php" class="last">Terms and Conditions</a></li>
					</ul>
				</div>
				<p>&copy; <?php echo date("Y"); ?> EMC School. All Rights Reserved.<br />
				EMC School, 875 Montreal Way, St. Paul, MN 55102 &bull; 888-851-7094 &bull; <a href="mailto:info@carnegielearning.com">info@carnegielearning.com</a></p>
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
<!-- Marketing Cloud -->
<script type="text/javascript" src="http://2462.collect.igodigital.com/collect.js"></script>
<script type="text/javascript">
_etmc.push(["setOrgId", "2462"]);
_etmc.push(["trackPageView"]);
</script>

<!-- Marketo -->
<script type="text/javascript">
(function() {
  var didInit = false;
  function initMunchkin() {
    if(didInit === false) {
      didInit = true;
      Munchkin.init('041-RWW-195');
    }
  }
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//munchkin.marketo.net/munchkin.js';
  s.onreadystatechange = function() {
    if (this.readyState == 'complete' || this.readyState == 'loaded') {
      initMunchkin();
    }
  };
  s.onload = initMunchkin;
  document.getElementsByTagName('head')[0].appendChild(s);
})();
</script>



<!-- Site Alert -->
<?php
	 $date_now = date("Y-m-d");
	 // Set alert to Expire
	if ($date_now < '2019-09-30') {
?>


<script src="<?php echo $server; ?>lib/js/jquery.cookie.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
      if ($.cookie('cli_alert_closed') != 'true') {
          $( ".js-sticky-alert" ).slideToggle("fast");
      }

      $( ".js-close-alert" ).click(function() {
          $( ".js-sticky-alert" ).hide();
          $.cookie('cli_alert_closed', 'true', {path: '/'} );
      });
  });
</script>

<div class="sticky-alert js-sticky-alert">
    <span class="title">Our Privacy Policy Has Been Updated</span><a class="close-alert js-close-alert"></a>
    <span class="body-wrapper"><span class="body"><p>By using this website, you agree to our new <a href="/terms/privacy.php">Privacy Policy</a>.</p></span></span>
</div>



</body>
</html>

<?php
	}
?>

<!-- End Site Alert -->
