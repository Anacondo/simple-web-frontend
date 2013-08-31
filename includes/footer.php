<?php

include_once "config.php";
include_once "functions.php";


function print_footer( $current_page ) {
    echo "</div></pre>";

    print_links_menu( $current_page );

    echo "</body>";
    echo "</html>";
}

?>

