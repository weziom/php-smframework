<?php

/**
 * Created by Lee Cook.
 * User: Dev
 * Date: 01/03/2016
 * Time: 21:00
 */

// Library path
define('INCLUDES_PATH', 'includes/');

// Load app.inc.php include
if ( file_exists(INCLUDES_PATH . 'app.inc.php')) {
    require_once(INCLUDES_PATH . 'app.inc.php');
} else {
    die();
}

// Load dataase.inc.php include
if ( file_exists(INCLUDES_PATH . 'database.inc.php')) {
    require_once(INCLUDES_PATH . 'database.inc.php');
} else {
    die();
}

// Load framework.inc.php include
if ( file_exists(INCLUDES_PATH . 'framework.inc.php')) {
    require_once(INCLUDES_PATH . 'framework.inc.php');
}

// Load functions.inc.php include
if ( file_exists(INCLUDES_PATH . 'functions.inc.php')) {
    require_once(INCLUDES_PATH . 'functions.inc.php');
} else {
    die();
}

// Load pages.inc.php include
if ( file_exists(INCLUDES_PATH . 'pages.inc.php')) {
    require_once(INCLUDES_PATH . 'pages.inc.php');
} else {
    die();
}

?>