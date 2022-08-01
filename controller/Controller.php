<?php

class Controller
{
    const DB_SERVER   = 'localhost:3306';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'sun_login';

    protected $database;

    public function __construct()
    {
        $this->database = mysqli_connect(self::DB_SERVER, self::DB_USERNAME, self::DB_PASSWORD, self::DB_DATABASE);;
    }

    /**
     * @return false|mysqli|null
     */
    public function getDatabase()
    {
        return $this->database;
    }
}