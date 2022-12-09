<?php



// Autoload Vendor file
require_once __DIR__ . '/vendor/autoload.php';

// define constant
define('ROOT', __DIR__);
define('VIEWS', __DIR__ . '/' . 'views');


/* Load external routes file */

require_once 'routes/route.php';

use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
