<?php

   # Handle this in the Apache configuration file instead
   # if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
   #     $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   #     header('HTTP/1.1 301 Moved Permanently');
   #     header('Location: ' . $redirect);
   #     exit();
   # }

	$current = basename(getcwd());

	function get_current( $nav, $current ) {
		if( $nav == $current ) {
			return ' class="current"';
		}
	}

	if( $current == 'spanish' || $current == 'french' || $current == 'german' || $current == 'chinese' || $current == 'italian' || $current == 'japanese' || $current == 'arabic') {
		$currentwl =  $current;
	} else {
		$currentwl = basename(dirname(getcwd()));
	}

	function hide_sub_elem( $hidden, $elem ) {
		if( $hidden != 'TRUE' ) {
			return $elem;
		}
	}

    function curPageURL() {
         $pageURL = 'http';
         if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
            $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
         } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
         }
         return $pageURL;
    }

?>
