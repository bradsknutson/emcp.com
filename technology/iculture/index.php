<?php 
	$custom_title = 'i-Culture | ';
	include '../../includes/header.php';
?>
	<div id="container" class="iculture">
		<div class="vimeo-modal"></div>
		<div class="header-background-image iculture-bg">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
				<div class="header-hero-hover"></div>                    
                <div class="tech-button-container">
                    <a class="technology-buttons iculture-demo transition" href="<?php echo $server; ?>technology/iculture/demo/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','iCulture Demo');">Demo</a>
                    <a class="technology-buttons iculture-login transition" href="https://www.emcp.com/ilife/iculturenew/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','iCulture Login');">Login</a>
                    <img src="<?php echo $server; ?>lib/images/iculture-slices.png" alt="i-Culture" class="iculture-slices-img" />
                </div>
            </div>
		</div>
		<div class="header-top">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
                <div class="featured-left">
                    <h2>Students explore culture beyond the classroom</h2>
                    <p>i-Culture offers immersion into <span class="bold">French</span>, <span class="bold">Spanish</span> and <span class="bold">German</span> culture through authentic news articles, documentary-style videos, and songs. i-Culture is purposefully leveled and program non-specific. Anybody can enjoy the materials and demonstrate progress through built-in comprehension activities and online enrichment.</p>
                </div>
			</div>
		</div>
        <div class="iculture-slice-odd">
            <div class="ninesixty">
                <div class="slice-left">
                    <h3>i-News</h3>
                    <p>To truly understand a foreign language and its culture, learners need current, real-life connections to French, Spanish and German speaking worlds—all at a level they can understand. With three fresh, up-to-date news articles a week, your learners will now have the resources to connect their classwork with real-life culture and news. Each article is recorded by a native speaker and includes two activities for both basic and advanced skills.</p>
                </div>
                <div class="slice-right">
                    <img src="<?php echo $server; ?>lib/images/iculture-slice-3.jpg" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="iculture-slice-even">
            <div class="ninesixty">
                <div class="slice-left">
                    <img src="<?php echo $server; ?>lib/images/iculture-slice-4.jpg" />
                </div>
                <div class="slice-right">
                    <h3>i-Songs</h3>
                    <p>Let your students listen to music in class with i-Songs! Music has been proven to be a helpful aid for learners of a second language. A new i-Song is introduced each month, giving your students the opportunity to sing and learn about current and traditional songs and artists from Spanish, German or French-speaking cultures. Karaoke-style songs make learning engaging and fun at any level of experience. Features include a transcript of the song, biography of the artist, follow-up writing activity, and much more!</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="iculture-slice-odd">
            <div class="ninesixty">
                <div class="slice-left">
                    <h3>i-Videos</h3>
                    <p>Engage and enlighten your students with documentary-style videos that depict the real lives of people in their native countries. New videos are released monthly and topics include daily routines, family and school life, hobbies, holidays, and daily life around town and in the city. What if the current video doesn’t relate to what you’re currently teaching in class? Don’t fret! You always have the option to choose a fitting video from our extensive archived library.</p>
                </div>
                <div class="slice-right">
                    <img src="<?php echo $server; ?>lib/images/iculture-slice-2.jpg" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="iculture-slice-even">
            <div class="ninesixty">
                <div class="slice-left">
                    <img src="<?php echo $server; ?>lib/images/iculture-slice-1.jpg" />
                </div>
                <div class="slice-right">
                    <h3>i-Passport</h3>
                    <p>What is the closest thing to scheduling an international field trip for your classroom? The answer is i-Passport. With i-Passport, you can take a break from typical routines and send your students on an immersive, virtual journey around the world! Students from Spanish, German and French-speaking countries host videos highlighting different places around the world relating to your target.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
	
<?php include '../../includes/footer.php'; ?>