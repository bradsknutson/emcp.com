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

				<li<?php echo get_current('world-languages',$current); ?>><a>World Languages</a>
					<ul>
						<li><a href="<?php echo $server; ?>world-languages/spanish/quechevere/">Spanish</a></li>
						<li><a href="<?php echo $server; ?>world-languages/symtalk/">Elementary Spanish</a></li>
						<li><a href="<?php echo $server; ?>world-languages/french/tes-branche/">French</a></li>
						<li><a href="<?php echo $server; ?>world-languages/german/deutsch-aktuell/">German</a></li>
						<li><a href="<?php echo $server; ?>world-languages/chinese/zhen-bang/">Chinese</a></li>
						<li><a href="<?php echo $server; ?>world-languages/italian/">Italian</a></li>
						<li><a href="<?php echo $server; ?>technology/iculture/">i-Culture</a></li>
					</ul>
				</li>
				<li<?php echo get_current('language-arts',$current); ?>><a>Language Arts</a>
					<ul>
						<li><a href="<?php echo $server; ?>language-arts/mirrors-windows/">Mirrors & Windows</a></li>
						<li><a href="<?php echo $server; ?>language-arts/mirrors-windows/passport/">Passport</a></li>
						<li><a href="<?php echo $server; ?>language-arts/access-editions/">Access Editions</a></li>
                    </ul>
        </li>
				<li<?php echo get_current('applied-learning',$current); ?>><a href="<?php echo $server; ?>applied-learning/applied-science/">Applied Learning</a>
					<ul>
						<li><a href="<?php echo $server; ?>applied-learning/financial-literacy/economics/">Economics</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/applied-science/biotechnology/">Biotechnology</a></li>
						<li><a href="<?php echo $server; ?>applied-learning/applied-science/anatomy-physiology/">Anatomy & Physiology</a></li>
					</ul>
        </li>
			</ul><!-- end #sf -->
		</nav><!-- end .main-navigation -->
	</div><!-- end .container -->
