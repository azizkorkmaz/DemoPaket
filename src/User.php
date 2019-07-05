<?php


namespace Azizkorkmaz\Demo;


class User
{
    public $users;

    public function __construct()
    {
        $this->bootConfig();
    }

    public function bootConfig()
    {
        require_once (__DIR__ ."../config/users.php");
        $this->users = users();
    }

    public function index()
    {
        return $this->users;
    }
}