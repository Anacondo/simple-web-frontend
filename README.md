simple-web-frontend
===================

A simple PHP web frontend, created with small or embedded devices like the Raspberry Pi in mind, that shows useful information about the machine's status in the form of captured console commands (non-interactive). The purpose is to monitorize the machine by accessing frequent commands without the need to log in.

You can easily alter or define new menu entries and links by editing include/config.php. Hardware-related commands should of course be adapted to every particular machine, although it should be generally compatible with any linux system as long as the user has appropriate permission to execute the commands.

Requires Apache2 and PHP to run.
