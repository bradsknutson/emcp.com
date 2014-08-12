<?php 
	include '../../includes/header.php';
?>
	<div id="container">
		<div class="header-secondary-page"></div>
		<div class="header-top-dark">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="world-language-nav black">
			<div class="ninehundred no-bottom">
				<?php include '../../includes/wl-nav.php'; ?>
				<div class="clearfix"></div>
				<p class="onesix">EMC's robust multiplatform Spanish products provide students with innovative learning solutions and technology that prepare them to be lifelong languages learners and global citizens. EMC's abundant resources and 24/7 customer service provide you with the support you need for effective instruction. With EMC's Spanish educational solutions, you'll love what you teach even more.</p>
			</div>
		</div>
		<?php 
			if($wlroot == TRUE) {
				include 'slider.php';
			} else {
				include '../slider.php';
			}
		?>
		<div class="wl-featured-first featured-spanish">
			<div class="ninehundred onesix black">
				<div>
					<img src="<?php echo $server; ?>lib/images/aventura_logo.jpg" alt="Aventura" />
					<p>Middle and High School</p>
					<p>A Spanish program for the 21st century, &iexcl;Aventura! Second Edition cleverly integrates fun and engaging activities with state of the art technology that speak to today's connected learner. The program motivates students to rapidly develop language proficiency and cultural understanding. Take your students on an adventure into the Spanish-speaking world. Culture, vocabulary, grammar, and innovative technology&mdash;it's all here waiting to be discovered!</p>
					<a class="learn-more-link smaller-link" href="http://store.emcp.com/av2e">Learn more about &iexcl;Aventura!</a>
				</div>
			</div>
		</div>
		<div class="text-block white">
			<div class="chatbox">
				<div class="ninehundred no-top no-bottom">
					<p class="chatbox-quote no-top">"EMC's foreign language series has it all. Everything a foreign language teacher needs to meet state and national standards, use best practices, and keep students interested in world language study are here in these texts."</p>
					<div class="chatbox-quote-author author-padding">- <span class="bold red">Karen Dingeldein</span><br />
					World Language Department Chair, Cudahy High School</div>
				</div>
			</div>
		</div>
		<div class="ninehundred">
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/atodavela_bottom.jpg" alt="A toda vela!" />
				<h3>&iexcl;A toda vela!</h3>
				<p>High School</p>
				<p>&iexcl;A toda vela! is an advanced Spanish program with an engaging, integrated skills approach. Its use of authentic literary sources helps students develop skills to prepare them for the AP* Spanish exam and study beyond high school.<br />
				<a class="learn-more-link smaller-link" href="http://store.emcp.com/world-languages/a-toda-vela-second-edition.html">Learn more about &iexcl;A toda Vela!</a></p>
			</div>
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/confidently.jpg" alt="Speaking Spanish Confidently!" />
				<h3>Speaking Spanish Confidently!</h3>
				<p>High School</p>
				<p><span class="italic">Speaking Spanish Confidently</span> teaches 20 of the most common and difficult Spanish grammar structures. At the core of this method are symbol cards, which are self-explanatory images that represent words for all parts of speech. The symbol cards facilitate the visualization of grammar structures for students to easily identify syntax. Get your students speaking confidently today!<br />
				<a class="learn-more-link smaller-link" href="http://store.emcp.com/speaking-spanish-confidently.html">Learn more about Speaking Spanish Confidently!</a></p>
			</div>			
			<div class="clearfix"></div>
		</div>
		<div class="exploring-spanish">
			<div class="ninehundred onesix black">
				<div class="exploring-left">
					<img src="<?php echo $server; ?>lib/images/exploring_comp.png" alt="Exploring Spanish" style="margin-top:60px;"/>
				</div>
				<div class="exploring-right">
					<h3>Exploring Spanish</h3>
					<p>Middle School</p>
					<p>Exploring is an exciting way to introduce students to language and culture through 20 thematic units. Each theme generates enthusiasm for language learning through a friendly visual approach of language, art, food, music, geography, and literature. The program includes an array of print and online resources to engage and motivate students' language learning.<br />
					<a class="learn-more-link smaller-link" href="http://store.emcp.com/world-languages/exploring-spanish-third-edition.html">Learn more about Exploring Spanish</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="ninehundred">
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/symtalk_comp.jpg" alt="Symtalk" />
				<h3>Symtalk</h3>
				<p>Middle and Elementary School</p>
				<p>Symtalk is a simple, but effective approach to learning language that delivers astonishing results immediately. You will see your students speak in full sentences on the first day! With the Symtalk method, students learn how to substitute words for self-explanatory symbols. Soon they are speaking in longer and more complex sentences.<br />
				<a class="learn-more-link smaller-link" href="http://store.emcp.com/beginning-spanish-level-1.html">Learn more about Symtalk</a></p>
			</div>
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/vale_comp.jpg" alt="Vale!" />
				<h3>&iexcl;Vale!</h3>
				<p>Elementary School</p>
				<p>&iexcl;Vale! is best suited for grade levels 3-5. This series introduces real world situations through music to create a lively and entertaining approach to learning Spanish. The ¡Vale! series is a combination of the Multiple Intelligences Theory and the Total Physical Response Methodology.<br />
				<a class="learn-more-link smaller-link" href="http://store.emcp.com/vale-volume-1.html">Learn more about &iexcl;Vale!</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
		
<?php include '../../includes/footer.php'; ?>		