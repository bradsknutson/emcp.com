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
						<?php 
                            $elem_1 = '<li><a href="'. $server .'world-languages/'. $currentwl .'/programs/">Programs</a></li>';
                            $elem_2 = '<li><a href="'. $server .'world-languages/'. $currentwl .'/activity-books/">Activity Books</a></li>';
                            $elem_3 = '<li><a href="'. $server .'world-languages/'. $currentwl .'/readers/">Readers</a></li>';
                            $elem_4 = '<li><a href="'. $server .'world-languages/'. $currentwl .'/games/">Games</a></li>';
                            $elem_5 = '<li><a href="'. $server .'world-languages/'. $currentwl .'/classroom-fun/">Classroom Fun</a></li>';
                            
                            echo hide_sub_elem( $hide_elem_1, $elem_1 );
                            echo hide_sub_elem( $hide_elem_2, $elem_2 );
                            echo hide_sub_elem( $hide_elem_3, $elem_3 );
                            echo hide_sub_elem( $hide_elem_4, $elem_4 );
                            echo hide_sub_elem( $hide_elem_5, $elem_5 );
                        ?>
					</ul>
					<div class="clearfix"></div>
				</div>