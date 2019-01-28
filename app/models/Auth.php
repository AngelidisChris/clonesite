<?php


class Auth extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create($username, $password)
    {


        if($this->userExists($username, $password))
        {

        }

    }



}