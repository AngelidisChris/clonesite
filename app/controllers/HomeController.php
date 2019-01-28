<?php


use App\Classes\Session;

class HomeController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index()
    {
//        $user->name = $name;


        $name = '';
        if(Session::has('name'))
            $name = Session::get('name');

        if (!Session::has('logged_in'))
            Session::add('logged_in', 'false');

        echo $this->twig->display('home\index.html.twig',
                ['name' => $name,
                'logged_in' => Session::get('logged_in')]
             );
    }

//    public function signup($username = '', $password = '')
//    {
//        $this->user->create($username, $password);
//        $this->view('home/signup', ['name' => $user->name]);
//
//    }


}