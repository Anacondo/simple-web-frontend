<?php


class SimpleMenu {
    private $items = array();
    private $paint_index = true;


    public function addItem( $new_item ) {
        array_push( $this->items, $new_item );
    }

    public function getItems() {
        return $this->items;
    }

    public function setPaintIndex( $new_paint_index ) {
        $this->paint_index = $new_paint_index;
    }

    public function printMenu( $current_page ) {
        echo "<ul>";
        
        foreach( $this->items as $item )
        {
            if( ( ( $item->getId() == "0" ) && !$this->paint_index ) || $item->getId() == $current_page ) 
                continue;

            // if it's a pure command, we precede it by dashes
            //
            if( $item->getLink() != "" ) {
                echo "<li><a href=\"" . $item->getLink();
                if( $item->getId() == "0" )
                    echo "\">^ " . $item->getName() . "</a></li>";
                else
                   echo "\">[ " . $item->getName() . " ]</a></li>";
            }
            // if it's a link, we put it within brackets
            //
            else {
                echo "<li><a href=\"/index.php?page=" . $item->getId();
            
                if( $item->getId() == "0" )
                    echo "\">" . $item->getName() . "</a></li>";
                else
                    echo "\">>> " . $item->getName() . "</a></li>";
            }
        }

        echo "</ul>";
    }
}


class MenuItem {
    private $id;
    private $name;
    private $link;
    private $cmd;

    
    public function setId( $new_id ) {
        $this->id = $new_id;
    }

    public function getId() {
        return $this->id;
    }

    public function setName( $new_name ) {
        $this->name = $new_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setLink( $new_link ) {
        $this->link = $new_link;
    }

    public function getLink() {
        return $this->link;
    }
            
    public function setCmd( $new_cmd ) {
        $this->cmd = $new_cmd;
    }
            
    public function getCmd() {
        return $this->cmd;    
    }

    public function __construct( $new_id="", $new_name="", $new_link="", $new_cmd="" ) {
        $this->setId( $new_id );
        $this->setName( $new_name );
        $this->setLink( $new_link );
        $this->setCmd( $new_cmd );
    }
}

?>

