<?php



// Autoload Vendor file

require_once __DIR__ . '/vendor/autoload.php';

/* Load external routes file */

require_once 'routes/route.php';

use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
