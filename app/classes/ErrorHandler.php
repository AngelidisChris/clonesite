<?php

namespace App\Classes;

class ErrorHandler
{

    public static function view($view, $data= [])
    {
        require_once BASE_PATH.'/views/errors/' . $view . '.php';
        die();
    }
}