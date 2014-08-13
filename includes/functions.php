<?php
	$wlroot = FALSE;
	$current = basename(getcwd());

	function get_current( $nav, $current ) {
		if( $nav == $current ) {
			return ' class="current"';
		}
	}
	
	if( $current == 'spanish' || $current == 'french' || $current == 'german' || $current == 'chinese' || $current == 'italian' || $current == 'japanese' || $current == 'arabic') {
		$currentwl =  $current;
		$wlroot = TRUE;
	} else {
		$currentwl = basename(dirname(getcwd())); 
		$wlroot = FALSE;
	}
?>