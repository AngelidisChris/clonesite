<?php

class User extends Model
{
    public $name;

    public $password;

    public function __construct()
    {

        parent::__construct();

    }

    public function create($username, $password)
    {
        $query = "INSERT INTO customerbasicinfo (username, password) VALUES (?,?)";

        return $this->db->run($query, [$username,$password]);
    }


    public function find($username)
    {
        $query = "SELECT * FROM customerbasicinfo WHERE username = ?";

        $result = $this->db->run($query, [$username])->fetch(PDO::FETCH_ASSOC);

        if($result["username"] === $username)
            return true;

        return false;
    }

    public function verify($username, $password)
    {
        $query = "SELECT * FROM customerbasicinfo WHERE username = ?";

        $result = $this->db->run($query, [$username])->fetch(PDO::FETCH_ASSOC);


        if ($result && password_verify($password, $result['password']))
        {
            return true;
        } else {
            return false;
        }
    }
}