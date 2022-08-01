<?php

class Controller
{
    protected $database;

    public function __construct()
    {
        $this->database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);;
    }

    /**
     * @return false|mysqli|null
     */
    public function getDatabase()
    {
        return $this->database;
    }
}