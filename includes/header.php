<?php

include_once "config.php";
include_once "functions.php";


function print_header( $current_page ) {
    global $hostname;
    global $logo_pos;
    global $linksMenu;
    $items = $linksMenu->getItems();
    
    echo '<!DOCTYPE HTML>
    <html>
    <head>
    <title>'.$hostname.'/'.$items[ $current_page ]->getName().'</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <link href="http://fonts.googleapis.com/css?family=Droid Sans Mono" rel="stylesheet" type="text/css">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAD///8AmpqaACEhIQBkZGQA/v7+APf39wAgICAA/f39AB8fHwD8/PwAHh4eANPT0wD7+/sAODg4AObm5gCHh4cA+fn5AICAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAYGBgYGBgYGBgYGBgYGBggGBgYGBgYGBgYGBgYGBgYIBgYGBgYGBgYGBgYGBgYGCAYGBgYGBgYGBgYGBgYGBggGBgYLBAYGBhAACQYGBgYIBgYGBgANBgYAAwYIBgYGCAYGBgYBDgYGAAYGCAYGBggGBgYGBgwGBgAGBgYGBgYIBgYGBggHBgYABgYGBgYGCAYGBgYGAAYGAAYGBgYGBggGBgYPBgAGBgAIBgYGBgYIBgYGBQAAAAAAAAARBgYGCAYGBgYIBgYGBgYGAgYGBggGBgYGBgYGBgYGBgYGBgYIBgYGBgYGBgYGBgYGBgYGCggICAgICAgICAgICAgICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />

    <style type="text/css">
    body {
      background: #000000 url(/img/rpi_bg_'.$logo_pos.'.png) no-repeat fixed '.$logo_pos.' top;
    }

    body, pre {
      font-family: "Droid Sans Mono", courier;
      font-size: 13px;
      color: #cccccc;
      border: 3px double #cccccc;
      padding: 15px;
      margin: 20px;
      width: auto;
    }

    pre {
      whitewhite-space: pre-wrap;       /* css-3 */  
      whitewhite-space: -pre-wrap;      /* Opera 4-6 */  
      whitewhite-space: -o-pre-wrap;    /* Opera 7 */  
      word-wrap: break-word;       /* Internet Explorer 5+ */  
      whitewhite-space: -moz-pre-wrap;  /* Older Versions of Mozilla */  
    }

    h2 {
      padding-left: 15px;
      color: #04b404;
    }

    h2 a:link, h2 a:visited, h2 a:active {
      color: #04b404;
      text-decoration: none;
    }

    h2 a:hover {
      text-decoration: underline;
    }

    a:link, a:visited, a:active {
      color: #f78181;
      text-decoration: none;
    }

    a:hover {
      color: #f78181;
      text-decoration: underline;
    }

    ul {
      list-style-type: none;
      padding-left: 15px;
    }

    </style>
    </head>
    <body>
    '; print_title();
    
    echo "<pre><div>";

    lb();
}

?>

