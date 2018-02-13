 <?php 
	$custom_title = 'Social Studies | ';
	include '../../includes/header.php';
?>
	<div id="container" class="al-ca al-ss">
		<div class="vimeo-modal"></div>
		<div class="header-background-image al-ss-bg">
			<div id="topImg"></div>
		</div>
		<div class="header-top">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="white-slice al-top-content">
			<div class="ninesixty">
                <div class="left-slice" style="width:300px !important;text-align:center;">
                    <a href="<?php echo $server; ?>technology/passport/"><img src="<?php echo $server; ?>lib/images/econ-passport-desktop.png" alt="Personal Finance Program" style="margin:0 !important;" /></a><br />
					<a href="<?php echo $server; ?>technology/passport/"><strong>Learn more about Passport</strong></a>
                </div>
				<div class="left-slice" style="width:234px !important;">
					<img src="<?php echo $server; ?>lib/images/al-ss-econ.png" alt="Economics" style="margin:0 !important;" />
				</div>
                <div class="right-slice" style="width:390px !important;">
                    <h1 style="display:inline !important;">Economics</h1> <!-- <img src="<?php //echo $server; ?>lib/images/powered-by-passport-300.png" width="200" alt="Powered by Passport" style="float:right;margin:0 !important;" /> -->
                    <p>The learning environment of tomorrow's Economics classroom. Show students how to find economics in usual and surprising place with <em>Economics: New Ways of Thinking.</em></p>
                    <a class="learn-more-link" href="<?php echo $server; ?>applied-learning/financial-literacy/economics/">Learn More!</a>&nbsp;&nbsp;
                    <a class="learn-more-link" href="https://store.emcp.com/econ2e.html">Buy It Now!</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		<div class="grey-slice">
			<div class="ninesixty slice-odd">
                <div class="left-slice">
                    <h1>Personal Finance</h1>
                    <p><em>Personal Finance: A Lifetime Responsibility</em> covers current and relevant topics, including identity theft, buying a car, and using debit cards. It presents hundreds of real-life examples, documents, and forms to capture the interest and imagination of today's consumer-oriented teens.</p>
                    <a class="learn-more-link" href="<?php echo $server; ?>applied-learning/financial-literacy/personal-finance/">Learn more</a>
                </div>
                <div class="right-slice">
                    <img src="<?php echo $server; ?>lib/images/al-ss-pf.png" alt="Personal Finance" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		<div class="white-slice">
			<div class="ninesixty">
                <div class="left-slice">
                    <img src="<?php echo $server; ?>lib/images/al-ss-gov.png" alt="American Government" />
                </div>
                <div class="right-slice">
                    <h1>American Government</h1>
                    <p>Provide students with clear explanations about the origin of American government and how it functions today. Stories, debates, and discussions on contemporary issues engage your students and prepare them to be responsible citizens.</p>
                    <a class="learn-more-link" href="<?php echo $server; ?>applied-learning/financial-literacy/american-government/">Learn more</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

<?php include '../../includes/footer.php'; ?>