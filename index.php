<?php

header('Content-Type: text/html; charset=utf-8');

include_once "includes/functions.php";

@$current_page = $_GET[ "page" ];
if( $current_page == null )
    $current_page = "0";

print_header( $current_page );
print_body( $current_page );
print_footer( $current_page );

?>

