<?php

namespace App\Controllers;

use App\Base\Controller;


class PortfoliosController extends Controller
{
  public function index()
  {
    return view('portfolios/portfolios');
  }
}
