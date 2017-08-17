<?php

namespace App\Controllers;

/**
* 
*/
class HomeController extends Controller
{
    
    public function home($request,$response)
    {
        return $hh = $this->view->render($response,'home.twig');
    }

}