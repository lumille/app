<?php


namespace App\Controller;


class ErrorController extends AppController
{
    public function error404 ()
    {
        return render('error.404');
    }
}