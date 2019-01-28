<?php


use App\Classes\Database;

class Model
{

    protected $db;

    protected function __construct()
    {
        $host = getenv("DB_HOST");
        $driver = getenv("DB_DRIVER");
        $dbname = getenv("DB_NAME");
        $user = getenv("DB_USERNAME");
        $pass = getenv("DB_PASSWORD");

        $dsn = $driver . ':host='.$host .';dbname=' . $dbname;

        $this->db = new Database($dsn, $user, $pass, []);

    }

}