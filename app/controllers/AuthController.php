<?php


use App\Classes\ErrorHandler;
use App\Classes\Redirect;
use App\Classes\Session;

class AuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = $this->model('Auth');
    }

//    to be changed
    public function index()
    {
        ErrorHandler::view('404');
    }

    public function signup()
    {
        $password=$username=$name_error='';

        // form submited with POST get_class_method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name_error = $flag = '';

            if (isset($_POST['uname']))
                $username = strip_tags(trim($_POST['uname']));


            if (isset($_POST['password']))
                $password = strip_tags(trim($_POST['password']));


            if (empty($username) && empty($_POST['password'])) {
                $name_error = "Για να συνεχίσετε, χρειάζονται το αναγνωριστικό και ο κωδικός πρόσβασης. ";
                $flag = 1;
            } elseif (empty($username)) {
                $name_error = "Πληκτρολογήστε το αναγνωριστικό. ";
            } elseif (empty($_POST['password'])) {
                $name_error = "Πληκτρολόγησε έναν κωδικό πρόσβασης. ";
                $flag = 2;
            }

            // Check for pass length >= 6

            if (!preg_match("/(?=.{6,}).*/", $_POST['password']) && $flag != 1 && $flag != 2) {
                $name_error .= "Ο κωδικός πρέπει να περιέχει τουλάχιστον 6 χαρακτήρες. ";
            }

            //  if input is valid we are ready to access database
            if ($name_error == '') {


                // create new user
                $user = new User();


                // if username exists rows returned are more than 0 (1)
                if ($user->find($username) === true) {
                    $name_error = 'Αυτό το αναγνωριστικό είναι ήδη καταχωρημένο.';


                }
                else {
                    // this username doesn't already exists so we proceed

                    // hash password

                    $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                    // add user to Database
                    if ($user->create($username, $hashed_password)) {


                        // set session Vars
                        Session::add('logged_in', 'true');

                        Session::add('name', $username);


                        Redirect::to('http://clonesite.test/public');
                    }
                }


            }
        }
        echo $this->twig->render('auth\signup.html.twig',
            ['name_error' => $name_error,
                'username' => $username,
                'password' => $password]
        );

    }

    public function login()
    {
        $name_error=$password=$username=$flag='';

        // form submited with POST get_class_method
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            if (isset($_POST['uname']))
                $username = strip_tags(trim($_POST['uname']));


            if (isset($_POST['password']))
                $password = strip_tags(trim($_POST['password']));



            if(empty($username) && empty($_POST['password']))
            {
                $name_error = "Για να συνεχίσετε, χρειάζονται το αναγνωριστικό και ο κωδικός πρόσβασης. ";
                $flag = 1;
            }
            elseif(empty($username))
            {
                $name_error = "Πληκτρολογήστε το αναγνωριστικό. ";
            }
            elseif (empty($_POST['password'])) {
                $name_error = "Πληκτρολόγησε έναν κωδικό πρόσβασης. ";
                $flag = 2;
            }


            //  if input is valid we are ready to access database
            if($name_error === '')
            {

                // create new user
                $user = new User();

                // verify user credentials

                // successfull user login
                if($user->verify($username,$password) === true)
                {
                    // set session Vars
                    Session::add('logged_in', 'true');

                    Session::add('name', $username);


                    Redirect::to('http://clonesite.test/public');
                }
                else
                {
                    $name_error = "Το email ή ο κωδικός σου είναι λανθασμένα. ";

                }
            }
        }


        echo $this->twig->render('auth\login.html.twig',
            []
        );
    }

    public function logout()
    {
        if (isset($_SESSION))session_destroy();
            Redirect::to('http://clonesite.test/public');
    }


}