<?php

    include 'includes/functions.php';

    $ref = curPageURL();

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: http://www.emcp.com/404/?ref='. $ref);
    exit;

?>