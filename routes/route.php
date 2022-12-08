<?php

use App\Controllers\PortfoliosController;
use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::get('phpmvc/', function () {
  return 'Hello world';
});


SimpleRouter::get('phpmvc/portfolios', [PortfoliosController::class, 'index']);
