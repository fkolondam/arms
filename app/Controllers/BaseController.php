<?php

namespace App\Controllers;

//use App\Database;

class BaseController
{
    //protected $db;

    //public function __construct()
    //{
    //    $this->db = (new Database())->connect();
    //}

    protected function view($view, $data = [])
    {
        extract($data);
        require_once "../app/Views/{$view}.php";
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
        exit();
    }
}
?>