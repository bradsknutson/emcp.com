<?php 
	$custom_title = 'Deutsch Aktuell | ';
	include '../../../includes/header.php';
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
    height: 550px !important;
}
</style>
	<div id="container" class="deutsch-aktuell">
		<div class="vimeo-modal"></div>
		<div class="header-background-image da-bg">
			<div id="topImg">
				<div class="play-button">
					<div class="icon-play"></div>
				</div>
                <div class="tech-button-container">
                    <a class="technology-buttons da-demo transition" href="<?php echo $server; ?>world-languages/german/deutsch-aktuell/sample/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','DA Sample');">Sample</a>
                </div>
				<div class="header-hero-hover"></div>				
			</div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
				<div class="conectate-left" style="width:550px !important;">
					<p class="no-top">
						Meet <span class="bold"><span class="italic">Deutsch Aktuell</span></span>, a program where students interact with German language 
						and culture through engaging activities, and group or class projects. Students advance their language skills through real-life communication, 
						cultural interactions and integrated technology.
					</p>
					<img src="<?php echo $server; ?>lib/images/da-cover_new.png" alt="Deutsch Aktuell German Program" /><br />
					
                    <p>
						<a class="learn-more-link smaller-link" href="<?php echo $server; ?>technology/passport/">Discover Deutsch Aktuell in Passport</a><br />
						<a class="learn-more-link smaller-link" href="buy/">Buy It Now!</a>
					</p>
				</div>
				<div class="conectate-right" style="text-align:center;">
					<a href="<?php echo $server; ?>technology/passport/"><img src="<?php echo $server; ?>lib/images/da-passport-desktop.png" alt="Deutsch Aktuell German Program" /></a><br />
					<a href="<?php echo $server; ?>technology/passport/"><strong>Learn more about Passport</strong></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
         <div class="redefining no-bottom">
            <div class="ninesixty paddingbottom40" style="margin-top:15px;">
				<div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
			<!-- 1 -->
					<h3 class="showSingle ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" target="1" role="tab" id="ui-id-1" aria-controls="div1" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><strong>New for Seventh Edition</strong></h3>
					<div id="div1" class="targetDiv ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none; height: 550px;" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true">
                        <ul class="lineheight1p75">
                            <li>Abundant communicative activities</li>
                            <li>All new culture content tied to Products, Practices, Perspectives</li>
                            <li>21st-century vocabulary that is relevant and fun for teens to learn</li>
                            <li>Connections to other disciplines such as: Math, Art, Science, and Architecture</li>
                            <li>Opportunities for project-based learning and assessment</li>
                            <li>New modern and engaging design</li>
                            <li>Use of real photographs to illustrate new vocabulary</li>
                        </ul>
					</div>
			<!-- 2 -->
					<h3 class="showSingle ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" target="2" role="tab" id="ui-id-2" aria-controls="div2" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><strong>Components</strong></h3>
					<div id="div2" class="targetDiv ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none; height: 550px;" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true">
                        <div class="one-half first textalignleft">
                            <p class="bold">For students:</p>
                            <ul class="lineheight1p75">
                                <li>Textbook</li>
                                <li>Workbook</li>
                                <li>Grammar and Vocabulary</li>
                                <li>Listening Activities</li>
                                <li>Video Activities</li>
                                <li>eVisuals</li>
                                <li><a href="<?php echo $server; ?>technology/passport/">Passport</a><sup>&reg;</sup></li>
                            </ul>
                        </div>
                        <div class="one-half last textalignleft">
                            <p class="bold">For teachers:</p>
                            <ul class="lineheight1p75">
                                <li>Annotated Teacher’s Edition</li>
                                <li>Workbook Teacher’s Edition</li>
                                <li>Grammar and Vocabulary Teacher's Edition</li>
                                <li>Listening Activities Teacher's Edition</li></li>
                                <li>Video Program Teacher's Edition</li>
                                <li>Communicative Activities</li>
                                <li>TPR Storytelling</li>
                                <li>eVisuals</li>
                                <li>Quizzes with Answer Key</li>
                                <li>Tests with Answer Key</li>
                                <li><span class="bold">Exam</span>View<sup>&reg;</sup></li>
                                <li>Lesson Plans</li>
                                <li><a href="<?php echo $server; ?>technology/passport/">Passport</a><sup>&reg;</sup></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>    
					</div>
				</div>
			</div>
		</div>       
        
     
        <div class="ninesixty no-bottom no-top">
            <h2 style="margin:0;">Additional Resources</h2>
        </div>   
		<div class="ninehundred">
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/symtalk-german.jpg" alt="Symtalk" />
				<h3>Symtalk</h3>
				<p>Middle and Elementary School</p>
				<p>Symtalk is a simple, but effective approach to learning language that delivers astonishing results immediately. You will see your students speak in full sentences on the first day! With the Symtalk method, students learn how to substitute words for self-explanatory symbols. Soon they are speaking in longer and more complex sentences.<br />
				<a class="learn-more-link smaller-link" href="https://store.emcp.com/catalogsearch/result/index/?language=361&q=symtalk">Buy It Now!</a></p>
			</div>
			<div class="sub-featured onesix black">
				<img src="<?php echo $server; ?>lib/images/exploring-german.jpg" alt="Exploring German" />
				<h3>Exploring German</h3>
				<p>Middle School</p>
				<p>Exploring is an exciting way to introduce students to language and culture through 20 thematic units. Each theme generates enthusiasm for language learning through a friendly visual approach of language, art, food, music, geography, and literature. The program includes an array of print and online resources to engage and motivate students' language learning.<br />
				<a class="learn-more-link smaller-link" href="https://store.emcp.com/exploring-german-3rd-edition.html">Buy It Now!</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
        <?php include '../../../includes/wl-footer-links.php'; ?>  
        <div class="qc-passport-pre">
            <div class="ninesixty marginbottom40">
                <h2>Available on&nbsp;</h2>
                <img src="<?php echo $server; ?>lib/images/passport-logo-400.png" alt="Passport" />            
            </div>
        </div>
		<div class="emc-technology-bg passport-tech-bg" style="margin-top:-120px;"></div>		
		<div class="emc-languages">
			<div class="ninehundred no-top">
				<div class="emc-languages-learn">
					<div class="ell-left">
						<div class="quote">
							<span class="red-quotes">"</span>The future of fluency depends on building student competency through engaging performance.<span class="red-quotes">"</span>
						</div>
						<div class="quote-author">
							<strong>- Eric Cantor</strong>, CEO<br />New Mountain Learning
						</div>
					</div>
					<div class="ell-right">
						<p>Through a long-term collaborative partnership with the University of Minnesota's Institute for Design Innovation (IDI) we are building, integrating, and researching the future of fluency. <span class="bold">Passport&reg;</span> builds upon and extends research-based language learning platforms created by the IDI, leveraging EMC School's world language instructional content in an easy-to-use environment designed to drive educator effectiveness and student fluency. Students will <span class="bold">discover</span> languages and cultures, <span class="bold">expand</span> their knowledge beyond the textbook and written test, and <span class="bold">perform</span> what they’ve learned within a portfolio-style environment to achieve lasting proficiency.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>			
		<div class="redefining">
			<div class="ninehundred no-bottom">
				<div class="aligncenter">
					<h2>Redefining seamless learning through technology.</h2>
				</div>
				
				<p>Through our partnership with the University of Minnesota's Institute for Design Innovation (IDI), we are now offering award-winning, research-based learning platforms that enhance your face-to-face, blended, or online classroom.</p>
			</div>
			<div class="redefining-bg">
				<div class="vimeo-modals-container">
					<div class="avenue-play-button">
						<div class="play-button">
							<div class="icon-play"></div>
						</div>
					</div>
					<div class="avenue-play-button-hover-background"></div>
					<div class="flipgrid-play-button">
						<div class="play-button">
							<div class="icon-play"></div>
						</div>
					</div>
					<div class="flipgrid-play-button-hover-background"></div>
				</div>            
            </div>
			<div class="ninesixty">
				<div class="avenue-flipgrid">
					<div class="one-half first">
						<p><span class="bold">Avenue&trade;</span> is a simple, yet powerful e-assessment platform where your students build portfolios of their spoken performances. Educators can create custom tasks or build tasks based on EMC's rich, pre-loaded library of media.</p>
						
						<a href="<?php echo $server; ?>technology/avenue/" target="_blank" class="learn-more-link">Learn more about Avenue</a>
					</div>
					<div class="one-half last">
						<p><span class="bold">Flipgrid&trade;</span> is a video-based discussion environment where students respond to short, teacher-created questions. Flipgrid brings the back row to the front in your classroom.</p>
						
						<a href="<?php echo $server; ?>technology/flipgrid/" target="_blank" class="learn-more-link">Learn more about Flipgrid</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
        <div class="qc-tech da-tech">
			<div class="ninesixty onesix fonteighteen">
				<h3 class="adonde">Multiplatform eBooks</h3>
				<p>Our eBooks connect students with the language in and out of the classroom. With a touch of the finger, students access every page as well as all of the audio (vocabulary presentations, dialogues and activities). Students also have all of the video resources at their fingertips, both dialogue and continuous storyline videos.</p>
				
				<p>Our eBooks are available for delivery on all laptops, desktops, and mobile devices including the iPad®. The best part is that you can have our multiplatform eBook for one low price!</p>
                
                <p><a href="http://emc.bookshelf.emcp.com" target="_blank" class="learn-more-link">Learn more about eBooks</a></p>
			</div>
		</div>                
		<div class="conectate-iculture">
			<div class="ninesixty">
				<div class="conectate-iculture-first">
                    <div class="vimeo-modals-container">
                        <div class="iculture-play-button">
                            <div class="play-button">
                                <div class="icon-play"></div>
                            </div>
                        </div>
                        <div class="iculture-play-button-hover-background"></div>
                    </div> 					
                    <img src="<?php echo $server; ?>lib/images/iculture-laptop.png" alt="i-Culture" />
				</div>
				<div class="conectate-iculture-second">
                    <h3 class="conectate">i-Culture</h3>
					<p class="no-top">Watch authentic culture come alive for your students as they immerse themselves in engaging and varied media: videos, news articles, and songs. i-Passport, i-Videos, and i-Songs bring cultural experiences into the classroom and into your students'  lives.</p>

					<p class="no-bottom"><a href="https://store.emcp.com/i-culture" class="learn-more-link">Learn more about i-Culture</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="redefining">
			<div class="redefining-bg-2">
				<div class="vimeo-modals-container">
					<div class="dvd-play-button">
						<a href="https://vimeo.com/103283691" class="elm-video fancybox-media">
                            <div class="play-button">
                                <div class="icon-play"></div>
                            </div>
                        </a>
					</div>
					<div class="dvd-play-button-hover-background"></div>
				</div>                    
            </div>
			<div class="ninesixty">
				<div class="avenue-flipgrid conectate">
					<div class="one-half first">
						<h3 class="conectate">DVD Program: <span class="italic">Treffpunkt Berlin</span></h3>
						
						<p>Filmed on location in Berlin with professional actors and actresses, <span class="italic">Treffpunkt Berlin</span> features a continuous, intriguing story line woven throughout the three-level video series. Your students will cling to the edge of their seats as each episode of this unique video series unfolds! Can love blossom at the hottest café in Berlin? Stay tuned…</p>
                        
                        <h3 class="conectate">DVD Program: <span class="itelic">Freunde in Deutschland</span></h3>
                        
                        <p>The series of ten episodes (Folgen) feature various locations within the capital city of Berlin with professional actors. In each five- to six-minute episode, students follow the everyday lives of four German teens.</p>
                        
                        <a class="learn-more-link elm-video fancybox-media" href="http://vimeo.com/103283692">Watch an episode</a>
					</div>
					<div class="one-half last">
						<h3 class="conectate">ELPAC</h3>
						
						<p>Use EMC Language Proficiency Assessments (ELPAC) to measure your students’ German language proficiency. Choose from multi-level online assessments in Reading, Listening, Writing, and Speaking that can be administered individually or as a battery. Developed with input from language teachers and school administrators, ELPAC assessments meet the highest standards for reliability while offering flexibility and ease in delivery.</p>
                        <a class="learn-more-link" href="<?php echo $server; ?>technology/elpac/">Learn more</a>
					</div>
					<div class="clearfix"></div>
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
<?php include '../../../includes/footer.php'; ?>