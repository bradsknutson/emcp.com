<?php include 'includes/header.php'; ?>
	<div id="container" class="main home home-new">
		<div class="header-background-image">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
				<div class="header-hero-hover"></div>
				<div class="future-fluency">
					<h2>Meet Passport<sup>&reg;</sup><br />
                        The future of fluency</h2>
				</div>				
			</div>
		</div>
		<div class="vimeo-modal"></div>
		<div class="header-top">
			<?php include 'includes/nav.php'; ?>
		</div>
		<div class="home-first emc-cats">
			<div class="ninesixty paddingtop40 paddingbottom40 cleafix">
				<div class="one-fourth first">
                    <a href="<?php echo $server; ?>world-languages/" class="learn-more-link"><h3>World Languages</h3></a>
				</div>
				<div class="one-fourth second">
                    <a href="<?php echo $server; ?>language-arts/" class="learn-more-link"><h3>Language Arts</h3></a>
				</div>
				<div class="one-fourth third">
                    <a href="<?php echo $server; ?>applied-learning/" class="learn-more-link"><h3>Applied Learning</h3></a>
				</div>
				<div class="one-fourth last">
                    <a href="https://store.emcp.com" class="learn-more-link"><h3>Store</h3></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
        <div class="about-emc">
            <div class="ninehundred">
                <h2 class="home-mission-h2" style="text-align:center;">EMC School has acquired a cutting edge Computer Science Language Learning Solution—Zulama!</h2>
                <p class="home-mission">Zulama uses engaging game design projects to teach students the same programming languages that 
				professionals use in high-tech workplaces. The expertise of EMC School in building digital competency and communications skills, 
				coupled with the curriculum Zulama developed with faculty from Carnegie Mellon University, has meshed to form a rigorous yet 
				easy-to-use Computer Science and Game Design product line. Zulama modules, courses and certifications are available for sale 
				immediately as part of EMC's computer literacy product line, and ultimately available through EMC's immersive learning environment Passport&reg;.
				</p>
				<p>
				<a class="zulama-buttons da-demo transition" href="/applied-learning/zulama/" onclick="ga('send', 'event', 'Call To Action Button','click','Zulama');">Learn More</a>
				</p>
            </div>
        </div>
        <div class="connect-slice">
            <div class="ninesixty">
                <div class="emc-connect-logo emc-connect-content">
                    <a href="https://connect.emcp.com" target="_blank"><img src="<?php echo $server; ?>lib/images/emc-connect-black.png" alt="EMC Connect" /></a>
                    <p class="emc-connect-content">Tips, resources, trends, and more!</p>
                </div>
                <div class="emc-connect-posts">
            
                </div>
            </div>
        </div>
<?php include 'includes/footer.php' ?>