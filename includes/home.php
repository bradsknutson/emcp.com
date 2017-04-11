<?php

    $emc_connect = file_get_contents('http://connect.emcp.com/wp-content/themes/masonic-child/feed.php');
    
    echo $emc_connect .'<div class="clearfix"></div>';

?>