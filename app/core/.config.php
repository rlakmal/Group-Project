<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {

    // database configaration 

    // define('DBHOST', 'localhost');
    define('DBHOST', 'localhost:3308');
    define('DBNAME', 'errand');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/Group-project/public');

} else {

    // database configaration
    define('DBNAME', 'amoral_db');
    define('DBHOST', 'localhost:3308');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.websitename.com');
}

// https://code.tutsplus.com/pdo-vs-mysqli-which-should-you-use--net-24059t