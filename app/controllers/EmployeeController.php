<?php
session_start();

class EmployeeController
{
    private $requestMethod, $role;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        session_start();
        $this->role = $_SESSION['user_role'] ?? false;
    }

    public function index()
    {
        loadView("head");
        loadView("employee/home");
    }
}