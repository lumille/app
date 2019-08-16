<?php

namespace App\Controller;

use Lumille\Controller\AppController;

class HomeController extends AppController
{

    public function hello ()
    {
        render('hello');
    }
}