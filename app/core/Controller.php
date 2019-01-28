<?php


class Controller
{

    protected function model($model)
    {
        $this->loadTwig();
        require_once  '../app/models/'. $model . '.php';
        return new $model();
    }

    public function view($view, $data= [])
    {
        require_once __DIR__.'/../../views/'. $view . '.html';
    }

    public function loadTwig() {
        $loader = new Twig_Loader_Filesystem('../views');

        $this->twig = new Twig_Environment($loader);
    }

}