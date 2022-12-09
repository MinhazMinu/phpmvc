<?php

namespace App\Controllers;

use App\Base\Controller;


class WelcomeController extends Controller
{
    public function hello()
    {
        // pdo connection with try catch
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=phpmvc;charset=utf8', 'root', '');
        } catch (\PDOException $e) {
            die($e->getMessage());
        }




        return view('index');
    }
}
