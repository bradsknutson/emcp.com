<?php 
    // $server is defined in server.php 
    // $currentwl is defined in functions.php 
?>				
                <div class="breadcrumbs">
					<div class="bc-top">
						<a href="../">World Languages</a> >
					</div>
					<div class="bc-current">
						<h3><?php echo ucfirst($currentwl); ?></h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wl-nav">
					<ul>
						<li><a href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/programs/">Programs</a></li>
						<li><a href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/activity-books/">Activity Books</a></li>
						<li><a href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/readers/">Readers</a></li>
						<li><a href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/games/">Games</a></li>
						<li><a href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/classroom-fun/">Classroom Fun</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>