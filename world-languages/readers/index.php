 <?php 
	$custom_title = 'World Language Readers | ';
	include '../../includes/header.php';
?>
	<div id="container" class="wl-readers">
		<div class="vimeo-modal"></div>
		<div class="header-background-image wlr-bg">
			<div id="topImg"></div>
			<div class="colorBar" style="background:#c10006; height:10px; width:100%; margin-top:-37px; position:relative; top:35px;"></div>
		</div>
		<div class="header-top">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first light-grey-slice">
			<div class="ninesixty">
                <h3>Enhance your students' learning experience with leveled readers in the target language. Readers help develop students’ grammar and vocabulary knowledge while building their ability to comprehend increasingly difficult pieces of literature.</h3>
            </div>
        </div>
		<div class="secondary-first white margintop0">
			<div class="ninesixty paddingtop0i">
				<div class="conectate-left margintop40">
                    <h2>CIDEB Enhanced eReaders</h2>
					<p class="no-top">Enhanced eReaders with beautiful illustrations to help develop reading and listening skills through texts and synchronized audio recordings of the stories, consolidate vocabulary and learn culture. These eReaders are multi-platform, they work on all laptops, desktops, and mobile devices including the iPad<sup>&copy;</sup>.</p>
                    
                    <ul>
                        <li>Available in Spanish, French, German and Italian</li>
                        <li>Digital only</li>
                        <li>Interactive activities</li>
                        <li>Note taking capabilities</li>
                    </ul>
                    
                    <a class="technology-buttons wl-readers-buttons transition" href="<?php echo $server; ?>world-languages/readers/buy/" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','World Language Readers Buy Now');">Buy Now</a>
                    <a class="technology-buttons wl-readers-buttons transition" href="<?php echo $server; ?>ereaders/" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','World Language Readers Learn More');">Learn More</a>
                    
				</div>
				<div class="conectate-right">
					<img src="<?php echo $server; ?>lib/images/readers-example.png" alt="EMC Enhanced eReaders" style="margin-top:40px !important;"/>
				</div>
				<div class="clearfix"></div>
			</div>
        </div>        
        <div class="redefining no-bottom light-grey-slice">
            <div class="ninesixty paddingtop40 paddingbottom40">
                <div style="width:440px;float: left;">
                    <img src="<?php echo $server; ?>lib/images/mlt-reader.png" alt="My Language Town" class="img-float-left mlt-img" />
                </div>
                <div style="width:460px;float: left;">
                    <h2>My Language Town Readers and Songs</h2>
                    <p>Original Spanish eReaders series packed with communicative dialogs and activities and a collection of songs for mastering vocabulary, grammar and culture. Designed for use both in the classroom and as an independent study, My Language Town materials can make learning Spanish language an interactive, engaging experience.</p>

                    <ul>
                        <li>Available in Spanish (June 1st)</li>
                        <li>Digital and paperback (on demand only)</li>
                        <li>Songs</li>
                    </ul>            
                    
                    <a class="technology-buttons wl-readers-buttons transition" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00eafa7e88f41d8cbd96a0269d731b013d8d034e9a8d6f0718f7" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','My Language Town Preorder Sample');">Sample</a>
                    <a class="technology-buttons wl-readers-buttons transition" href="<?php echo $server; ?>mylanguagetown/" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','My Language Town Learn More');">Learn More</a>
                </div>
                <div class="clearfix"></div>
                
            </div>
        </div>
        <div class="redefining no-bottom">
            <div class="ninesixty paddingtop40 paddingbottom40">
                <h2>EMC Paperback Readers</h2>
                <img src="<?php echo $server; ?>lib/images/cideb-readers-v2.png" alt="CIDEB Readers" class="img-float-right cideb-img" />
                <p>Prefer the no-power-required type of reader? You’re at the right place. Either as stand-alone books or as extensions to our textbook series, readers develop your learners' grammar and vocabulary while building their ability to comprehend increasingly difficult pieces of literature.</p>
                
                <ul>
                    <li>Available in Spanish, French, German and Italian</li>
                    <li>Paperback</li>
                </ul>
                
                <a class="technology-buttons wl-readers-buttons transition" href="<?php echo $server; ?>world-languages/readers/paperback/buy/" target="_blank" onclick="ga('send', 'event', 'Call To Action Button','click','EMC Paperback Readers Buy Now');">Buy Now</a>
                <div class="clearfix"></div>
            </div>
        </div>

<?php include '../../includes/footer.php'; ?>