<?php

/*
 * Declare CONSTANTS
 */
define('DS', DIRECTORY_SEPARATOR);
define('THEME_PATH', dirname(__FILE__) . DS);
define('THEME_INCLUDES_PATH', THEME_PATH . DS . 'includes' . DS);
define('THEME_DOMAIN', 'book-library');

/*
 * Include Required Files
 */
include_once THEME_INCLUDES_PATH . 'initialize.php';
include_once THEME_INCLUDES_PATH . 'post-type' . DS . 'books.php';
include_once THEME_INCLUDES_PATH . 'meta-box' . DS . 'books.php';
