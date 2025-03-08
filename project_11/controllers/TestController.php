<?php

require_once "Controller.php";
require_once "../models/Student.php";

class TestController extends Controller
{
    public function index()
    {
        $students = new Student($this->pdo);
        // $students->store(['name' => 'alole', 'surname' => 'aloless', 'age' => 20]);
        $this->view('tests/index', ['title' => 'test', 'students' => $students->getAll(), 'student' => $students->get(1)]);
    }

    public function show()
    {
        echo 'show';
    }
}