<?php
session_start();

class BloterController
{
    private $requestMethod, $role;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        session_start();
        $this->role = $_SESSION['user_role'] ?? false;
    }
}