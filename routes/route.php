<?php

use App\Controllers\PortfoliosController;
use App\Controllers\WelcomeController;
use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::get('phpmvc/', function () {
  return 'Hello world';
});


SimpleRouter::get('phpmvc/portfolios', [PortfoliosController::class, 'index']);
SimpleRouter::get('phpmvc/welcome', [WelcomeController::class, 'hello']);
