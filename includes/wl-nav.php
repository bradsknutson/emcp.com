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
						<li><a<?php echo get_current($currentwl,$current); ?> href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/">Programs</a></li>
						<li><a<?php echo get_current('technology',$current); ?> href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/technology/">Technology</a></li>
						<li><a<?php echo get_current('activity-books',$current); ?> href="<?php echo $server; ?>world-languages/<?php echo $currentwl; ?>/activity-books/">Activity Books</a></li>
						<li><a<?php echo get_current('readers',$current); ?> href="http://store.emcp.com/world-languages.html?emc_product_type=367&language=357">Readers</a></li>
						<li><a<?php echo get_current('games',$current); ?> href="http://store.emcp.com/world-languages.html?emc_product_type=366&language=357">Games</a></li>
						<li><a<?php echo get_current('classroom-fun',$current); ?> href="http://store.emcp.com/world-languages.html?emc_product_type=369&language=357">Classroom Fun</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>