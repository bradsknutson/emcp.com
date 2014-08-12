<?php
	$wlroot = FALSE;
	$dir = explode('/', getcwd());
	$current = $dir[count($dir)-1];	
	
	function get_current( $nav, $current ) {
		if( $nav == $current ) {
			return ' class="current"';
		}
	}
	
	if( $current == 'spanish' || $current == 'french' || $current == 'german' || $current == 'chinese' || $current == 'italian' || $current == 'japanese' || $current == 'arabic') {
		$currentwl =  $current;
		$wlroot = TRUE;
	} else {
		$currentwl = $dir[count($dir)-2];	
		$wlroot = FALSE;
	}
?>