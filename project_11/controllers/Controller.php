<?php

class Controller
{
    protected $pdo;
    
    protected function view($filename = '', $data = [])
    {
        require_once "../views/" . $filename . ".php";
    }

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
    }
}