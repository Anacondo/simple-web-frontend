<?php

include_once "menu.class.php";

$hostname = exec( "uname -n" );
$logo_pos = "right"; /* bg logo position [left/right] */
$linksMenu = new SimpleMenu();


/*** script definitions. modify or define your own here ***/

$title_script = 'uname -a';
$index_scripts = array();

// nice greeting message. requires fortune!
$index_scripts[] = '/usr/games/fortune';

// concise free disk space info
$index_scripts[] = 'df -Th -x tmpfs -x rootfs -x devtmpfs';

// concise memory usage info
$index_scripts[] = 'free -h';

// info on uptime, cputime and connected users
$index_scripts[] = 'w';

// a simple bash script to display basic hardware status, like cpu speed
// and temperature. works fine on the pi!
$index_scripts[] = 'PATH=/sbin:/bin:/usr/sbin:/usr/bin:/usr/local/sbin:/usr/local/bin
    MHZ=$(cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_max_freq)
    TEMP=$(cat /sys/class/thermal/thermal_zone0/temp)
    HDD_TEMP="`sudo smartctl -A /dev/sda | egrep Temperature_Celsius | awk \'{print $10}\'`"
    echo cpu freq: $(($MHZ/1000)) Mhz
    echo core temp: $(($TEMP/1000))ºC
    echo hdd temp: $HDD_TEMPºC';

// custom scripts for menu entries. ymmv
$top_script     = "top -bc -n1 -w500";
$smart_script   = "sudo /usr/sbin/smartctl -a /dev/sda";
$dmesg_script   = "sudo /bin/dmesg -Tx | /usr/bin/tail -n 75";
$netstat_script = "netstat -a";  

/*** menu entries. define your menu entries (and their associated commands) or your links here ***/
/*
/*   links are simple redirects to any other apps on your server, and have no commands.
/*   commands are called from the main template and don't have a path to redirect to.
/*
/*                                 id   name            path (links)    command                ***/        
$linksMenu->addItem( new MenuItem( "0", "index",        "/",            "" ) );
$linksMenu->addItem( new MenuItem( "1", "top",          "",             $top_script ) );
$linksMenu->addItem( new MenuItem( "2", "smart",        "",             $smart_script ) );
$linksMenu->addItem( new MenuItem( "3", "dmesg",        "",             $dmesg_script ) );
$linksMenu->addItem( new MenuItem( "4", "netstat",      "",             $netstat_script ) );
$linksMenu->addItem( new MenuItem( "5", "sample_link1", "/url1",        "" ) );
$linksMenu->addItem( new MenuItem( "6", "sample_link2", "/url2",        "" ) );

?>

