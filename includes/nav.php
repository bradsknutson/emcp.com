<?php 
    // $server is defined in server.php 
    // get_current() is defined in functions.php 
    // $current is defined in functions.php 
?>			
    <div class="container">
	
		<a href="<?php echo $server; ?>"><img src="<?php echo $server; ?>lib/images/logo.png" alt="EMC" /></a>
		
		<!-- Request Button -->
		<a href="/catalog/request.php" class="request">SAMPLE</a>
		
		<nav class="main-navigation" role="navigation">
			
			<ul id="sf" class="sf-menu">

                <li<?php echo get_current('technology',$current); ?>><a href="<?php echo $server; ?>technology/">Technology</a>
					<ul>
						<li><a href="<?php echo $server; ?>technology/passport/">Passport</a></li>
						<li><a href="<?php echo $server; ?>technology/ebooks/">eBooks</a></li>
						<li><a href="<?php echo $server; ?>technology/iculture/">i-Culture</a></li>
						<li><a href="<?php echo $server; ?>technology/avenue/">Avenue</a></li>
						<li><a href="<?php echo $server; ?>technology/elpac/">ELPAC</a></li>
					</ul>                
                </li>
				<li<?php echo get_current('world-languages',$current); ?>><a href="<?php echo $server; ?>world-languages/">World Languages</a>
					<ul>
						<li><a href="<?php echo $server; ?>world-languages/spanish/quechevere/">Spanish</a></li>
						<li><a href="<?php echo $server; ?>world-languages/french/tes-branche/">French</a></li>
						<li><a href="<?php echo $server; ?>world-languages/german/deutsch-aktuell/">German</a></li>
						<li><a href="<?php echo $server; ?>world-languages/chinese/zhen-bang/">Chinese</a></li>
						<li><a href="<?php echo $server; ?>world-languages/italian/">Italian</a></li>
						<li><a href="<?php echo $server; ?>world-languages/readers/">Readers</a></li>
						<li><a href="<?php echo $server; ?>world-languages/symtalk/">Symtalk</a></li>
						<li><a href="<?php echo $server; ?>world-languages/spanish/mimundo/">Mi Mundo</a></li>
						<li><a href="<?php echo $server; ?>texas/">Texas Proclamation 2017</a></li>
					</ul>
				</li>
				<li<?php echo get_current('language-arts',$current); ?>><a href="<?php echo $server; ?>language-arts/">Language Arts</a>
					<ul>
						<li><a href="<?php echo $server; ?>language-arts/mirrors-windows/">Mirrors & Windows</a></li>
						<li><a href="<?php echo $server; ?>language-arts/expository-composition/">Expository Composition</a></li>
						<li><a href="<?php echo $server; ?>language-arts/access-editions/">Access Editions</a></li>
						<li><a href="<?php echo $server; ?>language-arts/write-in-readers/">Write-in Readers</a></li>
                    </ul>
                </li>
				<li<?php echo get_current('applied-learning',$current); ?>><a href="<?php echo $server; ?>applied-learning/">Applied Learning</a>
					<ul>
						<li><a href="<?php echo $server; ?>applied-learning/business-education/">Business Education &<br />Computer Skills</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/computer-applications/">Computer Applications</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/applied-science/">Applied Science</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/social-studies/">Social Studies</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/career-life-skills/">Career & Life Skills</a></li>
					</ul>
                
                </li>
				<li<?php echo get_current('store',$current); ?>><a href="http://store.emcp.com" title="Home">Store</a></li>
				<li<?php echo get_current('about',$current); ?>><a href="<?php echo $server; ?>about/">About</a>
					<ul>
						<li><a href="<?php echo $server; ?>contact/">Contact</a></li>
						<li><a href="http://store.emcp.com/about-emcp/career-opportunities">Career Opportunities</a></li>
                        <li><a href="<?php echo $server; ?>catalog/">Catalog</a></li>
					</ul>
				</li>

			</ul><!-- end #sf -->
			
		</nav><!-- end .main-navigation -->
	
	</div><!-- end .container -->