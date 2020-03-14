<?php
    define('ROOT', "http://" . $_SERVER['HTTP_HOST'] . '/zocute');
// DB Config
    Config::write( 'db.host', 'localhost' ); // if build to server, Please [ DON'T FORGET CHANGE HERE ] to Domain of Server.
    Config::write( 'db.port', 'port_mysql' ); // check in xampp control panel Port(s)
    Config::write( 'db.basename', 'your_db_name' ); // choose your database in mysql 
    Config::write( 'db.user', 'your_username' ); //your username (Default: root) or if not exist let enter ""
    Config::write( 'db.password', 'your_password' ); // your password (Default: "") or if not exist let enter ""

    date_default_timezone_set('asia/bangkok'); // set timezone