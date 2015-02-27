<?php
if (isset($_GET['k'])):
    @setcookie($_GET['k'], time(), time() + 604800, '/', $_SERVER['HTTP_HOST'], false, false);
endif;

header("Content-type: image/gif");
readfile( './blank.gif' );

die();
?>