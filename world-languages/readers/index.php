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
		<div class="secondary-first white">
			<div class="ninesixty">
				<div class="conectate-left margintop40">
                    <h2>EMC Enhanced eReaders</h2>
					<p class="no-top">Enhanced eReaders connect students to their books in and out of the classroom. eReaders work on all laptops, desktops, and mobile devices including the iPad<sup>&copy;</sup>. eReaders are available in Spanish, French and German.</p>
                    
                    <p>Features:</p>
                    
                    <ul>
                        <li>Beautiful illustrations</li>
                        <li>Synchronized audio</li>
                        <li>Note taking</li>
                        <li>Interactive activities</li>
                        <li>Games</li>
                    </ul>
                    
                    <p><a class="learn-more-link smaller-link" href="<?php echo $server; ?>world-languages/readers/buy/">Buy Now!</a></p>
                    <p><a class="learn-more-link smaller-link" href="<?php echo $server; ?>ereaders/">Learn more!</a></p>
				</div>
				<div class="conectate-right">
					<img src="<?php echo $server; ?>lib/images/readers-example.png" alt="EMC Enhanced eReaders" style="margin-top:40px !important;"/>
				</div>
				<div class="clearfix"></div>
			</div>
        </div>        
        <div class="redefining no-bottom light-grey-slice">
            <div class="ninesixty paddingtop40 paddingbottom40">
                <img src="<?php echo $server; ?>lib/images/mlt-reader.png" alt="My Language Town" class="img-float-left mlt-img" />
                <h2>My Language Town</h2>
                <p>A book series packed with communicative dialogs and a collection of songs for Spanish language learners.</p>
                
                <p><a class="learn-more-link smaller-link" href="<?php echo $server; ?>mylanguagetown/">Learn more</a></p>
                
            </div>
        </div>
        <div class="redefining no-bottom">
            <div class="ninesixty paddingtop40 paddingbottom40">
                <h2>EMC Paperback Readers</h2>
                <img src="<?php echo $server; ?>lib/images/cideb-readers-v2.png" alt="CIDEB Readers" class="img-float-right cideb-img" />
                <p>Prefer the no-power-required type of reader? You’re at the right place. Either as stand-alone books or as extensions to our textbook series, readers develop your learners' grammar and vocabulary while building their ability to comprehend increasingly difficult pieces of literature.</p>
                
                <p><a class="learn-more-link smaller-link" href="<?php echo $server; ?>world-languages/readers/paperback/buy/">Buy Now!</a></p>
                <div class="clearfix"></div>
            </div>
        </div>

<?php include '../../includes/footer.php'; ?>