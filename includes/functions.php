<?php

include_once "config.php";
include_once "header.php";
include_once "footer.php";


function print_title() {
    global $title_script;
	echo "<h2><a href=\"/\">"; system( $title_script ); echo "</a></h2>";
}


function print_body( $id ) {
    global $linksMenu, $index_scripts;
    
    // index page scripts
    //
    if( $id == "0" || $id == null ) {
        foreach( $index_scripts as $script ) {
            system( $script ); lb();
        }

        $linksMenu->setPaintIndex( false );
    }
    else {
        $items = $linksMenu->getItems();
        system( $items[$id]->getCmd() );
    }
}


function print_links_menu( $current_page ) {
    global $linksMenu;
    $linksMenu->printMenu( $current_page );
}


function lb( $n=2 ) {
    for( $i = 1; $i <= $n; $i++ )
        echo "<br />";
}


?>

